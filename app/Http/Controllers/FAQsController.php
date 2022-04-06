<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FAQs;
use App\Models\CompanyFAQs;

class FAQsController extends Controller
{
    public function getFAQs(FAQs $faq) {
        $faqs = FAQs::get();
        return $faqs;
    }

    public function getCompanyFAQs(CompanyFAQs $faq) {
        $companyID = request('companyID');
        $faqs = CompanyFAQs::where('f_company', $companyID)->get();
        return $faqs;
    }
}
