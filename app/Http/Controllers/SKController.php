<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SK;

class SKController extends Controller
{
    public function getSK(SK $sk) {
        $sk = SK::get();
        return $sk;
    }
}
