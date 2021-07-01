<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function seller()
    {
        return view('frontend.seller');
    }

    public function merchant()
    {
        return view('frontend.merchant');
    }

    public function estore()
    {
        return view('frontend.estore');
    }

    public function user()
    {
        return view('frontend.user');
    }
}
