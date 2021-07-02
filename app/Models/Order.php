<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Gloudemans\Shoppingcart\Facades\Cart;
use Session;
use DB;

class Order extends Model
{
    protected $fillable = [

        'user_id', 'order_date_time', 'shipping_charge', 'amount', 'delivered_date_time', 'status',
    ];

    public static $validateRule = [

        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:15',
        'address' => 'required|string|max:255',
    ];

    public function getUserAllOrder()
    {
        $orders = DB::table('orders')
                            ->where('orders.user_id', auth()->id())
                            ->latest()
                            ->select('orders.*')
                            ->get();
        return $orders;
    }

    public function storeOrder($request)
    {
        $shippingCharge  = General::where('name', 'delivery-charge')->first();
        $shipping_charge = $shippingCharge != null ? $shippingCharge->value : 0;
        $amount = $shipping_charge + (int)str_replace(',', '',Cart::total());

        $this->user_id         = auth()->user()->id;
        $this->order_date_time = date('Y-m-d H:i:s');
        $this->shipping_charge = $shipping_charge;
        $this->amount          = $amount;
        $this->status          = 0;
        $this->save();

        $order_id = $this->id;

        foreach (Cart::content() as $key => $item) {

            $orderDetails                  = new OrderDetail();
            $orderDetails->order_id        = $order_id;
            $orderDetails->user_id         = auth()->user()->id;
            $orderDetails->product_id      = $item->id;
            $orderDetails->size            = $item->options->has('size') ? $item->options->size:'';
            $orderDetails->color           = $item->options->has('color') ? $item->options->color:'';
            $orderDetails->quantity        = $item->qty;
            $orderDetails->price           = $item->price;
            $orderDetails->total           = $item->total;
            $orderDetails->order_date_time = date('Y-m-d H:i:s');
            $orderDetails->status          = 0;
            $orderDetails->save();
        }

        $shippingObject           = new Shipping();
        $shippingObject->order_id = $order_id;
        $shippingObject->user_id  = auth()->user()->id;
        $shippingObject->name     = $request->name;
        $shippingObject->phone    = $request->phone;
        $shippingObject->email    = $request->email;
        $shippingObject->address  = $request->address;
        $shippingObject->save();

        Cart::destroy();
    }

    public function changeOrderStatus(Int $id, Int $status)
    {
        $order = $this::findOrFail($id);

        if ($status == 1) {

            $order->delivered_date_time = date('Y-m-d H: i: s');
            $order->status = $status;
            $changeOrderStatus = $order->save();
            OrderDetail::where('order_id', $id)->update(['delivered_date_time' => date('Y-m-d H: i: s'), 'status' => $status]);

        } else {

            $order->status = $status;
            $changeOrderStatus = $order->save();
            OrderDetail::where('order_id', $id)->update([ 'status' => $status]);
        }

        $changeOrderStatus ?
            Session::flash('message', 'Order Status Changed Successfully!') :
            Session::flash('message', 'Something Went Wrong!');
        
    }
}
