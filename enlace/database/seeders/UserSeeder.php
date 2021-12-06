<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $json = Storage::disk('local')->get("public/data/users.json");
        $users = json_decode($json);


        foreach ($users as $user) {
            User::create([
                "name" => $user->name,
                "email" => $user->email,
                "password" => bcrypt($user->password),
            ]);
        }
    }
}
