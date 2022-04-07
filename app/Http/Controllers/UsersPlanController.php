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
        ->leftjoin('insurance_plans', 'insurance_plans.i_id', '=', 'users_plans.plan_id')
        ->select('insurance_plans.*', 'users_plans.*')
        ->where('user_id', $userid)
        ->get();

        return $plan;
    }

    public function create(InsurancePlan $plan) {
        
        $plan = UsersPlan::create([
            'user_id' => request('userId'),
            'plan_id' => request('planId'),  
            'accepted' => 'false',
        ]);

        return $plan;
    }

    public function accept(InsurancePlan $plan) {
        $userid = request('userId');
        $planid = request('planId');
        $plan = UsersPlan::where()->update([
            'accepted' => request('accepted'),
            'pay_per_month' => request('pay_per_month'),  
        ]);

        return $plan;
    }
}
