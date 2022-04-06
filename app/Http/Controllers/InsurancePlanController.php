<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InsurancePlan;
use Illuminate\Support\Facades\DB;

class InsurancePlanController extends Controller
{
    public function getInsurancePlans(InsurancePlan $insurancePlans) {
        $insurancePlans = DB::table('insurance_plans')
            ->leftjoin('companies', 'companies.id', '=', 'insurance_plans.i_company')
            ->select('insurance_plans.*', 'companies.*')
            ->get();

        return $insurancePlans;
    }
}
