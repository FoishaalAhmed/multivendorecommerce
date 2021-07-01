<?php

namespace App\Http\Controllers;

use Session;

class HomeController extends Controller
{

    public function index()
    {
        if (auth()->user()->hasRole('Admin')) {

            return redirect(route('admin.dashboard'));

        } elseif (auth()->user()->hasRole('Merchant')) {

            return redirect(route('merchant.dashboard'));

        } elseif (auth()->user()->hasRole('Estore')) {

            return redirect(route('estore.dashboard'));

        } elseif(auth()->user()->hasRole('Seller')) {

            return redirect(route('seller.dashboard'));

        } else {

            $checkout = Session::get('checkout');
            if ($checkout) {
                Session::forget('checkout');
                Session::save();
                return redirect()->route('checkout');
            }

            return redirect(route('seller.dashboard'));
        }
    }
}
