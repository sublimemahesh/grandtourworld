<!DOCTYPE html>
<html class="" lang="en"> 

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="format-detection" content="telephone=no">

        <title>Grand Tour World</title>

        <!-- GOOGLE FONT -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,%20600|Poppins:400,600" rel="stylesheet">

        <!-- CSS LIBRARY -->
        <link rel="stylesheet" type="text/css" href="assets/css/lib/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="assets/css/lib/font-elegant.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/lib/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="assets/css/lib/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/lib/owl.carousel.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/lib/perfect-scrollbar.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/lib/select2.min.css">
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE STYLE -->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <style>
            /*            @media screen and (min-width:1001px) and (max-height:800px){.Header--nav{height:80px;line-height:80px;}}
                        .Header--nav {
                            font-weight: 500;
                            display: flex;
                            position: relative;
                            z-index: 9999;
                            height: 90px;
                            line-height: 90px;
                            background: #fff;
                            white-space: nowrap;
                            box-shadow: 0 1px 35px rgba(0,0,0,.05);
            
                        }
                        
                        @media screen and (min-width:1001px) and (max-height:800px){.HeaderLogo{height:80px;width:80px;min-width:0;min-height:0}}
            
                        .Header--nav > * {
            
                            float: left;
                            height: 100%;
                            flex: 0 0 auto;
            
                        }
            
                        .Header .Header--navLeft, .Header .HeaderLogo {
            
                            transition: -webkit-transform .3s cubic-bezier(.165,.84,.44,1) .1s;
                            transition: transform .3s cubic-bezier(.165,.84,.44,1) .1s;
                            transition: transform .3s cubic-bezier(.165,.84,.44,1) .1s,-webkit-transform .3s cubic-bezier(.165,.84,.44,1) .1s;
                            -webkit-transform-origin: 0 0;
                            transform-origin: 0 0;
            
                        }
                        .visuallyhidden {
            
                position: absolute !important;
                clip: rect(1px,1px,1px,1px) !important;
                overflow: hidden;
                width: 1px;
                height: 1px;
            
            }*/

            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                /*  border: 1px solid #e7e7e7;
                  background-color: #f3f3f3;*/
            }

            li {
                float: left;
            }

            li a {
                display: block;
                color: #00060794;
                text-align: center;
                padding: 26px 25px;
                text-decoration: none;
                font-size: 17px;
                font-weight: 600;
            }

            .right li a{
                display: block;
                color: #00060794;
                text-align: center;
                padding: 26px 13px;
                text-decoration: none;
                font-size: 15px;
                font-weight: 600;
            }
            li a.active {
                /*  color: white;
                  background-color: #4CAF50;*/
            }

        </style>
    </head>
    <body>

        <nav id="header-mobile" class="header-mobile">

            <div class="header-mobile__close"></div>

            <ul class="menu">
                <li class="current-menu-item">
                    <a href="#">Home
                        <i class="fa fa-angle-down"></i>
                    </a>

                    <ul class="sub-menu">
                        <li><a href="">Home 1</a></li>
                        <li><a href="">Home 2</a></li>
                        <li><a href="">Home 3</a></li>
                        <li><a href="">Home 4</a></li>
                        <li><a href="">Home 5</a></li>
                        <li><a href="">Home 6</a></li>
                        <li><a href="">Home Landmark</a></li>
                        <li><a href="">Home Minimal</a></li>
                        <li><a href="">Header Full</a></li>
                        <li><a href="">Map</a></li>
                    </ul>

                </li>
                <li>
                    <a href="#">Pages
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="">About</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="">Pricing 1</a></li>
                        <li><a href="">Pricing 2</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#">Blog <i class="fa fa-angle-down"></i></a>
                    <ul class="sub-menu">
                        <li><a href="">Blog Grid</a></li>
                        <li><a href="">Blog Standard</a></li>
                        <li><a href="">Blog Single</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Shop <i class="fa fa-angle-down"></i></a>
                    <ul class="sub-menu">
                        <li><a href="">Shop</a></li>
                        <li><a href="">Cart</a></li>
                        <li><a href="">Single</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Listings <i class="fa fa-angle-down"></i></a>
                    <ul class="sub-menu">
                        <li><a href="">Landmark Grid</a></li>
                        <li><a href="">Landmark List</a></li>
                        <li><a href="">Listing Author</a></li>
                        <li><a href="">Listing Detail 1</a></li>
                        <li><a href="">Listing Detail 2</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Account <i class="fa fa-angle-down"></i></a>
                    <ul class="sub-menu">
                        <li><a href="">Account Address</a></li>
                        <li><a href="">Account Favourites</a></li>
                        <li><a href="">Account Listings</a></li>
                        <li><a href="">Account Notifications</a></li>
                        <li><a href="">Account Profile</a></li>
                        <li><a href="">Account Update</a></li>
                        <li><a href="">Add Listing</a></li>
                        <li><a href="">Members</a></li>
                        <li><a href="">Followers</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>



        </nav>

        <div id="wrap-page">

            <header id="header1" class="header1 row" data-break-mobile="1400" style="height: 80px;width: 100%">
                <div class="col-md-9">
                    <div class="header__logo ">
                        <a href="#">
                            <img src="assets/img/header/flag1.png" alt="">
                        </a>
                    </div>
                    <ul>
                        <li><a href="#destinations">Destinations</a></li>
                        <li><a href="#experiences">Experiences</a></li>
                        <li><a href="#accommodation">Accommodation</a></li>
                        <li><a href="#planning">Planning</a></li>
                        <li style="border-left: 1px solid #f0f0f0;"><a href="#search"><i class="fa fa-search" style="margin-right: 10px;font-size: 16px;"></i>Search</a></li>
                    </ul>
                </div>

                <div class="col-md-3 right">
                    <ul>
                        <li><a href="#destinations">Meetings</a></li>
                        <li><a href="#experiences"><i class="fa fa-globe" style="margin-right: 10px;font-size: 16px;"></i>Languages</a></li>

                    </ul> 
                </div>




            </header>

            <section id="main">

                <div class="m-bottom-0" >


                    <header class="banner-title compact">
                        <div class="banner-title--content">
                            <div class="banner-title--main">
                                <h1 class="banner-title--title">
                                   Grand Tour Highlights
                                </h1>
                            </div>
                        </div>
                    </header>


                </div>

                <!-- More -->            
                <div class="section" id="topics">

                    <div class="col-lg-12">

                        <div class="listings listings--grid wil-multiple">

                            <div class="row">
                                <div class="col-md-8">

                                    <div class="col-sm-6 col-lg-4">

                                        <div class="listing listing--grid">

                                            <div class="listing__media">

                                                <a href="#">
                                                    <img src="assets/img/highlights/sigiriya.jpg" alt="">
                                                </a>

                                            </div>

                                            <div class="listing__body">

                                                <h3 class="listing__title"><a href="#">Sigiriya </a></h3>

                                                <div class="listgo__rating">
                                                    <span class="rating__number">4.0</span>
                                                    <span class="rating__star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                </div>

                                                <!--                                            <div class="listing__content">
                                                                                                <p>Nam placerat eget arcu ac laoreet. Ut iaculis imperdiet nunc, sit amet sagittis est viverra nec...</p>
                                                                                            </div>-->

                                                <div class="item__actions">

                                                    <div class="tb">

                                                        <div class="tb__cell cell-large">
                                                            <a href="#">View detail</a>
                                                        </div>

                                                        <div class="tb__cell">
                                                            <a href="#" data-tooltip="Find Your Way">
                                                                <i class="icon_pin_alt"></i>
                                                            </a>
                                                        </div>

                                                        <div class="tb__cell">
                                                            <a href="#" data-tooltip="Find Your Way">
                                                                <i class="icon_heart_alt"></i>
                                                            </a> 
                                                        </div>

                                                    </div> 

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-sm-6 col-lg-4">

                                        <div class="listing listing--grid">

                                            <div class="listing__media">

                                                <a href="#">
                                                    <img src="assets/img/highlights/9arch.jpg" alt="">
                                                </a>

                                            </div>

                                            <div class="listing__body">

                                                <h3 class="listing__title"><a href="#">Nine Arch</a></h3>

                                                <div class="listgo__rating">
                                                    <span class="rating__number">4.0</span>
                                                    <span class="rating__star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                </div>

                                                <!--                                            <div class="listing__content">
                                                                                                <p>Nam placerat eget arcu ac laoreet. Ut iaculis imperdiet nunc, sit amet sagittis est viverra nec...</p>
                                                                                            </div>-->

                                                <div class="item__actions">

                                                    <div class="tb">

                                                        <div class="tb__cell cell-large">
                                                            <a href="#">View detail</a>
                                                        </div>

                                                        <div class="tb__cell">
                                                            <a href="#" data-tooltip="Find Your Way">
                                                                <i class="icon_pin_alt"></i>
                                                            </a>
                                                        </div>

                                                        <div class="tb__cell">
                                                            <a href="#" data-tooltip="Find Your Way">
                                                                <i class="icon_heart_alt"></i>
                                                            </a> 
                                                        </div>

                                                    </div> 

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-sm-6 col-lg-4">

                                        <div class="listing listing--grid">

                                            <div class="listing__media">

                                                <a href="#">
                                                    <img src="assets/img/highlights/kandy.jpg" alt="">
                                                </a>

                                            </div>

                                            <div class="listing__body">

                                                <h3 class="listing__title"><a href="#">Kandy Temple</a></h3>

                                                <div class="listgo__rating">
                                                    <span class="rating__number">4.0</span>
                                                    <span class="rating__star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                </div>

                                                <!--                                            <div class="listing__content">
                                                                                                <p>Nam placerat eget arcu ac laoreet. Ut iaculis imperdiet nunc, sit amet sagittis est viverra nec...</p>
                                                                                            </div>-->

                                                <div class="item__actions">

                                                    <div class="tb">

                                                        <div class="tb__cell cell-large">
                                                            <a href="#">View detail</a>
                                                        </div>

                                                        <div class="tb__cell">
                                                            <a href="#" data-tooltip="Find Your Way">
                                                                <i class="icon_pin_alt"></i>
                                                            </a>
                                                        </div>

                                                        <div class="tb__cell">
                                                            <a href="#" data-tooltip="Find Your Way">
                                                                <i class="icon_heart_alt"></i>
                                                            </a> 
                                                        </div>

                                                    </div> 

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-sm-6 col-lg-4">

                                        <div class="listing listing--grid">

                                            <div class="listing__media">

                                                <a href="#">
                                                    <img src="assets/img/highlights/Galle-Fort-Clock-Tower.jpg" alt="">
                                                </a>

                                            </div>

                                            <div class="listing__body">

                                                <h3 class="listing__title"><a href="#">Galle Fort</a></h3>

                                                <div class="listgo__rating">
                                                    <span class="rating__number">4.0</span>
                                                    <span class="rating__star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                </div>

                                                <!--                                            <div class="listing__content">
                                                                                                <p>Nam placerat eget arcu ac laoreet. Ut iaculis imperdiet nunc, sit amet sagittis est viverra nec...</p>
                                                                                            </div>-->

                                                <div class="item__actions">

                                                    <div class="tb">

                                                        <div class="tb__cell cell-large">
                                                            <a href="">View detail</a>
                                                        </div>

                                                        <div class="tb__cell">
                                                            <a href="#" data-tooltip="Find Your Way">
                                                                <i class="icon_pin_alt"></i>
                                                            </a>
                                                        </div>

                                                        <div class="tb__cell">
                                                            <a href="#" data-tooltip="Find Your Way">
                                                                <i class="icon_heart_alt"></i>
                                                            </a> 
                                                        </div>

                                                    </div> 

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-sm-6 col-lg-4">

                                        <div class="listing listing--grid">

                                            <div class="listing__media">

                                                <a href="#">
                                                    <img src="assets/img/highlights/little-adams-peak-ella.jpg" alt="">
                                                </a>

                                            </div>

                                            <div class="listing__body">

                                                <h3 class="listing__title"><a href="#">Little Adams Peak</a></h3>

                                                <div class="listgo__rating">
                                                    <span class="rating__number">4.0</span>
                                                    <span class="rating__star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                </div>

                                                <!--                                            <div class="listing__content">
                                                                                                <p>Nam placerat eget arcu ac laoreet. Ut iaculis imperdiet nunc, sit amet sagittis est viverra nec...</p>
                                                                                            </div>-->

                                                <div class="item__actions">

                                                    <div class="tb">

                                                        <div class="tb__cell cell-large">
                                                            <a href="#">View detail</a>
                                                        </div>

                                                        <div class="tb__cell">
                                                            <a href="#" data-tooltip="Find Your Way">
                                                                <i class="icon_pin_alt"></i>
                                                            </a>
                                                        </div>

                                                        <div class="tb__cell">
                                                            <a href="#" data-tooltip="Find Your Way">
                                                                <i class="icon_heart_alt"></i>
                                                            </a> 
                                                        </div>

                                                    </div> 

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4">

                                    <iframe src="https://www.google.com/maps/d/embed?mid=1-HWeWgw8vHpgBAp1Jj493dyVmbi7gjPc" width="430" height="720"></iframe>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <!-- End / Lingting -->

            </section>

            <?php
            include 'footer.php';
            ?>

        </div>

        <script type="text/javascript" src="assets/js/lib/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="assets/js/lib/jquery-ui.min.js"></script>
        <script type="text/javascript" src="assets/js/lib/jquery.owl.carousel.js"></script>
        <script type="text/javascript" src="assets/js/lib/perfect-scrollbar.min.js"></script>
        <script type="text/javascript" src="assets/js/lib/isotope.pkgd.min.js"></script>
        <script type="text/javascript" src="assets/js/lib/select2.min.js"></script>
        <script type="text/javascript" src="assets/js/scripts.js"></script>  


    </body>

</html>