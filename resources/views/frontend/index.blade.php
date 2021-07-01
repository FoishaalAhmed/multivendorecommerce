@extends('layouts.app')
@section('frontend-section')
    <!-- Page Content -->
    <div class="container content my-2">

        <div class="row">

            <div class="col-lg-8 l5-padd">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        @foreach ($sliders as $key => $item)
                            <div class="carousel-item @if ($key==0) {{ 'active' }} @endif">
                                <a href="{{ $item->link }}">
                                    <img class="d-block" src="{{ asset($item->photo) }}" height="390px" width="100%"
                                        alt="">
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>

            <div class="col-lg-4 l5-padd">
                <a href="#">
                    <img src="{{ asset('public/frontend/assets/images/ads/contact.png') }}" height="185px" width="100%"
                        alt="">
                </a>
                <a href="products/LED-TV/417/Sony-Plus-LED-HD-TV-24-Inch/42.html">
                    <img class="mt-3" src="{{ asset('public/frontend/assets/images/ads/ad.jpg') }}" height="185px"
                        width="100%" alt="https://shoptech.com.bd/products/LED-TV/417/Sony-Plus-LED-HD-TV-24-Inch/42">
                </a>
            </div>

        </div>
        <!-- /.row -->


        <div class="row">
            <div class="col-lg-12 l5-padd">
                <div class="heading1 mt-2 py-2">&nbsp;&nbsp;New Collections</div>
            </div>

            @foreach ($products as $product)
                <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                    <div class="card h-100 product">
                        <a href="#"><img class="card-img-top" src="{{ asset($product->display) }}" height="188px"
                                width="100%" alt=""></a>
                        <div class="card-body bg-core-light">
                            <a href="{{ route('detail.product', $product->slug) }}">
                                <div class="pd-header">{{ $product->name }}</div>
                                <div class="pd-price mt-2">
                                    <span>Special Price BDT {{ $product->price }}</span><br>
                                    {{-- Product Code: SPM-43391 --}}
                                    <div class="product-details-star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star-o"></span>
                                        <span class="fa fa-star-o"></span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="card-footer pd-footer">
                            <div class="row">
                                <div class="col-6 col-lg-6">
                                    <a href='{{ route('buy.now', $product->id) }}' class="btn-cart"><button
                                            class="">Buy</button></a>
                                </div>
                                <div class="col-6 col-lg-6">
                                    <a href='#' class="btn-cart"
                                        onclick="addToCart({{ $product->id }})"><button>Cart</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="col-lg-12 mt-2 l5-padd text-center">
                <button id="btnMore" class="btn bg-core px-5 text-white" style="font-size: 25px;"><img
                        src="{{ asset('public/frontend/assets/images/load-more.gif') }}" height="25px;"> <b>Load
                        More</b></button>
            </div>


        </div>

    </div>
    <!-- /.container -->
@endsection

@section('footer')
    <script>
        function addToCart(product_id) {
            event.preventDefault();
            $.ajaxSetup({

                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}'
                }

            });

            var size = '';
            var color = '';
            var qty = 1;

            $.ajax({

                url: "{{ route('cart.store') }}",
                method: 'POST',
                data: {
                    'product_id': product_id,
                    'size': size,
                    'color': color,
                    'qty': qty,
                },

                success: function(data) {

                    Swal.fire({
                        title: 'Operation Successfull!',
                        icon: 'success',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: '<a href="{{ route('cart') }}" style="color:white; text-decoration: none">Go to cart</a>',
                        cancelButtonText: 'Continue Shopping'
                    })

                    $('#cart-count').text(data);
                },

                error: function(error) {

                    console.log(error);
                }


            });
        }
    </script>
@endsection
