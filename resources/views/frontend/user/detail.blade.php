@extends('layouts.app')

@section('frontend-section')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 l5-padd">
                <div class="heading1 mt-2 py-2">&nbsp;&nbsp;Order Detail List</div>
            </div>
            <div class="col-lg-8 my-2">
                <div class="card shadow">
                    <table class="table">
                        <thead class="bg-core" style="color: #fff;">
                            <tr>
                                <th style=" width:30%"> Product</th>
                                <th style="text-align: center; width:10%"> Quantity </th>
                                <th style="text-align: center; width:10%"> Price </th>
                                <th style="text-align: center; width:10%"> Total </th>

                                <th style="text-align: center; width:20%"> Delivered </th>
                                <th style="text-align: center; width:10%"> Status </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($orders as $key => $item)
                                <tr>
                                    <td scope="row">
                                        <img src="{{ asset($item->display) }}"
                                            style="height: 120px; float: left;padding-right: 20px; " alt="">
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
                                    <td>
                                        <h6> {{ $item->quantity }}</h6>

                                    </td>
                                    <td>TK. {{ $item->price }}
                                    </td>

                                    <td>Tk.{{ $item->total }}</td>
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
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
