<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->take(3)->get();
        $products = Product::latest()->take(42)->get();
        return view('frontend.index', compact('sliders', 'products'));
    }
}
