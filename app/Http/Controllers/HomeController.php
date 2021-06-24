<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (@Auth::user()->hasRole(['Admin'])) {

            return redirect(route('admin.dashboard'));

        }elseif (@Auth::user()->hasRole(['Merchant'])) {

            return redirect(route('merchant.dashboard'));

        } elseif (@Auth::user()->hasRole(['Estore'])) {

            return redirect(route('estore.dashboard'));

        } else {

            return redirect(route('seller.dashboard'));
        }
    }
}
