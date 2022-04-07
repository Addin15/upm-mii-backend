<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProfile;

class UserController extends Controller
{
    public function getProfile(UserProfile $user){
        $id = request('userId');
        $user = UserProfile::where('user_id', $id)->get();
        return $user;
    }

    public function create(UserProfile $user){
        $user = UserProfile::create([
            'user_id' => request('user_id'),
            'name' => request('name'),
            'nric' => request('nric'),
            'gender' => request('gender'),
            'birth_date' => request('birth_date'),
            'age' => request('age'),
            'phone' => request('phone'),
            'state' => request('state'),
            'address' => request('address'),
        ]);
        return $user;
    }

    public function update(UserProfile $user){
        $id = request('userId');
        $user = UserProfile::where('user_id', $id)->update([
            'name' => request('name'),
            'nric' => request('nric'),
            'gender' => request('gender'),
            'birth_date' => request('birth_date'),
            'age' => request('age'),
            'phone' => request('phone'),
            'state' => request('state'),
            'address' => request('address'),
        ]);
        return $user;
    }
}
