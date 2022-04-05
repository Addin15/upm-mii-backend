<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FAQs;

class FAQsController extends Controller
{
    public function getFAQs(FAQs $faq) {
        $faqs = FAQs::get();
        return $faqs;
    }
}
