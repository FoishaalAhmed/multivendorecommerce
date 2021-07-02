@extends('layouts.app')

@section('frontend-section')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 l5-padd">
                <div class="heading1 mt-2 py-2">&nbsp;&nbsp;Product Order List</div>
            </div>
            <div class="col-lg-8 my-2">
                <div class="card shadow">
                    <table class="table">
                        <thead class="bg-core" style="color: #fff;">
                            <tr>
                                <th style=" width:15%"> Order Date</th>
                                <th style="text-align: center; width:15%"> Shipping Charge </th>
                                <th style="text-align: center; width:15%"> Total </th>
                                <th style="text-align: center; width:20%"> Delivered </th>
                                <th style="text-align: center; width:10%"> Status </th>
                                <th style="text-align: center; width:10%"> Detail </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $key => $item)
                                <tr>
                                    <td>
                                        {{ date('d M, Y h:i A', strtotime($item->order_date_time)) }}
                                    </td>
                                    <td>
                                        <h6>TK. {{ $item->shipping_charge }}</h6>

                                    </td>

                                    <td>Tk.{{ $item->amount }}</td>
                                    <td>
                                        @if ($item->delivered_date_time != null)
                                            {{ date('d M, Y h:i A', strtotime($item->delivered_date_time)) }} @endif
                                    </td>
                                    <td>
                                        @if ($item->status == 0) {{ 'Pending' }}

                                        @elseif($item->status == 1) {{ 'Delivered' }}

                                        @else
                                            {{ 'Canceled' }}
                                        @endif
                                    </td>
                                    <td><a href="{{ route('user.order.details', $item->id) }}"
                                            class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
