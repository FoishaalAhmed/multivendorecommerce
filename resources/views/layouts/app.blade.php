<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Home - Musa Electronics</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('public/frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('public/frontend/assets/admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
              <a href="vendorLogin.html">Vendor</a>
              <a href="admin/login.html">Admin</a>
              <a href="#" data-toggle="modal" data-target="#exampleModalMarchent">Marchent</a>
              <a href="#">Estore</a>
              <a href="servicing.html">Servicing</a>

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
          <div class="logo text-center"><a href="index.html"><img src="{{ asset('public/frontend/assets/images/logo1.png') }}" height="50px"
                width="100%"></a></div>

        </div>
        <div class="col-lg-5">
          <form method="post" action="http://shoptech.com.bd/search">
            <div class="input-group search">
              <input type="text" name="query" class="form-control" placeholder="Enter any keyword..."
                aria-label="Recipient's username" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button type="submit" name="submit" class="input-group-text"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </form>

        </div>
        <div class="col-lg-4">
          <div class="float-right">
            <div class="line-sharp">
              <div class="shop-icon"><a href="login.html"><i class="fa fa-shopping-cart"></i></a></div>
              <div class="count"><span>0</span></div>
              <div class="reg-log text-center">

                <a href="login.html"><i class="fa fa-user-o"></i> Registration or Login</a>
              </div>
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
                  <a href="index.html" data-hover="dropdown" data-delay="200" class="">
                    <i class="fa fa-fw fa-home"></i>
                  </a>
                </li>



                <li class="nav-item dropdown menu-large" style="padding-left: 10px;">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">SCIENCE SHOP <span class="caret"></span></a>
                  <ul class="dropdown mega-area">
                    <div class="container">
                      <div class="row">



                        <div class="column-5 col-lg-3 column">

                          <li><b>Student Items <span class="caret"></span></b></li>

                          <li class="nav-item"><a href="category/128" tabindex="1">Starter Kits </a></li>



                          <li class="nav-item"><a href="category/129.html" tabindex="1">Arduino</a></li>



                          <li class="nav-item"><a href="category/130.html" tabindex="1">Battery</a></li>



                          <li class="nav-item"><a href="category/131.html" tabindex="1">Project Board</a></li>



                          <li class="nav-item"><a href="category/132" tabindex="1">Motor & Parts</a></li>



                          <li class="nav-item"><a href="category/133.html" tabindex="1">Drone Parts</a></li>



                          <li class="nav-item"><a href="category/134.html" tabindex="1">Robotics Parts</a></li>



                          <li class="nav-item"><a href="category/135" tabindex="1">RC System</a></li>



                          <li class="nav-item"><a href="category/136.html" tabindex="1">Power Supply</a></li>


                          <li class="nav-item"><a href="category/148.html" tabindex="1">Student Tools</a></li>

                          <li><b>COMPONENTS <span class="caret"></span></b></li>

                          <li class=""><a href="undercategory/131.html" tabindex="1">Module</a></li>

                          <li class=""><a href="undercategory/132.html" tabindex="1">Meters</a></li>


                        </div>

                        <div class="column-5 col-lg-3 column">

                          <li><b>Components <span class="caret"></span></b></li>

                          <li class="nav-item"><a href="category/141.html" tabindex="1">Capacitors</a></li>



                          <li class="nav-item"><a href="category/142.html" tabindex="1">IC</a></li>



                          <li class="nav-item"><a href="category/143.html" tabindex="1">Resistors</a></li>



                          <li class="nav-item"><a href="category/144.html" tabindex="1">Diode/Rectifiers</a></li>



                          <li class="nav-item"><a href="category/145.html" tabindex="1">Transistors</a></li>



                          <li class="nav-item"><a href="category/146.html" tabindex="1">Sensor</a></li>



                          <li class="nav-item"><a href="category/147.html" tabindex="1">SMD Components</a></li>


                          <li><b>AUTOMATION <span class="caret"></span></b></li>


                          <li class=""><a href="undercategory/133.html" tabindex="1">Home Automation</a></li>



                          <li class=""><a href="undercategory/134.html" tabindex="1">PLC</a></li>



                          <li class=""><a href="undercategory/135.html" tabindex="1">Industrial Component</a></li>



                          <li class=""><a href="undercategory/136.html" tabindex="1">Programmer</a></li>



                          <li class=""><a href="undercategory/137.html" tabindex="1">Communication Module</a></li>



                          <li class=""><a href="undercategory/138.html" tabindex="1">HMI/Solenoid/Lock</a></li>


                          <li class="nav-item"><a href="category/155.html" tabindex="1">Solar Accessories</a></li>


                          <li class="nav-item"><a href="category/157.html" tabindex="1">Antenna</a></li>

                          <li class="nav-item"><a href="category/158.html" tabindex="1">Project Camera</a></li>



                          <li class="nav-item"><a href="category/159.html" tabindex="1">Audio Circuit</a></li>



                          <li class="nav-item"><a href="category/160.html" tabindex="1">Relay</a></li>



                          <li class="nav-item"><a href="category/161.html" tabindex="1">Regulator</a></li>



                          <li class="nav-item"><a href="category/163.html" tabindex="1">READY PROJECTS</a></li>



                          <li class="nav-item"><a href="category/164.html" tabindex="1">PROJECT TUTORIAL</a></li>



                          <li class="nav-item"><a href="category/165.html" tabindex="1">FOR MAKING PROJECT</a></li>


                        </div>


                        <div class="column-5 col-lg-3 column">

                          <li><b>ENTREPRENEUR <span class="caret"></span></b></li>


                          <li class="nav-item"><a href="category/406.html" tabindex="1">Hatchery</a></li>

                          <li class="nav-item"><a href="category/407.html" tabindex="1">Farming</a></li>



                          <li class="nav-item"><a href="category/408.html" tabindex="1">Floc Fish</a></li>



                        </div>


                      </div>
                    </div>



                  </ul>
                </li>

                <li class="nav-item dropdown menu-large" style="padding-left: 10px;">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">SECURITY SYSTEM <span class="caret"></span></a>
                  <ul class="dropdown mega-area">
                    <div class="container">
                      <div class="row">

                        <div class="column-5 col-lg-3 column">

                          <li><b>CC Camera <span class="caret"></span></b></li>


                          <li class="nav-item"><a href="category/166.html" tabindex="1">Analog Camera</a></li>



                          <li class="nav-item"><a href="category/167.html" tabindex="1">ip Camera</a></li>



                          <li class="nav-item"><a href="category/168.html" tabindex="1">Wifi Camera</a></li>



                          <li class="nav-item"><a href="category/169.html" tabindex="1">DVR/XVR Camera Machine</a></li>



                          <li class="nav-item"><a href="category/170.html" tabindex="1">NVR ip Camera Machine</a></li>


                          <li class="nav-item"><a href="category/186.html" tabindex="1">Camera DSS</a></li>



                          <li class="nav-item"><a href="category/187.html" tabindex="1">Camera CMS</a></li>



                          <li><b>Camera Package <span class="caret"></span></b></li>

                          <li class=""><a href="undercategory/6.html" tabindex="1">Analog Camera Package</a></li>



                          <li class=""><a href="undercategory/7.html" tabindex="1">ip Camera Package</a></li>



                          <li class=""><a href="undercategory/8.html" tabindex="1">Wifi Camera Package</a></li>


                        </div>



                        <div class="column-5 col-lg-3 column">

                          <li><b>Digital Camera <span class="caret"></span></b></li>



                          <li class="nav-item"><a href="category/171.html" tabindex="1">Digital Photo Camera</a></li>



                          <li class="nav-item"><a href="category/172.html" tabindex="1">DSLR Camera</a></li>



                          <li class="nav-item"><a href="category/173.html" tabindex="1">Video Camera</a></li>



                          <li class="nav-item"><a href="category/174.html" tabindex="1">Action Camera</a></li>



                          <li class="nav-item"><a href="category/175.html" tabindex="1">Spy Camera</a></li>



                          <li class="nav-item"><a href="category/188.html" tabindex="1">Car Cameras</a></li>


                          <li class="nav-item"><a href="category/443.html" tabindex="1">Webcam</a></li>


                          <li><b>Camera Accessories <span class="caret"></span></b></li>


                          <li class=""><a href="undercategory/9.html" tabindex="1">Camera Lenses</a></li>



                          <li class=""><a href="undercategory/11.html" tabindex="1">Lens Caps & Hoods</a></li>



                          <li class=""><a href="undercategory/12.html" tabindex="1">Reflector Umbrellas</a></li>


                        </div>



                        <div class="column-5 col-lg-3 column">

                          <li><b>Camera Accessories <span class="caret"></span></b></li>



                          <li class="nav-item"><a href="category/176.html" tabindex="1">Connector</a></li>



                          <li class="nav-item"><a href="category/177.html" tabindex="1">Battery</a></li>



                          <li class="nav-item"><a href="category/178.html" tabindex="1">Camera Hard Disk</a></li>



                          <li class="nav-item"><a href="category/179" tabindex="1">Memory Card</a></li>



                          <li class="nav-item"><a href="category/180.html" tabindex="1">Charger/Adapter</a></li>



                          <li class="nav-item"><a href="category/181.html" tabindex="1">Camera Stand</a></li>



                          <li class="nav-item"><a href="category/182.html" tabindex="1">Camera Bag</a></li>



                          <li class="nav-item"><a href="category/183.html" tabindex="1">Microphone</a></li>



                          <li class="nav-item"><a href="category/184.html" tabindex="1">Flashes</a></li>



                          <li class="nav-item"><a href="category/185.html" tabindex="1">Filters</a></li>


                          <li class="nav-item"><a href="category/505.html" tabindex="1">Tripods</a></li>


                        </div>



                        <div class="column-5 col-lg-3 column">

                          <li><b>Security Automation <span class="caret"></span></b></li>


                          <li class="nav-item"><a href="category/189.html" tabindex="1">Smart Door Bell</a></li>



                          <li class="nav-item"><a href="category/190.html" tabindex="1">Time Attendance System</a></li>



                          <li class="nav-item"><a href="category/191.html" tabindex="1">Access Control System</a></li>



                          <li class="nav-item"><a href="category/192.html" tabindex="1">All Metal Detector</a></li>



                          <li class="nav-item"><a href="category/193.html" tabindex="1">Fire Protection</a></li>



                          <li class="nav-item"><a href="category/194.html" tabindex="1">Home Office Networking
                              (Free)</a></li>



                          <li class="nav-item"><a href="category/195.html" tabindex="1">Queue Management System</a></li>



                          <li class="nav-item"><a href="category/196.html" tabindex="1">Vehicle Control System</a></li>



                          <li class="nav-item"><a href="category/197.html" tabindex="1">Counter Surveillance</a></li>



                          <li class="nav-item"><a href="category/198.html" tabindex="1">Entrance Security System</a>
                          </li>



                          <li class="nav-item"><a href="category/199.html" tabindex="1">Intruder Alarm System</a></li>



                          <li class="nav-item"><a href="category/200.html" tabindex="1">Tripod Gate/Flap Barrier</a>
                          </li>

                        </div>


                      </div>
                    </div>



                  </ul>
                </li>

                <li class="nav-item dropdown menu-large" style="padding-left: 10px;">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">ELECTRONICS <span class="caret"></span></a>
                  <ul class="dropdown mega-area">
                    <div class="container">
                      <div class="row">


                        <div class="column-5 col-lg-3 column">

                          <li><b>Repair Parts For Technicians <span class="caret"></span></b></li>

                          <li class="nav-item"><a href="category/201.html" tabindex="1">TV Parts</a></li>



                          <li class="nav-item"><a href="category/202.html" tabindex="1">AC Parts</a></li>



                          <li class="nav-item"><a href="category/203.html" tabindex="1">Fridge Parts</a></li>



                          <li class="nav-item"><a href="category/204.html" tabindex="1">Oven Parts</a></li>

                          <li class="nav-item"><a href="category/216.html" tabindex="1">Washing Machine Parts</a></li>



                          <li class="nav-item"><a href="category/217.html" tabindex="1">IPS Parts</a></li>



                          <li class="nav-item"><a href="category/218.html" tabindex="1">Mobile Parts & Accessories</a>
                          </li>



                          <li class="nav-item"><a href="category/219.html" tabindex="1">Generator parts</a></li>



                          <li class="nav-item"><a href="category/220.html" tabindex="1">Lift Parts </a></li>



                          <li class="nav-item"><a href="category/221.html" tabindex="1">Car Parts</a></li>



                          <li class="nav-item"><a href="category/222.html" tabindex="1">Motorcycle Parts</a></li>

                          <li class="nav-item"><a href="category/418.html" tabindex="1">Laptop Parts</a></li>

                        </div>



                        <div class="column-5 col-lg-3 column">

                          <li><b>TV <span class="caret"></span></b></li>


                          <li class="nav-item"><a href="category/205.html" tabindex="1">Smart TV</a></li>



                          <li class="nav-item"><a href="category/206.html" tabindex="1">Remote (All Brand)</a></li>



                          <li class="nav-item"><a href="category/207.html" tabindex="1">TV Adapter</a></li>



                          <li class="nav-item"><a href="category/208.html" tabindex="1">Wall Mount TV Stand</a></li>



                          <li class="nav-item"><a href="category/209.html" tabindex="1">Thunder Protector</a></li>



                          <li class="nav-item"><a href="category/210.html" tabindex="1">Volt Guard for tv</a></li>



                          <li class="nav-item"><a href="category/211.html" tabindex="1">110 Volt Converter</a></li>



                          <li class="nav-item"><a href="category/212.html" tabindex="1">Personal Dish</a></li>



                          <li class="nav-item"><a href="category/213" tabindex="1">Antenna</a></li>



                          <li class="nav-item"><a href="category/214.html" tabindex="1">TV Accessories</a></li>



                          <li class="nav-item"><a href="category/215.html" tabindex="1">TV Servicing ?</a></li>

                          <li class="nav-item"><a href="category/417.html" tabindex="1">LED TV</a></li>


                        </div>



                        <div class="column-5 col-lg-3 column">

                          <li><b>Home Appliances <span class="caret"></span></b></li>



                          <li class="nav-item"><a href="category/223.html" tabindex="1">Refrigerator</a></li>



                          <li class="nav-item"><a href="category/224.html" tabindex="1">Washing Machine</a></li>



                          <li class="nav-item"><a href="category/225.html" tabindex="1">Microwave Oven</a></li>



                          <li class="nav-item"><a href="category/226.html" tabindex="1">Air Conditioners</a></li>



                          <li class="nav-item"><a href="category/227.html" tabindex="1">Dryer</a></li>



                          <li class="nav-item"><a href="category/228.html" tabindex="1">Air Purifiers</a></li>



                          <li class="nav-item"><a href="category/229.html" tabindex="1">Vacuum Cleaners</a></li>



                          <li class="nav-item"><a href="category/230.html" tabindex="1">Water Filters</a></li>



                          <li class="nav-item"><a href="category/231.html" tabindex="1">Kitchen Appliances</a></li>



                          <li class="nav-item"><a href="category/232.html" tabindex="1">Iron/Hair Styler</a></li>



                          <li class="nav-item"><a href="category/233.html" tabindex="1">Shaving Trimmer </a></li>

                        </div>


                      </div>
                    </div>



                  </ul>
                </li>

                <li class="nav-item dropdown menu-large" style="padding-left: 10px;">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">COMPUTER <span class="caret"></span></a>
                  <ul class="dropdown mega-area">
                    <div class="container">
                      <div class="row">


                        <div class="column-5 col-lg-3 column">

                          <li><b>NOTEBOOK & COMPONENT <span class="caret"></span></b></li>


                          <li class="nav-item"><a href="category/235.html" tabindex="1">Notebook</a></li>



                          <li class="nav-item"><a href="category/236.html" tabindex="1">Notebook Ram</a></li>



                          <li class="nav-item"><a href="category/237.html" tabindex="1">Notebook Cooler</a></li>


                          <li class="nav-item"><a href="category/240.html" tabindex="1">Laptop Motherboard</a></li>



                          <li class="nav-item"><a href="category/241.html" tabindex="1">Laptop Accessories</a></li>



                          <li><b>DESKTOP PC <span class="caret"></span></b></li>


                          <li class=""><a href="undercategory/21.html" tabindex="1">Brand Desktop PC</a></li>



                          <li class=""><a href="undercategory/22.html" tabindex="1">All In One PC</a></li>



                          <li class=""><a href="undercategory/23.html" tabindex="1">Mini PC/Video Games</a></li>



                          <li class=""><a href="undercategory/24" tabindex="1">Android Box</a></li>



                          <li class=""><a href="undercategory/32.html" tabindex="1">Monitor</a></li>


                          <li><b>SERVER & COMPONENT <span class="caret"></span></b></li>



                          <li class=""><a href="undercategory/154.html" tabindex="1">Server</a></li>



                          <li class=""><a href="undercategory/155.html" tabindex="1">Server Cabinet</a></li>



                          <li class=""><a href="undercategory/156.html" tabindex="1">Server RAM</a></li>


                        </div>



                        <div class="column-5 col-lg-3 column">

                          <li><b>DESKTOP COMPONENT <span class="caret"></span></b></li>


                          <li class="nav-item"><a href="category/238.html" tabindex="1">Proccessor</a></li>



                          <li class="nav-item"><a href="category/239.html" tabindex="1">Desktop Motherboard</a></li>


                          <li class="nav-item"><a href="category/242.html" tabindex="1">Desktop RAM</a></li>



                          <li class="nav-item"><a href="category/243" tabindex="1">Optical Device</a></li>



                          <li class="nav-item"><a href="category/244.html" tabindex="1">Graphics Card</a></li>



                          <li class="nav-item"><a href="category/245.html" tabindex="1">Power Supply</a></li>



                          <li class="nav-item"><a href="category/246.html" tabindex="1">Casing</a></li>



                          <li class="nav-item"><a href="category/247.html" tabindex="1">Casing Fan</a></li>



                          <li class="nav-item"><a href="category/248.html" tabindex="1">CPU Cooler</a></li>



                          <li class="nav-item"><a href="category/249.html" tabindex="1">Keyboard</a></li>



                          <li class="nav-item"><a href="category/250.html" tabindex="1">Mouse</a></li>


                          <li class="nav-item"><a href="category/419.html" tabindex="1">Mouse Pad</a></li>



                          <li class="nav-item"><a href="category/420.html" tabindex="1">UPS</a></li>



                          <li class="nav-item"><a href="category/421.html" tabindex="1">POS SYSTEM</a></li>



                          <li class="nav-item"><a href="category/422.html" tabindex="1">STORE</a></li>


                        </div>



                        <div class="column-5 col-lg-3 column">

                          <li><b>SOFTWARE <span class="caret"></span></b></li>


                          <li class="nav-item"><a href="category/251.html" tabindex="1">Antivirus & Security</a></li>



                          <li class="nav-item"><a href="category/252" tabindex="1">Office Application</a></li>



                          <li class="nav-item"><a href="category/423.html" tabindex="1">Operating System & DB</a></li>



                          <li class="nav-item"><a href="category/424.html" tabindex="1">Bangla Typing & Others Apps</a>
                          </li>


                          <li><b>STORAGE <span class="caret"></span></b></li>


                          <li class=""><a href="undercategory/157.html" tabindex="1">Internal HDD</a></li>



                          <li class=""><a href="undercategory/158.html" tabindex="1">Internal SSD</a></li>



                          <li class=""><a href="undercategory/159.html" tabindex="1">Internal Server HDD</a></li>



                          <li class=""><a href="undercategory/160" tabindex="1">External HDD</a></li>



                          <li class=""><a href="undercategory/161.html" tabindex="1">External SSD</a></li>



                          <li class=""><a href="undercategory/162.html" tabindex="1">Pen Drive</a></li>



                          <li class=""><a href="undercategory/163.html" tabindex="1">Memory Card</a></li>



                          <li class=""><a href="undercategory/164.html" tabindex="1">HDD Case</a></li>



                          <li class=""><a href="undercategory/165.html" tabindex="1">Card Reader</a></li>


                        </div>


                        <div class="column-5 col-lg-3 column">

                          <li><b>PRINTER <span class="caret"></span></b></li>


                          <li class="nav-item"><a href="category/425.html" tabindex="1">Laser Printer</a></li>



                          <li class="nav-item"><a href="category/426.html" tabindex="1">Ink Printer</a></li>



                          <li class="nav-item"><a href="category/427.html" tabindex="1">POS Printer</a></li>



                          <li class="nav-item"><a href="category/428.html" tabindex="1">Label Printer</a></li>



                          <li class="nav-item"><a href="category/429.html" tabindex="1">Card Printer</a></li>



                          <li class="nav-item"><a href="category/430.html" tabindex="1">Dot Matrix Printer</a></li>



                          <li class="nav-item"><a href="category/431.html" tabindex="1">Large Format Printer</a></li>



                          <li class="nav-item"><a href="category/432.html" tabindex="1">Printer Paper</a></li>



                          <li class="nav-item"><a href="category/433.html" tabindex="1">Consumable</a></li>



                          <li class="nav-item"><a href="category/434.html" tabindex="1">Toner</a></li>



                          <li class="nav-item"><a href="category/435.html" tabindex="1">Cartridge</a></li>



                          <li class="nav-item"><a href="category/436" tabindex="1">Ribbon</a></li>



                          <li class="nav-item"><a href="category/437.html" tabindex="1">Refill & Drum Unit</a></li>



                          <li class="nav-item"><a href="category/438.html" tabindex="1">Print Head</a></li>



                          <li class="nav-item"><a href="category/439.html" tabindex="1">Printer Accessories</a></li>


                        </div>



                        <div class="column-5 col-lg-3 column">

                          <li><b>SCANNER <span class="caret"></span></b></li>

                          <li class="nav-item"><a href="category/440.html" tabindex="1">Flatbed Scanner</a></li>



                          <li class="nav-item"><a href="category/441.html" tabindex="1">Sheetfed & Flatbed Scanner</a>
                          </li>



                          <li class="nav-item"><a href="category/442.html" tabindex="1">Barcode Scanner</a></li>


                          <li><b>PHOTOCOPIER <span class="caret"></span></b></li>



                          <li class=""><a href="undercategory/166.html" tabindex="1">Canon Photocopier</a></li>



                          <li class=""><a href="undercategory/167.html" tabindex="1">HP Photocopier</a></li>



                          <li class=""><a href="undercategory/168.html" tabindex="1">Ricoh Photocopier</a></li>



                          <li class=""><a href="undercategory/169.html" tabindex="1">Sharp Photocopier</a></li>



                          <li class=""><a href="undercategory/170.html" tabindex="1">Toshiba Photocopier</a></li>



                          <li class=""><a href="undercategory/171.html" tabindex="1">Kyocera Photocopier</a></li>



                          <li class=""><a href="undercategory/172" tabindex="1">Others Photocopier</a></li>



                          <li class=""><a href="undercategory/173.html" tabindex="1">Photocopier Accessories</a></li>


                        </div>

                      </div>
                    </div>



                  </ul>
                </li>

                <li class="nav-item dropdown menu-large" style="padding-left: 10px;">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">NETWORK <span class="caret"></span></a>
                  <ul class="dropdown mega-area">
                    <div class="container">
                      <div class="row">

                        <div class="column-5 col-lg-3 column">

                          <li><b>NETWORKING DEVICE <span class="caret"></span></b></li>



                          <li class="nav-item"><a href="category/264.html" tabindex="1">Network Router</a></li>



                          <li class="nav-item"><a href="category/265.html" tabindex="1">Sim Supported Router</a></li>



                          <li class="nav-item"><a href="category/266.html" tabindex="1">Access Point</a></li>



                          <li class="nav-item"><a href="category/267.html" tabindex="1">Range Extender</a></li>



                          <li class="nav-item"><a href="category/268.html" tabindex="1">Network Switch</a></li>



                          <li class="nav-item"><a href="category/269.html" tabindex="1">Lan Card</a></li>



                          <li class="nav-item"><a href="category/270.html" tabindex="1">Media Converter</a></li>



                          <li class="nav-item"><a href="category/271.html" tabindex="1">Network Cable</a></li>



                          <li class="nav-item"><a href="category/272.html" tabindex="1">Network Storage</a></li>



                          <li class="nav-item"><a href="category/273" tabindex="1">EDGE Modem</a></li>


                        </div>



                        <div class="column-5 col-lg-3 column">

                          <li><b>NETWORK ACCESSORIES <span class="caret"></span></b></li>


                          <li class="nav-item"><a href="category/274.html" tabindex="1">Connector</a></li>



                          <li class="nav-item"><a href="category/275.html" tabindex="1">Face Plate</a></li>



                          <li class="nav-item"><a href="category/276.html" tabindex="1">Cable LAN</a></li>



                          <li class="nav-item"><a href="category/277.html" tabindex="1">Crimping Tool</a></li>



                          <li class="nav-item"><a href="category/278.html" tabindex="1">Pach Cord</a></li>



                          <li class="nav-item"><a href="category/279.html" tabindex="1">Internet Cable</a></li>



                          <li class="nav-item"><a href="category/280.html" tabindex="1">Pach Panel</a></li>


                          <li class="nav-item"><a href="category/289.html" tabindex="1">ISP Component</a></li>



                          <li class="nav-item"><a href="category/290.html" tabindex="1">Satellite Dishes </a></li>



                          <li class="nav-item"><a href="category/291.html" tabindex="1">Dish Accessories</a></li>


                        </div>



                        <div class="column-5 col-lg-3 column">

                          <li><b>TELEPHONE SYSTEM <span class="caret"></span></b></li>

                          <li class="nav-item"><a href="category/282.html" tabindex="1">PABX/PBX Machine</a></li>



                          <li class="nav-item"><a href="category/283" tabindex="1">Telephone Set</a></li>



                          <li class="nav-item"><a href="category/284.html" tabindex="1">Cordless Telephone Set</a></li>



                          <li class="nav-item"><a href="category/285" tabindex="1">Intercom Set</a></li>



                          <li class="nav-item"><a href="category/286.html" tabindex="1">Video Intercom System</a></li>



                          <li class="nav-item"><a href="category/287.html" tabindex="1">Wireless Intercom System</a>
                          </li>



                          <li class="nav-item"><a href="category/288.html" tabindex="1">Walkie Talkie</a></li>


                          <li class="nav-item"><a href="category/292.html" tabindex="1">Master Set</a></li>



                          <li class="nav-item"><a href="category/293.html" tabindex="1">Telephone Accessories</a></li>

                          <li class="nav-item"><a href="category/305.html" tabindex="1">ip Phone Set</a></li>


                          <li class="nav-item"><a href="category/369.html" tabindex="1">Sim Card Supported Wireless
                              Phone</a></li>

                        </div>
                      </div>
                    </div>



                  </ul>
                </li>

                <li class="nav-item dropdown menu-large" style="padding-left: 10px;">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">ACCESSORIES <span class="caret"></span></a>
                  <ul class="dropdown mega-area">
                    <div class="container">
                      <div class="row">

                        <div class="column-5 col-lg-3 column">

                          <li><b>CABLE <span class="caret"></span></b></li>

                          <li class="nav-item"><a href="category/344.html" tabindex="1">HDMI Cable</a></li>



                          <li class="nav-item"><a href="category/345.html" tabindex="1">Lighting Cable</a></li>



                          <li class="nav-item"><a href="category/346.html" tabindex="1">USB Cable</a></li>



                          <li class="nav-item"><a href="category/347" tabindex="1">Audio Cable</a></li>



                          <li class="nav-item"><a href="category/348.html" tabindex="1">Display Port Cable</a></li>


                          <li><b>TELECOMMUNICATION CABLE <span class="caret"></span></b></li>


                          <li class=""><a href="undercategory/59.html" tabindex="1">Dish Cable</a></li>



                          <li class=""><a href="undercategory/60.html" tabindex="1">Internet Cable</a></li>



                          <li class=""><a href="undercategory/61.html" tabindex="1">TNT Cable</a></li>



                          <li class=""><a href="undercategory/62.html" tabindex="1">Intercom Phone Cable</a></li>



                          <li class=""><a href="undercategory/63.html" tabindex="1">Optical Fiber Cable</a></li>

                        </div>



                        <div class="column-5 col-lg-3 column">

                          <li><b>HOME & INDUSTRIAL CABLE <span class="caret"></span></b></li>


                          <li class="nav-item"><a href="category/349" tabindex="1">Indoor/Domestic Cable</a></li>



                          <li class="nav-item"><a href="category/350.html" tabindex="1">Extra High Voltage Cable</a>
                          </li>



                          <li class="nav-item"><a href="category/351.html" tabindex="1">Medium Voltage Cable</a></li>



                          <li class="nav-item"><a href="category/352.html" tabindex="1">Low Voltage Cable</a></li>



                          <li class="nav-item"><a href="category/353.html" tabindex="1">Super Enameled Copper Wire</a>
                          </li>



                          <li class="nav-item"><a href="category/354.html" tabindex="1">CIRCUIT BREAKER</a></li>



                          <li class="nav-item"><a href="category/355.html" tabindex="1">SWITCH SOCKET</a></li>



                          <li><b>CONVERTER. <span class="caret"></span></b></li>



                          <li class=""><a href="undercategory/64.html" tabindex="1">HDMI Converter</a></li>



                          <li class=""><a href="undercategory/65.html" tabindex="1">VGA Converter</a></li>



                          <li class=""><a href="undercategory/66.html" tabindex="1">USB Hub</a></li>

                        </div>



                        <div class="column-5 col-lg-3 column">

                          <li><b>CONVERTER <span class="caret"></span></b></li>


                          <li class="nav-item"><a href="category/356.html" tabindex="1">AUDIO Converter</a></li>



                          <li class="nav-item"><a href="category/357.html" tabindex="1">Phone Converter</a></li>



                          <li class="nav-item"><a href="category/358.html" tabindex="1">Lighting Converter</a></li>



                          <li class="nav-item"><a href="category/359.html" tabindex="1">USB Converter</a></li>



                          <li class="nav-item"><a href="category/360.html" tabindex="1">Display Port Converter</a></li>



                          <li class="nav-item"><a href="category/361.html" tabindex="1">DVI Comverter</a></li>



                          <li><b>ELECTRICAL POWER <span class="caret"></span></b></li>


                          <li class=""><a href="undercategory/67.html" tabindex="1">Power Strip/Multiplug</a></li>



                          <li class=""><a href="undercategory/68.html" tabindex="1">Industrial Transformer</a></li>



                          <li class=""><a href="undercategory/69" tabindex="1">Power Cable</a></li>



                          <li class=""><a href="undercategory/70.html" tabindex="1">SOCKET</a></li>



                        </div>



                        <div class="column-5 col-lg-3 column">

                          <li><b>NOTEBOOK ACCESSORIES <span class="caret"></span></b></li>

                          <li class="nav-item"><a href="category/362.html" tabindex="1">Caddy</a></li>



                          <li class="nav-item"><a href="category/363.html" tabindex="1">Bag</a></li>



                          <li class="nav-item"><a href="category/364.html" tabindex="1">Stand</a></li>


                          <li><b>DESKTOP ACCESSORIES <span class="caret"></span></b></li>


                          <li class=""><a href="undercategory/71" tabindex="1">LED Strip</a></li>



                          <li class=""><a href="undercategory/72.html" tabindex="1">RGB Controller</a></li>



                          <li class=""><a href="undercategory/73.html" tabindex="1">Side Panel</a></li>



                          <li class=""><a href="undercategory/74.html" tabindex="1">Thermal Paste</a></li>


                          <li><b>PREMIUM ACCESSORIES <span class="caret"></span></b></li>


                          <li class=""><a href="undercategory/75.html" tabindex="1">Aple Accessories</a></li>



                          <li class=""><a href="undercategory/76.html" tabindex="1">Microsoft Accessories</a></li>


                        </div>

                      </div>
                    </div>



                  </ul>
                </li>

                <li class="nav-item dropdown menu-large" style="padding-left: 10px;">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">WATCHES & ACCESSORIES <span class="caret"></span></a>
                  <ul class="dropdown mega-area">
                    <div class="container">
                      <div class="row">

                        <div class="column-5 col-lg-3 column">

                          <li><b>MEN'S WATCH <span class="caret"></span></b></li>


                          <li class="nav-item"><a href="category/444.html" tabindex="1">Men Casual Watches</a></li>



                          <li class="nav-item"><a href="category/445.html" tabindex="1">Men's Business Watches</a></li>

                          <li class="nav-item"><a href="category/451.html" tabindex="1">Men's Fashion</a></li>

                          <li class="nav-item"><a href="category/452.html" tabindex="1">Men's Sports Watches</a></li>



                          <li><b>WOMEN'S WATCH <span class="caret"></span></b></li>


                          <li class=""><a href="undercategory/177.html" tabindex="1">Women Casual Watches</a></li>



                          <li class=""><a href="undercategory/178.html" tabindex="1">Women Business Watches</a></li>



                          <li class=""><a href="undercategory/179.html" tabindex="1">Women Fashion Watches</a></li>


                        </div>


                        <div class="column-5 col-lg-3 column">

                          <li><b>WOMEN'S JEWELLERIES <span class="caret"></span></b></li>


                          <li class="nav-item"><a href="category/453.html" tabindex="1">Women's Rings</a></li>



                          <li class="nav-item"><a href="category/454.html" tabindex="1">Necklaces</a></li>



                          <li class="nav-item"><a href="category/455.html" tabindex="1">Women Fashion Pendants</a></li>



                          <li class="nav-item"><a href="category/456.html" tabindex="1">Womens Earrings</a></li>



                          <li class="nav-item"><a href="category/457.html" tabindex="1">Jewellery sets</a></li>



                          <li class="nav-item"><a href="category/458.html" tabindex="1">Bracelet For Women</a></li>


                        </div>



                        <div class="column-5 col-lg-3 column">

                          <li><b>MEN'S JEWELLERIES <span class="caret"></span></b></li>


                          <li class="nav-item"><a href="category/459.html" tabindex="1">Men Fashion Rings</a></li>



                          <li class="nav-item"><a href="category/460.html" tabindex="1">Men Fashion Necklaces</a></li>



                          <li class="nav-item"><a href="category/461.html" tabindex="1">Men Fashion Bracelets</a></li>



                          <li class="nav-item"><a href="category/462.html" tabindex="1">Men's Belt</a></li>



                          <li class="nav-item"><a href="category/463.html" tabindex="1">Men's Wallet</a></li>



                          <li class="nav-item"><a href="category/464.html" tabindex="1">KID'S WATCH</a></li>


                        </div>



                        <div class="column-5 col-lg-3 column">

                          <li><b>SUNGLASSES <span class="caret"></span></b></li>



                          <li class="nav-item"><a href="category/465.html" tabindex="1">Men Sunglasses</a></li>



                          <li class="nav-item"><a href="category/466.html" tabindex="1">Women Sunglasses</a></li>



                          <li class="nav-item"><a href="category/467.html" tabindex="1">Kids Sunglasses</a></li>


                          <li><b>EYEGLASSES <span class="caret"></span></b></li>


                          <li class=""><a href="undercategory/180.html" tabindex="1">Men Eyeglasses</a></li>



                          <li class=""><a href="undercategory/181.html" tabindex="1">Women Eyeglasses</a></li>


                        </div>

                      </div>
                    </div>



                  </ul>
                </li>

                <li class="nav-item dropdown menu-large" style="padding-left: 10px;">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">HOME & LIFE STYLE <span class="caret"></span></a>
                  <ul class="dropdown mega-area">
                    <div class="container">
                      <div class="row">

                        <div class="column-5 col-lg-3 column">

                          <li><b>BATH <span class="caret"></span></b></li>


                          <li class="nav-item"><a href="category/415" tabindex="1">Bathroom Scales</a></li>



                          <li class="nav-item"><a href="category/468.html" tabindex="1">Shower Caddies & Hangers</a>
                          </li>



                          <li class="nav-item"><a href="category/469.html" tabindex="1">Shower Curtains</a></li>



                          <li class="nav-item"><a href="category/470.html" tabindex="1">Towel Rails & Warmers</a></li>


                          <li><b>BEDDING <span class="caret"></span></b></li>


                          <li class=""><a href="undercategory/182.html" tabindex="1">Blankets & Throws</a></li>



                          <li class=""><a href="undercategory/183.html" tabindex="1">Comforters,Quilts & Duvets</a></li>



                          <li class=""><a href="undercategory/184.html" tabindex="1">Mattress Pads</a></li>



                          <li class=""><a href="undercategory/185.html" tabindex="1">Mattress Protectors </a></li>



                          <li class=""><a href="undercategory/186.html" tabindex="1">Pillows & Bolsters </a></li>


                          <li><b>FURNITURE <span class="caret"></span></b></li>


                          <li class=""><a href="undercategory/187.html" tabindex="1">Bedroom</a></li>



                          <li class=""><a href="undercategory/188.html" tabindex="1">Living Room</a></li>



                          <li class=""><a href="undercategory/189.html" tabindex="1">Home Office</a></li>


                        </div>

                        <div class="column-5 col-lg-3 column">

                          <li><b>DECOR <span class="caret"></span></b></li>


                          <li class="nav-item"><a href="category/471.html" tabindex="1">Artificial Flowers & Plants</a>
                          </li>



                          <li class="nav-item"><a href="category/472.html" tabindex="1"> Candles & Candleholders </a>
                          </li>



                          <li class="nav-item"><a href="category/473.html" tabindex="1"> Clocks </a></li>



                          <li class="nav-item"><a href="category/474.html" tabindex="1">Curtains</a></li>



                          <li class="nav-item"><a href="category/475.html" tabindex="1">Cushions & Cushion Covers</a>
                          </li>



                          <li class="nav-item"><a href="category/476.html" tabindex="1">Picture Frames</a></li>



                          <li class="nav-item"><a href="category/477.html" tabindex="1">Rugs & Carpets</a></li>



                          <li class="nav-item"><a href="category/478.html" tabindex="1"> Vases & Vessels </a></li>


                          <li><b>LAUNDRY & CLEANING <span class="caret"></span></b></li>



                          <li class=""><a href="undercategory/190.html" tabindex="1">Brushes, Sponges & Wipers</a></li>



                          <li class=""><a href="undercategory/191" tabindex="1">Brooms, Mops & Sweepers</a></li>



                          <li class=""><a href="undercategory/192.html" tabindex="1">Laundry Baskets & Hampers</a></li>



                          <li class=""><a href="undercategory/193.html" tabindex="1">Clothes Line & Drying Racks</a>
                          </li>



                          <li class=""><a href="undercategory/194.html" tabindex="1">Ironing Boards</a></li>


                        </div>



                        <div class="column-5 col-lg-3 column">

                          <li><b>KITCHEN & DINING <span class="caret"></span></b></li>



                          <li class="nav-item"><a href="category/479.html" tabindex="1"> Storage & Organisation </a>
                          </li>



                          <li class="nav-item"><a href="category/480.html" tabindex="1"> Coffee & Tea </a></li>



                          <li class="nav-item"><a href="category/481.html" tabindex="1"> Cookware </a></li>



                          <li class="nav-item"><a href="category/482.html" tabindex="1"> Dinnerware </a></li>



                          <li class="nav-item"><a href="category/483.html" tabindex="1"> Kitchen & Table Linen </a></li>



                          <li class="nav-item"><a href="category/484.html" tabindex="1">Kitchen Storage &
                              Accessories</a></li>



                          <li class="nav-item"><a href="category/485.html" tabindex="1"> Kitchen Utensils </a></li>



                          <li class="nav-item"><a href="category/486.html" tabindex="1"> Serveware </a></li>



                          <li><b>MEDIA, MUSIC & BOOKS <span class="caret"></span></b></li>



                          <li class=""><a href="undercategory/195.html" tabindex="1">eBooks</a></li>



                          <li class=""><a href="undercategory/196.html" tabindex="1">Musical Instruments</a></li>



                          <li class=""><a href="undercategory/197.html" tabindex="1"> Books </a></li>


                 

                        </div>



                        <div class="column-5 col-lg-3 column">

                          <li><b>LIGHTING <span class="caret"></span></b></li>


                          <li class="nav-item"><a href="category/487.html" tabindex="1">Ceiling Lights</a></li>



                          <li class="nav-item"><a href="category/488.html" tabindex="1">Floor Lamps</a></li>



                          <li class="nav-item"><a href="category/489.html" tabindex="1">Lamp Shades</a></li>



                          <li class="nav-item"><a href="category/490.html" tabindex="1">Light Bulbs</a></li>



                          <li class="nav-item"><a href="category/491.html" tabindex="1">Lighting Fixtures &
                              Components</a></li>



                          <li class="nav-item"><a href="category/492.html" tabindex="1">Outdoor Lighting</a></li>



                          <li class="nav-item"><a href="category/493.html" tabindex="1">Rechargeable & Flashlights</a>
                          </li>



                          <li class="nav-item"><a href="category/494.html" tabindex="1"> Specialty Lighting </a></li>



                          <li class="nav-item"><a href="category/495.html" tabindex="1">Table Lamps</a></li>



                          <li class="nav-item"><a href="category/496.html" tabindex="1">Wall Lights & Sconces</a></li>



                          <li><b>STATIONERY & CRAFT <span class="caret"></span></b></li>


                          <li class=""><a href="undercategory/198.html" tabindex="1"> Gifts & Wrapping </a></li>



                          <li class=""><a href="undercategory/199.html" tabindex="1"> Packaging & Cartons </a></li>



                          <li class=""><a href="undercategory/200.html" tabindex="1">Paper Products</a></li>


                        </div>



                        <div class="column-5 col-lg-3 column">

                          <li><b>STATIONERY & CRAFT <span class="caret"></span></b></li>


                          <li class="nav-item"><a href="category/497.html" tabindex="1">School & Office Equipment</a>
                          </li>



                          <li class="nav-item"><a href="category/498.html" tabindex="1"> Writing & Correction </a></li>



                          <li class="nav-item"><a href="category/499.html" tabindex="1"> Art Supplies </a></li>



                          <li class="nav-item"><a href="category/500.html" tabindex="1">Craft Supplies</a></li>



                          <li class="nav-item"><a href="category/501.html" tabindex="1">Sewing</a></li>



                          <li class="nav-item"><a href="category/502.html" tabindex="1">Religious Items</a></li>



                          <li><b>TOOLS, DIY & OUTDOOR <span class="caret"></span></b></li>


                          <li class=""><a href="undercategory/201.html" tabindex="1">Outdoor Furniture</a></li>



                          <li class=""><a href="undercategory/202.html" tabindex="1"> Fixtures & Plumbing </a></li>



                          <li class=""><a href="undercategory/203.html" tabindex="1">Hand Tool Parts & Accessories</a>
                          </li>



                          <li class=""><a href="undercategory/204.html" tabindex="1"> Power Tools </a></li>



                          <li class=""><a href="undercategory/205.html" tabindex="1"> Security </a></li>



                          <li class=""><a href="undercategory/206.html" tabindex="1"> Electrical </a></li>



                        </div>



                      </div>
                    </div>



                  </ul>
                </li>

                <li class="nav-item dropdown menu-large" style="padding-left: 10px;">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">HEALTH & BEAUTY <span class="caret"></span></a>
                  <ul class="dropdown mega-area">
                    <div class="container">
                      <div class="row">

                        <div class="column-5 col-lg-3 column">

                          <li><b>BATH & BODY <span class="caret"></span></b></li>


                          <li class="nav-item"><a href="category/413.html" tabindex="1">Body & Massage Oils</a></li>



                          <li class="nav-item"><a href="category/503.html" tabindex="1"> Body Moisturizers </a></li>



                          <li class="nav-item"><a href="category/504.html" tabindex="1"> Body Scrubs </a></li>





                          <li class="nav-item"><a href="category/506.html" tabindex="1"> Body Soaps & Shower Gels </a>
                          </li>



                          <li class="nav-item"><a href="category/507.html" tabindex="1"> Foot Care </a></li>



                          <li class="nav-item"><a href="category/508.html" tabindex="1">Hair Removal Tools</a></li>



                          <li class="nav-item"><a href="category/509.html" tabindex="1">Hand Care</a></li>



                          <li class="nav-item"><a href="category/510.html" tabindex="1"> Sun Care for Body </a></li>



                          <li class="nav-item"><a href="category/511.html" tabindex="1">Bath & Body Accessories</a></li>



                          <li><b>PERSONAL CARE <span class="caret"></span></b></li>


                          <li class=""><a href="undercategory/207.html" tabindex="1">Deodorants</a></li>



                          <li class=""><a href="undercategory/208.html" tabindex="1">Feminine Care Products</a></li>



                          <li class=""><a href="undercategory/209.html" tabindex="1">Oral Care Products</a></li>



                          <li class=""><a href="undercategory/210.html" tabindex="1">Personal Safety & Security</a></li>



                        </div>


                        <div class="column-5 col-lg-3 column">

                          <li><b>BEAUTY TOOLS <span class="caret"></span></b></li>



                          <li class="nav-item"><a href="category/512.html" tabindex="1"> Curling Irons & Wands </a></li>



                          <li class="nav-item"><a href="category/513.html" tabindex="1">Hair Straighteners</a></li>



                          <li class="nav-item"><a href="category/514" tabindex="1"> Multi-stylers </a></li>



                          <li class="nav-item"><a href="category/515.html" tabindex="1"> Hair Dryers </a></li>



                          <li class="nav-item"><a href="category/516.html" tabindex="1">Face Skin Care Tools</a></li>



                          <li class="nav-item"><a href="category/517.html" tabindex="1"> Foot Relief Accessories & Tools
                            </a></li>



                          <li class="nav-item"><a href="category/518.html" tabindex="1">Hair Removal Accessories</a>
                          </li>



                          <li class="nav-item"><a href="category/519.html" tabindex="1">Slimming & Electric Massagers
                            </a></li>

                          <li><b>Men's Care <span class="caret"></span></b></li>


                          <li class=""><a href="undercategory/211.html" tabindex="1">Men's Deodorants</a></li>



                          <li class=""><a href="undercategory/212.html" tabindex="1"> Hair Care </a></li>



                          <li class=""><a href="undercategory/213.html" tabindex="1"> Shaving & Grooming </a></li>



                          <li class=""><a href="undercategory/214.html" tabindex="1">Skin Care</a></li>


                        </div>



                        <div class="column-5 col-lg-3 column">

                          <li><b>MAKEUP <span class="caret"></span></b></li>


                          <li class="nav-item"><a href="category/520.html" tabindex="1">Face</a></li>



                          <li class="nav-item"><a href="category/521.html" tabindex="1">Lips</a></li>



                          <li class="nav-item"><a href="category/522.html" tabindex="1">Eyes</a></li>



                          <li class="nav-item"><a href="category/523.html" tabindex="1">Nails</a></li>



                          <li class="nav-item"><a href="category/524.html" tabindex="1"> Makeup Palettes & Sets </a>
                          </li>



                          <li class="nav-item"><a href="category/525.html" tabindex="1"> Makeup Brushes & Sets </a></li>



                          <li class="nav-item"><a href="category/526.html" tabindex="1"> Makeup Accessories </a></li>



                          <li class="nav-item"><a href="category/527.html" tabindex="1"> Makeup Removers </a></li>


                          <li><b>FRAGRANCES <span class="caret"></span></b></li>


                          <li class=""><a href="undercategory/215.html" tabindex="1">Women Fragrances</a></li>



                          <li class=""><a href="undercategory/216.html" tabindex="1">Men Fragrances</a></li>



                          <li class=""><a href="undercategory/217.html" tabindex="1">Unisex Fragrances</a></li>


                        </div>



                        <div class="column-5 col-lg-3 column">

                          <li><b>HAIR CARE <span class="caret"></span></b></li>


                          <li class="nav-item"><a href="category/528.html" tabindex="1"> Shampoo </a></li>



                          <li class="nav-item"><a href="category/529.html" tabindex="1"> Hair Treatments </a></li>



                          <li class="nav-item"><a href="category/530.html" tabindex="1">Hair Care Accessories</a></li>



                          <li class="nav-item"><a href="category/531.html" tabindex="1">Hair Brushes & Combs</a></li>



                          <li class="nav-item"><a href="category/532.html" tabindex="1">Hair Color</a></li>



                          <li class="nav-item"><a href="category/533.html" tabindex="1">Hair Conditioner</a></li>



                          <li class="nav-item"><a href="category/534.html" tabindex="1">Hair Extensions & Hair Wigs</a>
                          </li>


                          <li><b>SKIN CARE <span class="caret"></span></b></li>



                          <li class=""><a href="undercategory/218.html" tabindex="1">Moisturizers & Creams</a></li>



                          <li class=""><a href="undercategory/219.html" tabindex="1"> Serum & Essence </a></li>



                          <li class=""><a href="undercategory/220.html" tabindex="1"> Face Mask & Packs </a></li>



                          <li class=""><a href="undercategory/221.html" tabindex="1"> Face Scrubs & Exfoliators </a>
                          </li>



                          <li class=""><a href="undercategory/222.html" tabindex="1"> Facial Cleansers </a></li>



                          <li class=""><a href="undercategory/223.html" tabindex="1"> Lip Balm and Treatments</a></li>



                          <li class=""><a href="undercategory/224.html" tabindex="1"> Toner & Mists </a></li>


                        </div>



                        <div class="column-5 col-lg-3 column">

                          <li><b> FOOD SUPPLEMENTS <span class="caret"></span></b></li>


                          <li class="nav-item"><a href="category/535.html" tabindex="1"> Beauty Supplements </a></li>



                          <li class="nav-item"><a href="category/536" tabindex="1"> Multivitamins </a></li>



                          <li class="nav-item"><a href="category/537.html" tabindex="1"> Sports Nutrition </a></li>



                          <li class="nav-item"><a href="category/538.html" tabindex="1"> Well Being </a></li>


                        </div>


                      </div>
                    </div>



                  </ul>
                </li>

                <li class="nav-item dropdown menu-large" style="padding-left: 10px;">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">BABIES & TOYS <span class="caret"></span></a>
                  <ul class="dropdown mega-area">
                    <div class="container">
                      <div class="row">


                        <div class="column-5 col-lg-3 column">

                          <li><b>DIAPERING & POTTY <span class="caret"></span></b></li>


                          <li class="nav-item"><a href="category/414.html" tabindex="1">Cloth Diapers & Accessories</a>
                          </li>

                          <li class="nav-item"><a href="category/539.html" tabindex="1">Diaper Bags</a></li>



                          <li class="nav-item"><a href="category/540.html" tabindex="1">Wipes & Holders</a></li>



                          <li class="nav-item"><a href="category/541.html" tabindex="1">Disposable Diapers</a></li>



                          <li class="nav-item"><a href="category/542.html" tabindex="1">MOTHER & BABY</a></li>


                          <li><b>BABY GEAR <span class="caret"></span></b></li>



                          <li class=""><a href="undercategory/225.html" tabindex="1">Baby Walkers</a></li>



                          <li class=""><a href="undercategory/226.html" tabindex="1">Backpacks & Carriers</a></li>



                          <li class=""><a href="undercategory/227.html" tabindex="1">Strollers</a></li>



                          <li class=""><a href="undercategory/228.html" tabindex="1">Swings, Jumpers & Bouncers</a></li>


                          <li><b>BABY PERSONAL CARE <span class="caret"></span></b></li>


                          <li class=""><a href="undercategory/229.html" tabindex="1">Baby Bath</a></li>



                          <li class=""><a href="undercategory/230.html" tabindex="1">Bathing Tubs & Seats</a></li>



                          <li class=""><a href="undercategory/231.html" tabindex="1">Shampoo & Conditioners</a></li>



                          <li class=""><a href="undercategory/232.html" tabindex="1">Soaps, Cleaners & Bodywash</a></li>


                        </div>


                        <div class="column-5 col-lg-3 column">

                          <li><b>FEEDING <span class="caret"></span></b></li>


                          <li class="nav-item"><a href="category/543.html" tabindex="1">Baby & Toddler Foods</a></li>



                          <li class="nav-item"><a href="category/544.html" tabindex="1">Milk Formula</a></li>


                          <li><b>CLOTHING & ACCESSORIES <span class="caret"></span></b></li>


                          <li class=""><a href="undercategory/233.html" tabindex="1">Girls Clothing</a></li>



                          <li class=""><a href="undercategory/234.html" tabindex="1">Girls Shoes</a></li>



                          <li class=""><a href="undercategory/235.html" tabindex="1">Boys Clothing</a></li>



                          <li class=""><a href="undercategory/236.html" tabindex="1">Maternity Wear</a></li>



                          <li class=""><a href="undercategory/237.html" tabindex="1">New Born Unisex (0-6 Months)</a>
                          </li>



                          <li class=""><a href="undercategory/238.html" tabindex="1">New Born Body Suits</a></li>



                          <li class=""><a href="undercategory/239.html" tabindex="1">New Born Sets & Packs</a></li>


                          <li><b>NURSERY <span class="caret"></span></b></li>


                          <li class=""><a href="undercategory/240.html" tabindex="1">Bathroom Safety</a></li>



                          <li class=""><a href="undercategory/241.html" tabindex="1">Mattress & Bedding</a></li>



                          <li class=""><a href="undercategory/242.html" tabindex="1">Sanitizers</a></li>


                        </div>



                        <div class="column-5 col-lg-3 column">

                          <li><b>BABY & TODDLER TOYS <span class="caret"></span></b></li>


                          <li class="nav-item"><a href="category/545.html" tabindex="1">Activity Gym & Playmats</a></li>



                          <li class="nav-item"><a href="category/546.html" tabindex="1">Baby Toys - Balls</a></li>



                          <li class="nav-item"><a href="category/547.html" tabindex="1">Bath Toys</a></li>



                          <li class="nav-item"><a href="category/548.html" tabindex="1">Crib Toys & Attachments</a></li>



                          <li class="nav-item"><a href="category/549.html" tabindex="1">Early Learning</a></li>



                          <li class="nav-item"><a href="category/550.html" tabindex="1">Indoor Climbers & Structures</a>
                          </li>



                          <li class="nav-item"><a href="category/551.html" tabindex="1">Push & Pull Toys</a></li>



                          <li class="nav-item"><a href="category/552.html" tabindex="1">Rocking & Spring Ride-Ons</a>
                          </li>


                          <li><b>REMOTE CONTROL & VEHICLES <span class="caret"></span></b></li>

                          <li class=""><a href="undercategory/243.html" tabindex="1">Die-Cast Vehicles</a></li>



                          <li class=""><a href="undercategory/244.html" tabindex="1">RC Vehicles & Batteries</a></li>



                          <li class=""><a href="undercategory/245.html" tabindex="1">Play Trains & Railway Sets</a></li>



                          <li class=""><a href="undercategory/246.html" tabindex="1">Play Vehicles</a></li>



                          <li class=""><a href="undercategory/247.html" tabindex="1">Drones & Accessories</a></li>



                        </div>



                        <div class="column-5 col-lg-3 column">

                          <li><b>SPORTS & OUTDOOR PLAY <span class="caret"></span></b></li>


                          <li class="nav-item"><a href="category/553.html" tabindex="1">Fidget Spinners & Cubes</a></li>



                          <li class="nav-item"><a href="category/554.html" tabindex="1">Kids Bikes & Accessories</a>
                          </li>



                          <li class="nav-item"><a href="category/555.html" tabindex="1">Swimming Pool & Water Toys</a>
                          </li>



                          <li class="nav-item"><a href="category/556.html" tabindex="1">Outdoor Toys</a></li>



                          <li class="nav-item"><a href="category/557.html" tabindex="1">Play Tents & Tunnels</a></li>



                          <li class="nav-item"><a href="category/558.html" tabindex="1">Boxing</a></li>



                          <li class="nav-item"><a href="category/559" tabindex="1">Play Sets & Playground Equi..</a>
                          </li>



                          <li class="nav-item"><a href="category/560.html" tabindex="1">Sports Play</a></li>



                          <li class="nav-item"><a href="category/561.html" tabindex="1">Kids Tricycles</a></li>



                          <li class="nav-item"><a href="category/562.html" tabindex="1">Toys Sports</a></li>



                          <li><b>TRADITIONAL GAMES <span class="caret"></span></b></li>


                          <li class=""><a href="undercategory/248.html" tabindex="1">Board Games</a></li>



                          <li class=""><a href="undercategory/249.html" tabindex="1">Card Games</a></li>



                          <li class=""><a href="undercategory/250.html" tabindex="1">Game Room Games</a></li>



                        </div>



                        <div class="column-5 col-lg-3 column">

                          <li><b>TOYS & GAMES <span class="caret"></span></b></li>



                          <li class="nav-item"><a href="category/563.html" tabindex="1">Action Figures &
                              Collectibles</a></li>



                          <li class="nav-item"><a href="category/564.html" tabindex="1">Arts & Crafts For Kids</a></li>



                          <li class="nav-item"><a href="category/565.html" tabindex="1">Ball Print & Accessories</a>
                          </li>



                          <li class="nav-item"><a href="category/566.html" tabindex="1">Block & Building Toys</a></li>



                          <li class="nav-item"><a href="category/567.html" tabindex="1">Doll & Accessories</a></li>



                          <li class="nav-item"><a href="category/568.html" tabindex="1">Dress Up & Pretend Play</a></li>



                          <li class="nav-item"><a href="category/569.html" tabindex="1">Electronic Toys</a></li>



                          <li class="nav-item"><a href="category/570.html" tabindex="1">Learning & Education</a></li>



                          <li class="nav-item"><a href="category/571.html" tabindex="1">Party Supplies</a></li>



                          <li class="nav-item"><a href="category/572.html" tabindex="1">Puzzle</a></li>



                          <li class="nav-item"><a href="category/573.html" tabindex="1">Slime & Squishy Toys</a></li>



                          <li class="nav-item"><a href="category/574.html" tabindex="1">Stuffed Toys</a></li>



                        </div>

                      </div>
                    </div>



                  </ul>
                </li>

                <li class="nav-item dropdown menu-large" style="padding-left: 10px;">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">GROCERIES & PETS <span class="caret"></span></a>
                  <ul class="dropdown mega-area">
                    <div class="container">
                      <div class="row">

                        <div class="column-5 col-lg-3 column">

                          <li><b>BEVERAGES <span class="caret"></span></b></li>


                          <li class="nav-item"><a href="category/416.html" tabindex="1">Coffee</a></li>


                          <li class="nav-item"><a href="category/575.html" tabindex="1">Hot Chocolate Drinks</a></li>



                          <li class="nav-item"><a href="category/576.html" tabindex="1">Powdered Drink Mixes</a></li>


                          <li><b>BREAKFAST, CHOCO & SNACKS <span class="caret"></span></b></li>


                          <li class=""><a href="undercategory/251.html" tabindex="1">Biscuit</a></li>



                          <li class=""><a href="undercategory/252.html" tabindex="1">Breakfast Cereals</a></li>



                          <li class=""><a href="undercategory/253.html" tabindex="1">Chocolate</a></li>



                          <li class=""><a href="undercategory/254.html" tabindex="1">Oatmeals</a></li>


                        </div>



                        <div class="column-5 col-lg-3 column">

                          <li><b>FOOD STAPLES <span class="caret"></span></b></li>


                          <li class="nav-item"><a href="category/577.html" tabindex="1">Canned Food</a></li>



                          <li class="nav-item"><a href="category/578.html" tabindex="1">Condiment Dressing</a></li>



                          <li class="nav-item"><a href="category/579.html" tabindex="1">Grains, Beans & Pulses</a></li>



                          <li class="nav-item"><a href="category/580.html" tabindex="1">Home Baking & Sugar</a></li>



                          <li class="nav-item"><a href="category/581.html" tabindex="1">Instant & Ready-to-Eat</a></li>



                          <li class="nav-item"><a href="category/582.html" tabindex="1">Jarred Food</a></li>



                          <li class="nav-item"><a href="category/583.html" tabindex="1">Noodles</a></li>



                          <li class="nav-item"><a href="category/584.html" tabindex="1">Rice</a></li>



                        </div>



                        <div class="column-5 col-lg-3 column">

                          <li><b>COOKING INGREDIENTS <span class="caret"></span></b></li>


                          <li class="nav-item"><a href="category/585.html" tabindex="1">Oil</a></li>



                          <li class="nav-item"><a href="category/586.html" tabindex="1">Herbs & Spices</a></li>



                          <li class="nav-item"><a href="category/587.html" tabindex="1">Sauce</a></li>


                          <li><b>LAUNDRY & HOUSEHOLD <span class="caret"></span></b></li>


                          <li class=""><a href="undercategory/255.html" tabindex="1">AirCare</a></li>



                          <li class=""><a href="undercategory/256.html" tabindex="1">Cleaning</a></li>



                          <li class=""><a href="undercategory/257.html" tabindex="1">Dishwashing</a></li>



                          <li class=""><a href="undercategory/258.html" tabindex="1">Laundry</a></li>



                          <li class=""><a href="undercategory/259.html" tabindex="1">Pest Control</a></li>


                        </div>



                        <div class="column-5 col-lg-3 column">

                          <li><b>CAT <span class="caret"></span></b></li>


                          <li class="nav-item"><a href="category/588.html" tabindex="1">Cat Food</a></li>



                          <li class="nav-item"><a href="category/589" tabindex="1">Grooming</a></li>



                          <li class="nav-item"><a href="category/590.html" tabindex="1">Cat Toys & Accessories</a></li>



                          <li class="nav-item"><a href="category/591.html" tabindex="1">Litter & Toilet</a></li>


                          <li><b>DOG <span class="caret"></span></b></li>


                          <li class=""><a href="undercategory/260.html" tabindex="1">Dog Treats</a></li>



                          <li class=""><a href="undercategory/261.html" tabindex="1">Dog Grooming</a></li>



                          <li class=""><a href="undercategory/262.html" tabindex="1">Dog Toys & Accessories</a></li>



                          <li class=""><a href="undercategory/263.html" tabindex="1">Carriers & Travel</a></li>



                          <li class=""><a href="undercategory/264.html" tabindex="1">Dog Food</a></li>



                          <li class=""><a href="undercategory/265.html" tabindex="1">Leashes, Collars & Muzzles</a></li>



                        </div>



                        <div class="column-5 col-lg-3 column">

                          <li><b>FISH <span class="caret"></span></b></li>


                          <li class="nav-item"><a href="category/592.html" tabindex="1">Aquariums & Accessories</a></li>



                          <li class="nav-item"><a href="category/593.html" tabindex="1">Fish Food</a></li>



                          <li class="nav-item"><a href="category/594.html" tabindex="1">Starter Kits</a></li>


                          <li><b>BIRD <span class="caret"></span></b></li>



                          <li class=""><a href="undercategory/266" tabindex="1">Bird Food</a></li>



                          <li><b>SMALL PET <span class="caret"></span></b></li>



                          <li class=""><a href="undercategory/267.html" tabindex="1">Small Pet Food & Accessories</a>
                          </li>

                          <li><b>LIFESTYLE ACCESSORIES <span class="caret"></span></b></li>


                          <li class=""><a href="undercategory/268.html" tabindex="1">Cigarette Lighters</a></li>




                        </div>


                      </div>
                    </div>



                  </ul>
                </li>

                <li class="nav-item dropdown menu-large" style="padding-left: 10px;">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">WOMEN'S FASHION <span class="caret"></span></a>
                  <ul class="dropdown mega-area">
                    <div class="container">
                      <div class="row">

                      </div>
                    </div>



                  </ul>
                </li>

                <li class="nav-item dropdown menu-large" style="padding-left: 10px;">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">MEN'S FASHION <span class="caret"></span></a>
                  <ul class="dropdown mega-area">
                    <div class="container">
                      <div class="row">




                      </div>
                    </div>



                  </ul>
                </li>

                <li class="nav-item dropdown menu-large" style="padding-left: 10px;">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">SPORTS & OUTDOOR <span class="caret"></span></a>
                  <ul class="dropdown mega-area">
                    <div class="container">
                      <div class="row">

                      </div>
                    </div>



                  </ul>
                </li>

                <li class="nav-item dropdown menu-large" style="padding-left: 10px;">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">AUTOMOTIVE & MOTORBIKE <span class="caret"></span></a>
                  <ul class="dropdown mega-area">
                    <div class="container">
                      <div class="row">


                      </div>
                    </div>



                  </ul>
                </li>


              </ul>
            </div>

          </div>
        </div>
      </div>
    </nav>
  </div>


  <div class="modal fade" id="exampleModalMarchent" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-core mod-head">
          <h5 class="modal-title" id="exampleModalLongTitle">Marchent Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mod-body">
          <form>
            <div class="form-group">
              <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>

            <div class="form-group">
              <input type="submit" class="btn btn-primary bg-core" name="submit" value="Login">
              <span class="float-right"><small>Not registered? <a href="#" data-dismiss="modal" data-toggle="modal"
                    data-target="#exampleModalVendorRegistration">Click Here</a></small></span>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="exampleModalMarchentRegistration" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-core mod-head">
          <h5 class="modal-title" id="exampleModalLongTitle">Marchent Registration</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mod-body">
          <form>
            <div class="form-group">
              <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>

            <div class="form-group">
              <input type="submit" class="btn btn-primary bg-core" name="submit" value="Registration">
              <span class="float-right"><small>Already registered? <a href="#" data-dismiss="modal" data-toggle="modal"
                    data-target="#exampleModalVendor">Login</a></small></span>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  @section('frontend-section')
      
  @show



  <!-- Footer -->
  <footer class="py-2 bg-core">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 border-right-core-1">
          <div class="logo text-center"><a href="index.html"><img src="{{ asset('public/frontend/assets/images/logo1.png') }}" height="50px" width="100%"></a></div>
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
    window.onscroll = function () { myFunction() };

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


</body>

</html>

<script>
  $('.holder').slice(0, 18).show();

  $('#btnMore').on('click', function () {

    $('.holder:hidden').slice(0, 6).slideDown();

    if ($('.holder:hidden').length === 0) {
      $('#btnMore').fadeOut();
    }
  });
</script>