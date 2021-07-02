@extends('layouts.app')
@section('frontend-section')
    <form method="post" action="{{ route('place.order') }}">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-lg-9 my-2">
                    <div class="card">
                        <div class="px-2 py-2">
                            <div class="font-18">Delivery Information</div>
                            @include('includes.error')
                            <div class="row pt-3">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="name" class="form-control font-13"
                                            value="{{ auth()->user()->name }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control font-13"
                                            value="{{ auth()->user()->email }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Mobile No.</label>
                                        <input type="text" name="phone" class="form-control font-13" placeholder="+880"
                                            required value="{{ auth()->user()->phone }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Full Address</label>
                                        <textarea name="address" class="form-control" rows="2" required
                                            value="{{ auth()->user()->address }}"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-2" style="padding-left: 0px;">
                    <div class="card">
                        <div class="px-2 py-2">
                            <div class="font-18 pb-2">Order Summary</div>
                            @forelse (Cart::content() as $key => $item)
                                <input type="hidden" name="product_id"
                                    value="<?php echo $item->id; ?>">
                                <input type="hidden" name="pname" value="{{ $item->name }}">
                                <input type="hidden" name="qty"
                                    value="<?php echo $item->qty; ?>">
                                <input type="hidden" name="price"
                                    value="<?php echo $item->price; ?>">
                                <input type="hidden" name="total"
                                    value="<?php echo $item->total; ?>">
                            @endforeach
                            <input type="hidden" name="net" value="{{ Cart::total() }}">
                            <div>Subtotal: <span class="float-right">{{ Cart::total() }} Tk.</span></div>
                            <div>Shipping Charge: <span class="float-right">
                                    @if ($shippingCharge != null)
                                    {{ $shippingCharge->value }} @else {{ '0' }} @endif
                                    Tk.
                                </span></div>
                            <div id="d_charge"></div>
                            <div>Total: <span class="float-right"><?php
                                    if ($shippingCharge != null) {
                                    $shipping = (int) $shippingCharge->value;
                                    } else {
                                    $shipping = 0;
                                    }
                                    echo $shipping + (int) str_replace(',', '', Cart::total());
                                    ?> Tk.</span></div>
                            <input type="submit" name="submit" class="btn bg-core btn-block text-white font-13"
                                value="Confirm Order">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 my-2">
                    <div class="card shadow">
                        <table class="table">
                            <thead class="bg-core" style="color: #fff;">
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse (Cart::content() as $key => $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->qty }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->total }} Tk.</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
