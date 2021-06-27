@extends('layouts.app')

@section('frontend-section')
    <div class="container">
        <div class="row mt-2 detail-body">
            <div class="col-lg-4">
                <img src="{{ asset($product->display) }}" alt="product1" width="100%" height="300px;" class="block__pic">
                <div class="row">
                    <div class="col">
                        <img src="{{ asset($product->display) }}"
                            onerror="this.src= '{{ asset($product->display) }}';" alt="product1" width="100%"
                            height="50px;" class="thumb">
                    </div>
                    @foreach ($productPhotos as $item) 
                    <div class="col">
                        <img src="{{ asset($item->photo) }}"
                            onerror="this.src= '{{ asset($item->photo) }}';" alt="product1" width="100%"
                            height="50px;" class="thumb">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-5">
                <div class="product-details-header mt-3">{{ $product->name }}</div>
                <div class="product-details-body">
                    <div class="product-details-star mt-2">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                    </div>
                    Brand: 24 Inch <div class="product-details-price mt-3">
                        <span class="mt-2">৳ {{ $product->price }}</span>
                        <strike>৳ {{ $product->old_price }}</strike>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-details-buy text-center">

                                <a href="#" class="">Buy Now</a>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details-add-to-cart text-center">

                                <a href="#" class="">Add to Cart</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 product-sidebar">
                <div class="product-sidebar-header mt-2">
                    Delivery Option
                    <span class="float-right">
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="product-sidebar-body mt-2">
                    <div class="row">
                        <div class="col-3 col-lg-1">
                            <i class="fa fa-envelope-open-o" aria-hidden="true"></i>
                        </div>

                        <div class="col-9 col-lg-10">
                            Will be sent to your email address within 24 working hours
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-3 col-lg-1">
                            <i class="fa fa-square" aria-hidden="true"></i>
                        </div>

                        <div class="col-9 col-lg-10">
                            Fullfilled By Shoptech
                        </div>
                    </div>
                </div>

                <div class="product-sidebar-body mt-2">
                    <div class="row">
                        <div class="col-3 col-lg-1">
                            <i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i>
                        </div>

                        <div class="col-9 col-lg-8">
                            Home Delivery in Dhaka <br>
                            5-6 Days
                        </div>
                        <div class="col-9 col-lg-2">
                            55
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-3 col-lg-1">
                            <i class="fa fa-money" aria-hidden="true"></i>
                        </div>

                        <div class="col-9 col-lg-10">
                            Cash on Delivery available
                        </div>
                    </div>
                </div>

                <div class="product-sidebar-header mt-2">
                    Return & Warranty
                    <span class="float-right">
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="product-sidebar-body mt-2">
                    <div class="row">
                        <div class="col-3 col-lg-1">
                            <i class="fa fa-check-square" aria-hidden="true"></i>
                        </div>

                        <div class="col-9 col-lg-10">
                            100% Authentic
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-3 col-lg-1">
                            <i class="fa fa-check-square" aria-hidden="true"></i>
                        </div>

                        <div class="col-9 col-lg-10">
                            14 days easy return
                        </div>
                    </div>
                </div>

                <div class="product-sidebar-header mt-2">
                    Sold By
                    <span class="float-right">
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="product-sidebar-body mt-2">
                    Shoptech Limited
                </div>


            </div>
        </div>

        <div class="row detail-body mt-2">
            <div class="col-lg-12 heading1 py-2">
                Product details of {{ $product->name }} </div>
            <div class="col-lg-12">
                <div class="product-details">
                    <p>{!! $product->description !!}</p>
                </div>
            </div>

            {{-- <div class="col-lg-12 heading1 mt-4 py-2">
                Specification of Sony Plus 24 Inch Full HD TV </div>
            <div class="col-lg-12">
                <div class="product-details">
                    <p>Sony Plus 24 Inch Full HD TV</p>
                </div>
            </div> --}}

            {{-- <div class="col-lg-12 heading1 mt-4 py-2">
                Product video of Sony Plus 24 Inch Full HD TV </div>
            <div class="col-lg-12">
                <div class="product-details">
                    <iframe width="500" height="300" src="https://www.youtube.com/embed/" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div> --}}
        </div>

        <div class="row detail-body my-2">
            <div class="col-lg-12 heading1 py-2">
                Related Products
            </div>
            @foreach ($relatedProducts as $related)
            <div class="col-6 col-lg-2 mt-2 l5-padd">
                <div class="card h-100 product">
                    <a href="{{ route('detail.product', $related->slug) }}"><img class="card-img-top" src="{{ asset($related->display) }}"
                            height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="{{ route('detail.product', $related->slug) }}">
                            <div class="pd-header">{{ $related->name }}</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 10000</span><br>
                                {{-- Product Code: SPM-94513  --}}
                                <div class="product-details-star">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-o"></span>
                                    <span class="fa fa-star-o"></span>
                                </div>
                            </div>
                    </div>
                    </a>
                    <div class="card-footer pd-footer">
                        <div class="row">
                            <div class="col-6 col-lg-6">
                                <a href='#' class="btn-cart"><button class="">Cart</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='#' class="btn-cart"><button>Buy</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach




        </div>
    </div>
@endsection
