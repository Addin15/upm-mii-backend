<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProfile;
use App\Models\InsurancePlan;
use App\Models\UsersPlan;
use Illuminate\Support\Facades\DB;

class UsersPlanController extends Controller
{
    public function get(InsurancePlan $plan) {
        $userid = request('userId');
        $plan = DB::table('users_plans')
        ->join('insurance_plans', 'insurance_plans.i_id', '=', 'users_plans.plan_id')
        ->join('companies', 'companies.c_id', '=', 'insurance_plans.i_company')
        ->select('insurance_plans.*', 'users_plans.*', 'companies.*')
        ->where([
            ['user_id', '=', $userid],
            ['accepted', '=', 1],
        ])
        ->get();

        return $plan;
    }

    public function create(InsurancePlan $plan) {
        
        $plan = UsersPlan::create([
            'user_id' => request('userId'),
            'plan_id' => request('planId'),  
            'accepted' => 0,
        ]);

        return $plan;
    }

    public function accept(InsurancePlan $plan) {
        $userid = request('userId');
        $planid = request('planId');
        $plan = UsersPlan::where()->update([
            'accepted' => request('accepted'), 
        ]);

        return $plan;
    }
}
