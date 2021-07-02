@extends('backend.layouts.app')
@section('title', 'Order Show')
@section('backend-content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Main content -->
                    <div class="invoice p-3 mb-3">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-12">
                                <h4>
                                    <i class="fas fa-globe"></i> Multivendor.
                                    <small class="float-right">Date: {{ date('d/m/Y') }}</small>
                                </h4>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                Shpping Address
                                <address>
                                    <strong>{{ $shippingInfo->name }}</strong><br>
                                    {{ $shippingInfo->address }}<br>
                                    Phone: {{ $shippingInfo->phone }}<br>
                                    Email: {{ $shippingInfo->email }}
                                </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">

                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                <b>Order ID:</b>
                                #{{ date('Y', strtotime($order->order_date_time)) }}{{ $order->id }}<br>
                                <b>Date & Time:</b>{{ date('d M, Y h:i A', strtotime($order->order_date_time)) }}
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- Table row -->
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Serial #</th>
                                            <th>Product</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $order_total = 0;
                                        @endphp
                                        @foreach ($orderDetails as $item)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>
                                                    {{ $item->name }}

                                                    @if ($item->size != null)
                                                        <br>
                                                        Size: {{ $item->size }}
                                                    @endif

                                                    @if ($item->color != null)
                                                        <br>
                                                        Color: {{ $item->color }}
                                                    @endif
                                                </td>
                                                <td>{{ $item->quantity }}</td>
                                                <td>{{ $item->price }}</td>
                                                <td>{{ $item->total }} </td>
                                            </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <div class="row">
                            <!-- accepted payments column -->
                            <div class="col-8">

                            </div>
                            <!-- /.col -->
                            <div class="col-4">

                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>Shipping:</th>
                                                <td>৳ {{ $order->shipping_charge }}</td>
                                            </tr>
                                            <tr>
                                                <th>Total:</th>
                                                <td>৳ {{ $order->amount }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-12">
                                <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i
                                        class="fas fa-print"></i> Print</a>

                            </div>
                        </div>
                    </div>
                    <!-- /.invoice -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
