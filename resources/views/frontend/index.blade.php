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
                        <div class="carousel-item active">
                            <a href="servicing.html">
                                <img class="d-block" src="{{ asset('public/frontend/assets/images/ads/Website%20Banner.png') }}" height="390px"
                                    width="100%" alt="https://shoptech.com.bd/servicing">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="#">
                                <img class="d-block" src="{{ asset('public/frontend/assets/images/ads/Musa%20Electronics1.png') }}" height="390px"
                                    width="100%" alt="">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="products/Smart-TV/205/Sony-Plus-Smart-TV-32-Inch/15.html">
                                <img class="d-block" src="{{ asset('public/frontend/assets/images/ads/Ad.png') }}" height="390px" width="100%"
                                    alt="https://shoptech.com.bd/products/Smart-TV/205/Sony-Plus-Smart-TV-32-Inch/15">
                            </a>
                        </div>
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
                    <img src="{{ asset('public/frontend/assets/images/ads/contact.png') }}" height="185px" width="100%" alt="">
                </a>
                <a href="products/LED-TV/417/Sony-Plus-LED-HD-TV-24-Inch/42.html">
                    <img class="mt-3" src="{{ asset('public/frontend/assets/images/ads/ad.jpg') }}" height="185px" width="100%"
                        alt="https://shoptech.com.bd/products/LED-TV/417/Sony-Plus-LED-HD-TV-24-Inch/42">
                </a>
            </div>

        </div>
        <!-- /.row -->


        <div class="row">
            <div class="col-lg-12 l5-padd">
                <div class="heading1 mt-2 py-2">&nbsp;&nbsp;New Collections</div>
            </div>

            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/LED-TV/417/Sony-Plus-LED-Full-HD-TV-40-Inch/45.html"><img class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/40%20inch%20Basic.jpg') }}" height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/LED-TV/417/Sony-Plus-LED-Full-HD-TV-40-Inch/45.html">
                            <div class="pd-header">Sony Plus LED Full HD TV 40 Inch</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 14,000</span><br>
                                Product Code: SPM-43391 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/LED-TV/417/Sony-Plus-LED-HD-TV-32-Inch/43"><img class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/32%20smart.jpg') }}" height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/LED-TV/417/Sony-Plus-LED-HD-TV-32-Inch/43">
                            <div class="pd-header">Sony Plus LED HD TV 32 Inch</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 7,500</span><br>
                                Product Code: SPM-8663 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/Smart-TV/205/Sony-Plus-Smart-TV-32-Inch/44.html"><img class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/32%20Inch%20Smart%20TV.jpg') }}" height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/Smart-TV/205/Sony-Plus-Smart-TV-32-Inch/44.html">
                            <div class="pd-header">Sony Plus Smart TV 32 Inch</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 9,000</span><br>
                                Product Code: SPM-54497 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/LED-TV/417/Sony-Plus-LED-Full-HD-TV-40-Inch/45.html"><img class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/40%20inch%20Basic.jpg') }}" height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/LED-TV/417/Sony-Plus-LED-Full-HD-TV-40-Inch/45.html">
                            <div class="pd-header">Sony Plus LED Full HD TV 40 Inch</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 14,000</span><br>
                                Product Code: SPM-43391 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/Smart-TV/205/Sony-Plus-43-Inch-Full-HD-Smart-TV/46.html"><img class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/43%20inch1.jpg') }}" height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/Smart-TV/205/Sony-Plus-43-Inch-Full-HD-Smart-TV/46.html">
                            <div class="pd-header">Sony Plus 43 Inch Full HD Smart TV</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 20,000</span><br>
                                Product Code: SPM-45146 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/Smart-TV/205/Sony-Plus-55-Inch-Full-HD-TV/47.html"><img class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/55%20Inch%20Smart.jpg') }}" height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/Smart-TV/205/Sony-Plus-55-Inch-Full-HD-TV/47.html">
                            <div class="pd-header">Sony Plus 55 Inch Full HD TV</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 20,000</span><br>
                                Product Code: SPM-75478 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/Smart-TV/205/Sony-Plus-LED-Full-HD-Curve-TV-55-Inch/51.html"><img class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/Double%20Glass14.jpg') }}" height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/Smart-TV/205/Sony-Plus-LED-Full-HD-Curve-TV-55-Inch/51.html">
                            <div class="pd-header">Sony Plus LED Full HD Curve TV 55 Inch</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 43,000</span><br>
                                Product Code: SPM-56927 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/Smart-TV/205/Double-Glass-Smart-TV-43/52.html"><img class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/Double%20Glass4.jpg') }}" height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/Smart-TV/205/Double-Glass-Smart-TV-43/52.html">
                            <div class="pd-header">Double Glass Smart TV 43</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 26,000</span><br>
                                Product Code: SPM-6485 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/Bluetooth-Speaker/254/High-Sound-Speaker-With-Karaoke/53"><img class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/Karaoke%20Speake.jpg') }}" height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/Bluetooth-Speaker/254/High-Sound-Speaker-With-Karaoke/53">
                            <div class="pd-header">High Sound Speaker With Karaoke</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 4,500</span><br>
                                Product Code: SPM-58651 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/Wifi-Camera/168/360-Degree-Panaromic-Camera-V380/54.html"><img class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/Panaromic%20Camera.jpg') }}" height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/Wifi-Camera/168/360-Degree-Panaromic-Camera-V380/54.html">
                            <div class="pd-header">360 Degree Panaromic Camera V380</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 1,500</span><br>
                                Product Code: SPM-99141 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/Wifi-Camera/168/Robotic-ip-Wifi-Camera-360-Degree/55.html"><img class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/Robot%20Camera.jpg') }}" height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/Wifi-Camera/168/Robotic-ip-Wifi-Camera-360-Degree/55.html">
                            <div class="pd-header">Robotic ip Wifi Camera 360 Degree</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 1,400</span><br>
                                Product Code: SPM-73018 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/LED-TV/417/Sony-Plus-24-Inch-Full-HD-TV/59.html"><img class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/2.jpg') }}" height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/LED-TV/417/Sony-Plus-24-Inch-Full-HD-TV/59.html">
                            <div class="pd-header">Sony Plus 24 Inch Full HD TV</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 10,000</span><br>
                                Product Code: SPM-94513 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/TV-Parts/201/TV-Display-Brand-New-32-Inch-DH-Display/56.html"><img
                            class="card-img-top" src="{{ asset('public/frontend/assets/images/products/Display.jpg') }}" height="188px" width="100%"
                            alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/TV-Parts/201/TV-Display-Brand-New-32-Inch-DH-Display/56.html">
                            <div class="pd-header">TV Display Brand New 32 Inch DH Display</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 7,500</span><br>
                                Product Code: SPM-27269 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/Network-Router/264/TP-Link-TL-WR840N-300Mbps-Wireless-Router/60.html"><img
                            class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/TP-Link%20TL-WR840N%20300Mbps%20Wireless%20Router3.jpg') }}"
                            height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/Network-Router/264/TP-Link-TL-WR840N-300Mbps-Wireless-Router/60.html">
                            <div class="pd-header">TP-Link TL-WR840N 300Mbps Wireless Router</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 1,240</span><br>
                                Product Code: SPM-37893 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/Network-Router/264/TP-Link-TL-WR841N-300Mbps-Wireless-Router/62"><img
                            class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/TP-Link%20TL-WR841N%20300Mbps%20Wireless%20Router2.jpg') }}"
                            height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/Network-Router/264/TP-Link-TL-WR841N-300Mbps-Wireless-Router/62">
                            <div class="pd-header">TP-Link TL-WR841N 300Mbps Wireless Router</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 1,450</span><br>
                                Product Code: SPM-87591 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/Network-Router/264/Tp-link-TL-WR850N-300Mbps-Router/61.html"><img class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/TP-Link%20TL-WR840N%20300Mbps%20Wireless%20Router1.jpg') }}"
                            height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/Network-Router/264/Tp-link-TL-WR850N-300Mbps-Router/61.html">
                            <div class="pd-header">Tp-link TL-WR850N 300Mbps Router</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 1,300</span><br>
                                Product Code: SPM-73139 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/Network-Router/264/Asus-RT-N12/63.html"><img class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/Asus%20RT-N12%2b%203-in-1%20Router%20AP%20Range%20Extender%20Router2.jpg') }}"
                            height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/Network-Router/264/Asus-RT-N12/63.html">
                            <div class="pd-header">Asus RT-N12</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 4,000</span><br>
                                Product Code: SPM-17379 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/Smart-TV/205/Sony-Plus-43-Inch-Full-HD-Smart-TV/46.html"><img class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/43%20inch1.jpg') }}" height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/Smart-TV/205/Sony-Plus-43-Inch-Full-HD-Smart-TV/46.html">
                            <div class="pd-header">Sony Plus 43 Inch Full HD Smart TV</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 20,000</span><br>
                                Product Code: SPM-45146 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/Smart-TV/205/Sony-Plus-LED-Full-HD-Curve-TV-55-Inch/51.html"><img class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/Double%20Glass14.jpg') }}" height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/Smart-TV/205/Sony-Plus-LED-Full-HD-Curve-TV-55-Inch/51.html">
                            <div class="pd-header">Sony Plus LED Full HD Curve TV 55 Inch</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 43,000</span><br>
                                Product Code: SPM-56927 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/Bluetooth-Speaker/254/High-Sound-Speaker-With-Karaoke/53"><img class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/Karaoke%20Speake.jpg') }}" height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/Bluetooth-Speaker/254/High-Sound-Speaker-With-Karaoke/53">
                            <div class="pd-header">High Sound Speaker With Karaoke</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 4,500</span><br>
                                Product Code: SPM-58651 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/Wifi-Camera/168/Robotic-ip-Wifi-Camera-360-Degree/55.html"><img class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/Robot%20Camera.jpg') }}" height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/Wifi-Camera/168/Robotic-ip-Wifi-Camera-360-Degree/55.html">
                            <div class="pd-header">Robotic ip Wifi Camera 360 Degree</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 1,400</span><br>
                                Product Code: SPM-73018 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/Analog-Camera-Package/6/Dahua-4-Camera-Package-with-Monitor/57.html"><img
                            class="card-img-top" src="{{ asset('public/frontend/assets/images/products/Dahua%204%20Camera%20Package.jpg') }}"
                            height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/Analog-Camera-Package/6/Dahua-4-Camera-Package-with-Monitor/57.html">
                            <div class="pd-header">Dahua 4 Camera Package with Monitor</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 13,500</span><br>
                                Product Code: SPM-70825 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/TV-Parts/201/TV-Display-Brand-New-32-Inch-DH-Display/56.html"><img
                            class="card-img-top" src="{{ asset('public/frontend/assets/images/products/Display.jpg') }}" height="188px" width="100%"
                            alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/TV-Parts/201/TV-Display-Brand-New-32-Inch-DH-Display/56.html">
                            <div class="pd-header">TV Display Brand New 32 Inch DH Display</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 7,500</span><br>
                                Product Code: SPM-27269 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/Wifi-Camera/168/360-Degree-Panaromic-Camera-V380/54.html"><img class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/Panaromic%20Camera.jpg') }}" height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/Wifi-Camera/168/360-Degree-Panaromic-Camera-V380/54.html">
                            <div class="pd-header">360 Degree Panaromic Camera V380</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 1,500</span><br>
                                Product Code: SPM-99141 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/Wifi-Camera/168/360-Degree-Panaromic-Camera-V380/54.html"><img class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/Panaromic%20Camera.jpg') }}" height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/Wifi-Camera/168/360-Degree-Panaromic-Camera-V380/54.html">
                            <div class="pd-header">360 Degree Panaromic Camera V380</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 1,500</span><br>
                                Product Code: SPM-99141 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/Smart-TV/205/40-Inch-LED-Smart-TV/64.html"><img class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/2.jpg') }}" height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/Smart-TV/205/40-Inch-LED-Smart-TV/64.html">
                            <div class="pd-header">40 Inch LED Smart TV</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 15,000</span><br>
                                Product Code: SPM-92011 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/Network-Router/264/Asus-RT-N12/63.html"><img class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/Asus%20RT-N12%2b%203-in-1%20Router%20AP%20Range%20Extender%20Router2.jpg') }}"
                            height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/Network-Router/264/Asus-RT-N12/63.html">
                            <div class="pd-header">Asus RT-N12</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 4,000</span><br>
                                Product Code: SPM-17379 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/Network-Router/264/TP-Link-TL-WR841N-300Mbps-Wireless-Router/62"><img
                            class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/TP-Link%20TL-WR841N%20300Mbps%20Wireless%20Router2.jpg') }}"
                            height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/Network-Router/264/TP-Link-TL-WR841N-300Mbps-Wireless-Router/62">
                            <div class="pd-header">TP-Link TL-WR841N 300Mbps Wireless Router</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 1,450</span><br>
                                Product Code: SPM-87591 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/Network-Router/264/Tp-link-TL-WR850N-300Mbps-Router/61.html"><img class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/TP-Link%20TL-WR840N%20300Mbps%20Wireless%20Router1.jpg') }}"
                            height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/Network-Router/264/Tp-link-TL-WR850N-300Mbps-Router/61.html">
                            <div class="pd-header">Tp-link TL-WR850N 300Mbps Router</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 1,300</span><br>
                                Product Code: SPM-73139 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/Network-Router/264/TP-Link-TL-WR840N-300Mbps-Wireless-Router/60.html"><img
                            class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/TP-Link%20TL-WR840N%20300Mbps%20Wireless%20Router3.jpg') }}"
                            height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/Network-Router/264/TP-Link-TL-WR840N-300Mbps-Wireless-Router/60.html">
                            <div class="pd-header">TP-Link TL-WR840N 300Mbps Wireless Router</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 1,240</span><br>
                                Product Code: SPM-37893 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/LED-TV/417/Sony-Plus-24-Inch-Full-HD-TV/59.html"><img class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/2.jpg') }}" height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/LED-TV/417/Sony-Plus-24-Inch-Full-HD-TV/59.html">
                            <div class="pd-header">Sony Plus 24 Inch Full HD TV</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 10,000</span><br>
                                Product Code: SPM-94513 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/LED-TV/417/Sony-Plus-Full-HD-TV/58.html"><img class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/1.jpg') }}" height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/LED-TV/417/Sony-Plus-Full-HD-TV/58.html">
                            <div class="pd-header">Sony Plus Full HD TV</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 11,000</span><br>
                                Product Code: SPM-48886 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/Analog-Camera-Package/6/Dahua-4-Camera-Package-with-Monitor/57.html"><img
                            class="card-img-top" src="{{ asset('public/frontend/assets/images/products/Dahua%204%20Camera%20Package.jpg') }}"
                            height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/Analog-Camera-Package/6/Dahua-4-Camera-Package-with-Monitor/57.html">
                            <div class="pd-header">Dahua 4 Camera Package with Monitor</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 13,500</span><br>
                                Product Code: SPM-70825 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/TV-Parts/201/TV-Display-Brand-New-32-Inch-DH-Display/56.html"><img
                            class="card-img-top" src="{{ asset('public/frontend/assets/images/products/Display.jpg') }}" height="188px" width="100%"
                            alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/TV-Parts/201/TV-Display-Brand-New-32-Inch-DH-Display/56.html">
                            <div class="pd-header">TV Display Brand New 32 Inch DH Display</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 7,500</span><br>
                                Product Code: SPM-27269 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/Wifi-Camera/168/Robotic-ip-Wifi-Camera-360-Degree/55.html"><img class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/Robot%20Camera.jpg') }}" height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/Wifi-Camera/168/Robotic-ip-Wifi-Camera-360-Degree/55.html">
                            <div class="pd-header">Robotic ip Wifi Camera 360 Degree</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 1,400</span><br>
                                Product Code: SPM-73018 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/Wifi-Camera/168/360-Degree-Panaromic-Camera-V380/54.html"><img class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/Panaromic%20Camera.jpg') }}" height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/Wifi-Camera/168/360-Degree-Panaromic-Camera-V380/54.html">
                            <div class="pd-header">360 Degree Panaromic Camera V380</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 1,500</span><br>
                                Product Code: SPM-99141 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/Bluetooth-Speaker/254/High-Sound-Speaker-With-Karaoke/53"><img class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/Karaoke%20Speake.jpg') }}" height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/Bluetooth-Speaker/254/High-Sound-Speaker-With-Karaoke/53">
                            <div class="pd-header">High Sound Speaker With Karaoke</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 4,500</span><br>
                                Product Code: SPM-58651 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/Smart-TV/205/Double-Glass-Smart-TV-43/52.html"><img class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/Double%20Glass4.jpg') }}" height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/Smart-TV/205/Double-Glass-Smart-TV-43/52.html">
                            <div class="pd-header">Double Glass Smart TV 43</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 26,000</span><br>
                                Product Code: SPM-6485 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/Smart-TV/205/Sony-Plus-LED-Full-HD-Curve-TV-55-Inch/51.html"><img class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/Double%20Glass14.jpg') }}" height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/Smart-TV/205/Sony-Plus-LED-Full-HD-Curve-TV-55-Inch/51.html">
                            <div class="pd-header">Sony Plus LED Full HD Curve TV 55 Inch</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 43,000</span><br>
                                Product Code: SPM-56927 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/Smart-TV/205/Sony-Plus-55-Inch-Full-HD-TV/47.html"><img class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/55%20Inch%20Smart.jpg') }}" height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/Smart-TV/205/Sony-Plus-55-Inch-Full-HD-TV/47.html">
                            <div class="pd-header">Sony Plus 55 Inch Full HD TV</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 20,000</span><br>
                                Product Code: SPM-75478 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/Smart-TV/205/Sony-Plus-43-Inch-Full-HD-Smart-TV/46.html"><img class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/43%20inch1.jpg') }}" height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/Smart-TV/205/Sony-Plus-43-Inch-Full-HD-Smart-TV/46.html">
                            <div class="pd-header">Sony Plus 43 Inch Full HD Smart TV</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 20,000</span><br>
                                Product Code: SPM-45146 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/LED-TV/417/Sony-Plus-LED-Full-HD-TV-40-Inch/45.html"><img class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/40%20inch%20Basic.jpg') }}" height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/LED-TV/417/Sony-Plus-LED-Full-HD-TV-40-Inch/45.html">
                            <div class="pd-header">Sony Plus LED Full HD TV 40 Inch</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 14,000</span><br>
                                Product Code: SPM-43391 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/Smart-TV/205/Sony-Plus-Smart-TV-32-Inch/44.html"><img class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/32%20Inch%20Smart%20TV.jpg') }}" height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/Smart-TV/205/Sony-Plus-Smart-TV-32-Inch/44.html">
                            <div class="pd-header">Sony Plus Smart TV 32 Inch</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 9,000</span><br>
                                Product Code: SPM-54497 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/LED-TV/417/Sony-Plus-LED-HD-TV-32-Inch/43"><img class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/32%20smart.jpg') }}" height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/LED-TV/417/Sony-Plus-LED-HD-TV-32-Inch/43">
                            <div class="pd-header">Sony Plus LED HD TV 32 Inch</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 7,500</span><br>
                                Product Code: SPM-8663 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-2 mt-2 l5-padd holder">
                <div class="card h-100 product">
                    <a href="products/LED-TV/417/Sony-Plus-LED-HD-TV-24-Inch/42.html"><img class="card-img-top"
                            src="{{ asset('public/frontend/assets/images/products/24%20inch.jpg') }}" height="188px" width="100%" alt=""></a>
                    <div class="card-body bg-core-light">
                        <a href="products/LED-TV/417/Sony-Plus-LED-HD-TV-24-Inch/42.html">
                            <div class="pd-header">Sony Plus LED HD TV 24 Inch</div>
                            <div class="pd-price mt-2">
                                <span>Special Price BDT 5,500</span><br>
                                Product Code: SPM-78075 <div class="product-details-star">
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
                                <a href='login.html' class="btn-cart"><button class="">Buy</button></a>
                            </div>
                            <div class="col-6 col-lg-6">
                                <a href='login.html' class="btn-cart"><button>Cart</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mt-2 l5-padd text-center">
                <button id="btnMore" class="btn bg-core px-5 text-white" style="font-size: 25px;"><img
                        src="{{ asset('public/frontend/assets/images/load-more.gif') }}" height="25px;"> <b>Load More</b></button>
            </div>


        </div>

    </div>
    <!-- /.container -->
@endsection
