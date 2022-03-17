<?php

namespace Database\Seeders;

use App\Models\Flight;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Flight::truncate();

        $json = Storage::disk('local')->get("public/data/flights.json");
        $flights = json_decode($json);

        foreach ($flights as $flight) {
            Flight::create([
                "origin" => $flight->origin,
                "destination" => $flight->destination,
                "price" => $flight->price,
                "departure_date" => $flight->departure_date,
            ]);
        }
    }
}
