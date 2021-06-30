<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home - Musa Electronics</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('public/frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('public/frontend/assets/admin/vendor/datatables/dataTables.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/font-awesome.min.css') }}">
    <!-- Custom styles for this template -->
    <link href="{{ asset('public/frontend/assets/css/shop-homepage.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/frontend/assets/css/font.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/frontend/assets/css/style.css') }}" rel="stylesheet" type="text/css" />

    <!--Custom CSS Link-->
    <link href="{{ asset('public/frontend/assets/css/styleV2.css') }}" rel="stylesheet" type="text/css" />


    <style>
        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1099;
        }

        .sticky+.content {
            padding-top: 40px;
        }

    </style>

</head>

<body>

    <div class="top-bar">
        <div class="container">
            <div class="tel">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <i class="fa fa-phone"></i>
                        +8801873001281 ( 10 AM to 5 PM)
                    </div>
                    <div class="col-12 col-lg-7">
                        <div class="float-right top-bar-a">

                            <a href="#">Offer</a>
                            <a href="{{ route('seller-login') }}">Seller</a>
                            <a href="{{ route('merchant-login') }}">Marchent</a>
                            <a href="{{ route('estore-login') }}">E store</a>
                            <a href="{{ route('services.index') }}">Servicing</a>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="head-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo text-center"><a href="{{ URL::to('/') }}"><img
                                src="{{ asset('public/frontend/assets/images/logo1.png') }}" height="50px"
                                width="100%"></a></div>

                </div>
                <div class="col-lg-5">
                    <form method="post" action="">
                        <div class="input-group search">
                            <input type="text" name="query" class="form-control" placeholder="Enter any keyword..."
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button type="submit" name="submit" class="input-group-text"><i
                                        class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-lg-4">
                    <div class="float-right">
                        <div class="line-sharp">
                            <div class="shop-icon"><a href="#"><i class="fa fa-shopping-cart"></i></a></div>
                            <div class="count"><span>0</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Navigation -->

    <div id="navbar" class="menu-bar">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse " id="navbarResponsive">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item dropdown menu-large">
                                    <a href="{{ URL::to('/') }}" data-hover="dropdown" data-delay="200" class="">
                                        <i class="fa fa-fw fa-home"></i>
                                    </a>
                                </li>

                                @foreach (App\Models\Category::orderBy('name', 'asc')->get() as $category)

                                    <li class="nav-item dropdown menu-large" style="padding-left: 10px;">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{ $category->name }} <span class="caret"></span></a>
                                        <ul class="dropdown mega-area">
                                            <div class="container">
                                                <div class="row">
                                                    @foreach (App\Models\SubCategory::where('category_id', $category->id)->orderBy('name', 'asc')->get()
    as $subCategory)

                                                        <div class="column-5 col-lg-3 column">

                                                            <li><b> {{ $subCategory->name }} <span
                                                                        class="caret"></span></b></li>
                                                            @foreach (App\Models\ChildCategory::where('sub_category_id', $subCategory->id)->orderBy('name', 'asc')->get()
    as $childCategory)

                                                                <li class="nav-item"><a
                                                                        href="{{ route('category.products', [$childCategory->id, strtolower(str_replace(' ', '-', $childCategory->name))]) }}"
                                                                        tabindex="1">{{ $childCategory->name }} </a>
                                                                </li>

                                                            @endforeach
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                @endforeach

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </nav>
    </div>

    @section('frontend-section')

    @show



    <!-- Footer -->
    <footer class="py-2 bg-core">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 border-right-core-1">
                    <div class="logo text-center"><a href="{{ URL::to('/') }}"><img
                                src="{{ asset('public/frontend/assets/images/logo1.png') }}" height="50px"
                                width="100%"></a></div>
                    <br>
                    <div class="social-icon">
                        <ul>
                            <li>
                                <a href="#"><span class="fa fa-facebook icon-social"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="fa fa-twitter icon-social"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="fa fa-youtube icon-social"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="fa fa-instagram icon-social"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="fa fa-book icon-social"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="custom-footer border-right-core-1">
                        <ul>
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="#">Branches & Pickup Points</a>
                            </li>
                            <li>
                                <a href="#">Warranty</a>
                            </li>
                            <li>
                                <a href="#">EMI</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="custom-footer border-right-core-1">
                        <ul>
                            <li>
                                <a href="#">Payment Method</a>
                            </li>
                            <li>
                                <a href="#">Order Procedure</a>
                            </li>
                            <li>
                                <a href="#">Terms & Conditions</a>
                            </li>
                            <li>
                                <a href="#">Private Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="custom-footer">
                        <span>Contact Us</span><br>
                        Dhaka, Bangladesh <br>
                        Mobile: +8801873001281 <br>
                        Whatsapp: +8801873001281 <br>
                        Email: musaelectronics@gmail.com <br>
                    </div>
                </div>
            </div>
            <p class="m-0 text-center text-white">Copyright &copy; <a href="http://ictbanglabd.com/" target="_blank">ICT
                    Bangla BD</a> 2020</p>
        </div>
        <!-- /.container -->
    </footer>

    <script>
        window.onscroll = function() {
            myFunction()
        };

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('public/frontend/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/zoomscript.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/zoomsl.js') }}"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-138452122-1"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $('.holder').slice(0, 18).show();

        $('#btnMore').on('click', function() {

            $('.holder:hidden').slice(0, 6).slideDown();

            if ($('.holder:hidden').length === 0) {
                $('#btnMore').fadeOut();
            }
        });
    </script>

    @section('footer')
    @show

</body>

</html>
