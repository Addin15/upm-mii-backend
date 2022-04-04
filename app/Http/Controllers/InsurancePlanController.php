<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InsurancePlan;

class InsurancePlanController extends Controller
{
    public function getInsurancePlans(InsurancePlan $insurancePlans) {
        $insurancePlans = InsurancePlan::get();
        return $insurancePlans;
    }
}
