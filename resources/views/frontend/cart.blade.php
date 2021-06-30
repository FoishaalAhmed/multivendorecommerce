@extends('layouts.app')

@section('frontend-section')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 l5-padd">
                <div class="heading1 mt-2 py-2">&nbsp;&nbsp;Product Cart List</div>
            </div>
            <div class="col-lg-8 my-2">
                <div class="card shadow">
                    <table class="table">
                        <thead class="bg-core" style="color: #fff;">
                            <tr>
                                <th></th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Price</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse (Cart::content() as $key => $item)
                                <tr>
                                    <th><a href="#" onclick="removeCart('{{ $item->rowId }}')"><i
                                                class="fa fa-window-close" aria-hidden="true"></i></a></th>
                                    <td>
                                        <img class="media-object" src="{{ asset($item->options->image) }}"
                                            style="width: 72px; height: 72px;border: 1px solid rgb(84, 84, 87);padding: 5px;">
                                        <br />
                                        {{ $item->name }} <br />

                                        @if ($item->options->has('size'))
                                            <h5 class="media-heading"> Size: <a href="javascript:;"><?php
                                                    echo $item->options->size; ?></a></h5>
                                        @endif

                                        @if ($item->options->has('color'))
                                            <span>Color: </span><span class="text-success"><strong><?php echo
                                                    $item->options->color; ?></strong></span>
                                        @endif
                                    </td>
                                    <td><?php echo $item->qty; ?></td>
                                    <td>৳<?php echo $item->price; ?></td>
                                    <td>৳<?php echo $item->total; ?></td>
                                </tr>
                            @empty
                                <th>Cart is empty</th>
                            @endforelse

                            <tr>
                                <th></th>
                                <td> </td>
                                <td></td>

                                <td>Net Total-</td>
                                <td>৳{{ Cart::total() }}</td>

                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('footer')
<script>

    function removeCart(rowId) {
        event.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': '{{ csrf_token() }}'
            }

        });

        $.ajax({

            url:  '{{ route("cart.delete") }}',
            method: 'POST',
            data: { 'row_id': rowId, },

            success: function(data2) {

                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Cart Removed Successfully!',
                    showConfirmButton: false,
                    timer: 1500
                });

                location.reload();

            },

            error: function(error) {

                console.log(error);
            }
        });
    }
</script>
@endsection
