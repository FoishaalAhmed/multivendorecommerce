<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class CheckoutController extends Controller
{
    public function index()
    {
        if (Auth::check()) {

            return view('frontend.checkout');

        } else {

            Session::put('checkout', true);
            return redirect()->route('user-login');
        }
    }

    public function order(Request $request)
    {
        $orderObject = new Order();

        $request->validate(Order::$validateRule);
        $orderObject->storeOrder($request);
        Session::forget('coupon_amount');
        Session::save();
        return redirect()->route('user.dashboard');
    }
}
