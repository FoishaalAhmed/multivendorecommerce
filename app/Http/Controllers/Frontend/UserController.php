<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('frontend.user.dashboard');
    }

    public function orders()
    {
        $orderObject = new Order();
        $orders = $orderObject->getUserAllOrder();
        return view('frontend.user.orders', compact('orders'));
    }

    public function detail($order_id)
    {
        $orderDetailObject = new OrderDetail();
        $orders = $orderDetailObject->getOrderDetails($order_id);
        return view('frontend.user.detail', compact('orders'));
    }
}
