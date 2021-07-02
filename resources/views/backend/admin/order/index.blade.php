@extends('backend.layouts.app')

@section('title', 'Order List')

@section('backend-content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{ __('Order List') }}</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">{{ __('Sl.') }}</th>
                                        <th style="width: 20%;">{{ __('Order') }}</th>
                                        <th style="width: 15%;">{{ __('Shipping') }}</th>
                                        <th style="width: 10%;">{{ __('Amount') }}</th>
                                        <th style="width: 20%;">{{ __('Delivered') }}</th>
                                        <th style="width: 15%;">{{ __('Status') }}</th>
                                        <th style="width: 15%;">{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $key => $order)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ date('d M, Y h:i A', strtotime($order->order_date_time)) }}</td>
                                            <td>{{ $order->shipping_charge }}</td>
                                            <td>{{ $order->amount }}</td>
                                            <td>
                                                @if ($order->delivered_date_time != null)
                                                    {{ date('d M, Y h:i A', strtotime($order->delivered_date_time)) }}
                                                @endif

                                            </td>
                                            <td>
                                                @if ($order->status == 0)
                                                    {{ 'Pending' }}

                                                @elseif($order->status == 1) {{ 'Delivered' }}

                                                @else
                                                    {{ 'Canceled' }}
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-sm bg-teal"
                                                    href="{{ route('admin.orders.show', [$order->id]) }}"><span
                                                        class="fa fa-eye"></span></a>

                                                @if ($order->status == 0)

                                                    <a class="btn btn-sm bg-green"
                                                        href="{{ route('admin.orders.status', [$order->id, 1]) }}"><span
                                                            class="fa fa-check-circle"></span></a>

                                                    <a class="btn btn-sm bg-red"
                                                        href="{{ route('admin.orders.status', [$order->id, 2]) }}"><span
                                                            class="fa fa-times"></span></a>

                                                @endif

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
