<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProfile;

class AuthController extends Controller
{
    public function get() {
        return dd(UserProfile::all());
    }
}
