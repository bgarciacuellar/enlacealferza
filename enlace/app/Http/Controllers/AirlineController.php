<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AirlineController extends Controller
{
    public function getCities(){
        $originCities = Flight::groupBy('origin')->orderBy('origin')->get(['origin']);
        $destinyCities = Flight::groupBy('destination')->orderBy('destination')->get(['destination']);
        return response()->json(['originCities' => $originCities, 'destinyCities' => $destinyCities], 200);        
    }

    public function getSchedules(){

        $months = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

        $schedules = Flight::all(['departure_date']);
        $scheduleFormated = array();
        foreach ($schedules as $schedule) {
            // $month = $months[($schedule->departure_date->format('n')) - 1];
            // $scheduleFormated[] = $schedule->departure_date->format('d') . ' de ' . $month . ' del ' . $schedule->departure_date->format('Y') . ' - ' . $schedule->departure_date->format('H') . ':' . $schedule->departure_date->format('i');
            $scheduleFormated[] = $schedule->departure_date->toDateTimeString();
        }
        
        return response()->json(['schedules' => $scheduleFormated], 200);        
    }

    public function getFlights(Request $request){

        if ($request->origin && $request->destination && $request->departure_date) {
            $flights = Flight::where('origin', $request->origin)->where('departure_date', $request->departure_date)->where('destination', $request->destination)->get();
            if (count($flights) < 1) {
                return response()->json(['flights' => $flights, 'message' => 'Vuelos no encotrados'], 204);
            }
            return response()->json(['flights' => $flights], 200);
        }

        $flights = Flight::where('destination', $request->destination)->get();

        if (count($flights) < 1) {
            return response()->json(['flights' => $flights], 204);
        }
        return response()->json(['flights' => $flights], 200);     
    }

    public function preBooking(Request $request){

        $flight = Flight::findOrFail($request->flight_id);
        if (!$flight) { 
            return response()->json(["messege" => "No se encotro ese vuelo", 204]);
        }
        $totalPrice = $flight->price * $request->passengers_numbers;

        Reservation::create([
            "flight_id" => $request->flight_id,
            "passengers_numbers" => $request->passengers_numbers,
            "total_price" => $totalPrice,
            "token" => $request->token,
        ]);

            return response()->json(['messsage' => "Reservación"], 201);
    }

    public function getBookings(Request $request){

        $bookingsArray = Reservation::where("token", $request->token)->get()->toArray();
        $totalPrice = array(0);

        $bookingsMap = function ($bokkingItem) {
            $flight = Flight::where("id", $bokkingItem["flight_id"])->first();
            return array(
                "id" => $bokkingItem['id'],
                "origin" => $flight->origin,
                "destination" => $flight->destination,
                "departure_date" => $flight->departure_date,
                "passengers_numbers" => $bokkingItem["passengers_numbers"],
                "total_price" => $bokkingItem["total_price"],
            );
        };
        $bookings = array_map($bookingsMap, $bookingsArray);

        foreach ($bookingsArray as $bokkingArray) {
            $totalPrice[] = $bokkingArray["total_price"];
        }

            return response()->json(['bookings' => $bookings, 'totalPrice' => array_sum($totalPrice)], 200);
    }

    public function cancelBooking(Request $request){

        $booking = Reservation::findOrFail($request->id);
        $booking->delete();
        return response()->json(['message' => "Reserva eliminada"], 200);
    }

    public function booking(Request $request){

        $booking = Reservation::findOrFail($request->id);
        $booking->delete();
        return response()->json(['message' => "Se ha reservado correctamente"], 200);
    }

    public function getReservation(Request $request){

        $bookingsArray = Reservation::where("id", $request->id)->get()->toArray();
        $bookingsMap = function ($bokkingItem) {
            $flight = Flight::where("id", $bokkingItem["flight_id"])->first();
            return array(
                "id" => $bokkingItem['id'],
                "origin" => $flight->origin,
                "destination" => $flight->destination,
                "departure_date" => $flight->departure_date,
                "passengers_numbers" => $bokkingItem["passengers_numbers"],
                "total_price" => $bokkingItem["total_price"],
            );
        };
        $booking = array_map($bookingsMap, $bookingsArray);
        return response()->json(['booking' => $booking[0]], 200);
    }
}
