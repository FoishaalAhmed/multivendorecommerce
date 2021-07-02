<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Shipping;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $orderObject;

    public function __construct()
    {
        $this->orderObject = new Order();
    }

    public function index()
    {
        $orders = Order::latest()->get();
        return view('backend.admin.order.index', compact('orders'));
    }

    public function show($id)
    {
        $orderDetailObject = new OrderDetail();
        $order = Order::findOrFail($id);
        $orderDetails = $orderDetailObject->getOrderDetails($id);
        $shippingInfo = Shipping::where('order_id', $id)->first();

        return view('backend.admin.order.show', compact('order', 'orderDetails', 'shippingInfo'));
    }

    public function status(Int $id, Int $status)
    {
        $this->orderObject->changeOrderStatus($id, $status);
        return back();
    }
}
