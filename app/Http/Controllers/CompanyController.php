<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function getCompanies(Company $company) {
        $company = Company::get();
        return $company;
    }
}
