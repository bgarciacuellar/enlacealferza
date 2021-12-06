<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdditionalUserInfo;
use Illuminate\Support\Facades\Storage;

class UserAdditionalInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdditionalUserInfo::truncate();

        $json = Storage::disk('local')->get("public/data/user_extra_data.json");
        $users = json_decode($json);


        foreach ($users as $user) {
            AdditionalUserInfo::create([
                "user_id" => $user->user_id,
                "last_name" => $user->last_name,
                "work_area" => $user->work_area,
                "position" => $user->position,
                "office" => $user->office,
                "company" => $user->company,
                "gender" => $user->gender,
                "birthday" => $user->birthday,
                "municipality" => $user->municipality ? $user->municipality : '',
                "civil_status" => $user->civil_status,
                "phone_number" => $user->phone_number,
                "entry_date" => $user->entry_date,
                "departure_dates" => $user->departure_dates,
            ]);
        }
    }
}
