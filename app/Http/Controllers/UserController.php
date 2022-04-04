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
}
