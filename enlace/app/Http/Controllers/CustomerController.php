<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function list(){
        $customers = User::where('role', 'customer')->get();

        // $usersMap = function ($userItem) {
        //     $additionalUserInfo = AdditionalUserInfo::where('user_id', $userItem['id'])->first();
        //     return array(
        //         "id" => $userItem['id'],
        //         "employee_id" => $userItem['employee_id'],
        //         "role" => $userItem['role'],
        //         "name" => $userItem['name'],
        //         "email" => $userItem['email'],
        //         "last_name" => $additionalUserInfo->last_name,
        //         "full_name" => $userItem['name'] . ' ' . $additionalUserInfo->last_name,
        //         "work_area" => $additionalUserInfo->work_area,
        //         "position" => $additionalUserInfo->position,
        //     );
        // };
        // $users = array_map($usersMap, $usersArray);

        return view('customer.list', compact('customers'));
    }
}
