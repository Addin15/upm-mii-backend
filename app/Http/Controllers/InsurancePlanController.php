<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InsurancePlan;
use Illuminate\Support\Facades\DB;

class InsurancePlanController extends Controller
{
    public function getInsurancePlans(InsurancePlan $insurancePlans) {
        $insurancePlans = DB::table('insurance_plans')
            ->leftjoin('companies', 'insurance_plans.i_company', '=', 'companies.c_id')
            ->select('insurance_plans.*', 'companies.*')
            ->get();

        return $insurancePlans;
    }

    public function getCompanyInsurances(InsurancePlan $insurancePlans) {
        $companyID = request('companyID');
        $insurancePlans = DB::table('insurance_plans')
            ->leftjoin('companies', 'insurance_plans.i_company', '=', 'companies.c_id')
            ->select('insurance_plans.*', 'companies.*')
            ->where('i_company', $companyID)
            ->get();
        return $insurancePlans;
    }
}
