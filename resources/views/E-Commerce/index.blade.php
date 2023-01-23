<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from max-themes.net/demos/sweetpick/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Dec 2022 16:03:11 GMT -->

<head>
    <title>SweetPick</title>

    <meta charset="utf-8">

    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link
        href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,800,900,200,100' rel='stylesheet'
        type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Noticia+Text:400,400italic,700,700italic' rel='stylesheet'
        type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,400,200,300' rel='stylesheet'
        type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic'
        rel='stylesheet' type='text/css'>


    <link rel="stylesheet" type="text/css" href="{{ asset('publicWebsite/css/bootstrap.css') }}" media="screen">

    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('publicWebsite/css/fullwidth.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('publicWebsite/css/settings.css') }}" media="screen" />

    <link rel="stylesheet" type="text/css" href="{{ asset('publicWebsite/css/font-awesome.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('publicWebsite/css/jquery.bxslider.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('publicWebsite/css/style.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="c{{ asset('publicWebsite/css/responsive.css') }}" media="screen">

    <link rel="shortcut icon" href="{{ asset('publicWebsite/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('publicWebsite/images/favicon.png') }}" type="image/x-icon">

    <!-- Style Switch -->
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('publicWebsite/css/colors/yellow-black.css') }}"
        title="yellow" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('publicWebsite/css/colors/violet-black.css') }}"
        title="black" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('publicWebsite/css/colors/orange-black.css') }}"
        title="orange" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('publicWebsite/css/colors/blue-black.css') }}"
        title="blue" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('publicWebsite/css/colors/red-black.css') }}" title="red"
        media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('publicWebsite/css/colors/green-black.css') }}"
        title="green" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('publicWebsite/css/colors/pink-black.css') }}"
        title="pink" media="screen" />
    <link rel="alternate stylesheet" type="text/css"
        href="{{ asset('publicWebsite/css/colors/pale-green-black.css') }}" title="pale-green" media="screen" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <!-- Container -->
    <div id="container">
        <!-- Header
  ================================================== -->
        <header class="clearfix">


            <!-- end topline -->

            <div class="upper-header">
                <div class="container">

                    <div class="search-input">
                        <form action="#">
                            <input type="text" placeholder="Type and Search">
                            <input type="submit" value="">
                        </form>
                    </div>

                    <div class="logo">
                        <a href="index.html"><img src="{{ asset('publicWebsite/images/logo.png') }}"
                                alt=""></a>
                    </div>

                    <div class="cart">
                        <div class="hover-cart">

                            <div class="hover-box">

                                <a href="#"><img src="{{ asset('publicWebsite/images/hover1.png') }}"
                                        alt="" class="left-hover"></a>
                                <div class="hover-details">
                                    <p>Grey California Dress</p>
                                    <div class="quantity">Quantity: 1</div>
                                </div>

                                <a href="#" class="right-hover"><img
                                        src="{{ asset('publicWebsite/images/delete.png') }}" alt=""></a>

                                <div class="clear"></div>

                            </div>

                            <div class="hover-box bd0">

                                <img src="{{ asset('publicWebsite/images/hover2.png') }}" alt=""
                                    class="left-hover">
                                <div class="hover-details">
                                    <p>Grey California Dress</p>
                                    <span>$ 3 199.00</span>
                                    <div class="quantity">Quantity: 1</div>
                                </div>

                                <a href="#" class="right-hover"><img
                                        src="{{ asset('publicWebsite/images/delete.png') }}" alt=""></a>

                                <div class="clear"></div>

                            </div>

                            <div class="subtotal">
                                Cart Subtotal: <span>$ 4 372</span>
                            </div>

                            <button class="viewcard"> View Cart</button>
                            <button class="proceedcard"> Proceed</button>

                        </div>
                    </div>

                    <div class="clear"></div>

                </div>

                <div class="container">
                    <!-- Navigation -->
                    <nav id="nav">
                        <ul id="navlist" class="sf-menu clearfix">
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                        role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest


                        </ul>
                    </nav>
                    <!-- Navigation -->
                </div>
                <!-- End container -->
            </div>
            <!-- End Upper-header -->

            <div class="nav-border"></div>

        </header>
        <!-- End Header -->

        <!-- Slider -->
        <div class="slider heightski">
            <div class="fullwidthbanner-container">
                <div class="fullwidthbanner" id="intro">
                    <ul>
                        <!-- First SLIDE -->
                        <li data-transition="random" data-slotamount="10" data-masterspeed="300">
                            <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                            <img src="{{ asset('publicWebsite/upload/revolution/lap.jfif') }}"
                                data-fullwidthcentering="on" alt="slide">
                            <!-- THE CAPTIONS IN THIS SLDIE -->

                            <div class="caption lfl" data-x="center" data-y="280" data-speed="400"
                                data-start="1800" data-easing="easeOutExpo" data-end="7200" data-endspeed="300"
                                data-endeasing="easeInSine">
                                <img src="{{ asset('publicWebsite/upload/revolution/s-border.png') }}"
                                    alt="Image 1">
                            </div>
                        </li>
                        <!-- second SLIDE -->
                        <li data-transition="random" data-slotamount="10" data-masterspeed="300">
                            <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                            <img src="{{ asset('publicWebsite/upload/revolution/lap2.jfif') }}"
                                data-fullwidthcentering="on" alt="slide">
                            <!-- THE CAPTIONS IN THIS SLDIE -->
                            <div class="caption lfl" data-x="center" data-y="280" data-speed="400"
                                data-start="1800" data-easing="easeOutExpo" data-end="7200" data-endspeed="300"
                                data-endeasing="easeInSine">
                                <img src="{{ asset('publicWebsite/upload/revolution/s-border.png') }}"
                                    alt="Image 1">
                            </div>
                        </li>

                        <!-- third SLIDE -->
                        <li data-transition="random" data-slotamount="10" data-masterspeed="300">
                            <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                            <img src="{{ asset('publicWebsite/upload/revolution/lap3.jfif') }}"
                                data-fullwidthcentering="on" alt="slide">
                            <!-- THE CAPTIONS IN THIS SLDIE -->


                            <div class="caption lfl" data-x="730" data-y="460" data-speed="400"
                                data-start="1800" data-easing="easeOutExpo" data-end="7200" data-endspeed="300"
                                data-endeasing="easeInSine">
                                <img src="{{ asset('publicWebsite/upload/revolution/s-border2.png') }}"
                                    alt="Image 1">
                            </div>

                        </li>

                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!-- End SLider -->


    <!-- content
   ================================================== -->
    <div id="content">
        <!-- End Collection -->

        <!-- our work portfolio -->
        <div class="arrivals">
            <div class="container">


                <div class="filters">

                    <div class="demo1 clearfix">
                        <ul class="filter-container clearfix">

                            @foreach ($stores as $store)
                                <a href="{{ URL('website/product/' . $store->id) }}">
                                    <li class="class1">
                                        <img style="width: 350px; height: 250px;"
                                            src="{{ asset('images/' . $store->logo) }}" alt="">
                                        <div class="arr-content">
                                        <div class="arr-content">
                                                <h4><span class="#">{{ $store->address }}</span></h4>
                                                <h4><span class="#">{{ $store->name }}</span></h4>
                                        </div>
                                        </div>
                                    </li>
                                </a>
                            @endforeach


                        </ul>
                    </div>
                </div>
                <!-- End Filters -->

            </div>

        </div>
        <!-- end our work portfolio -->


    </div>
    <!-- End content -->

    <!-- footer
   ================================================== -->
    <footer>
        <div class="inner-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="f-about">
                            <h1>ABOUT SHOP</h1>
                            <p class="mb20">We possess within us two minds. So far I have written only of the
                                conscious mind.We further know that the subconscious has recorded every event. This is
                                just perfect theme.</p>
                            <h1>NEWSLETTER</h1>
                            <form action="#">
                                <input type="text" placeholder="Your e-mail">
                                <input type="submit" value="">
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="infos">
                            <h1>Information</h1>
                            <ul>
                                <li><a href="#">• Our Stores</a></li>
                                <li><a href="#">• Delivery Information</a></li>
                                <li><a href="#">• About Us</a></li>
                                <li><a href="#">• Terms and Conditions</a></li>
                                <li><a href="#">• Privacy Policy</a></li>
                                <li><a href="#">• Contact Us</a></li>
                                <li><a href="#">• Returns</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="account">
                            <h1>My Account</h1>
                            <ul>
                                <li><a href="#">• My Account</a></li>
                                <li><a href="#">• Order History</a></li>
                                <li><a href="#">• My Wishlist</a></li>
                                <li><a href="#">• Specials</a></li>
                                <li><a href="#">• Track Order</a></li>
                                <li><a href="#">• Gift Vouchers</a></li>
                                <li><a href="#">• My Credit Slips</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="gettouch">
                            <h1>Get in Touch with us</h1>
                            <p><i class="fa fa-home"></i> Philippines, PO Box 6200 Talay st. 65, SweetPick inc.</p>
                            <p><i class="fa fa-phone"></i> +63 918 4084 694</p>
                            <p class="mb20"><i class="fa fa-envelope"></i> samokhinteam@gmail.com</p>
                            <h1>FIND US ON</h1>
                            <ul class="footer-socials">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="back-to-top">
                <a href="#top">Back to Top</a>
            </div>
        </div>
        <!-- end contanir & inner-footer -->
        <div class="container">
            <div class="last-div">
                <div class="row">
                    <div class="copyright">
                        © 2014 SweetPick Elegant Shop | <a href="#">Designed by Alexander Samokhin</a>
                    </div>
                    <div class="payment">
                        <a href="#"><img src="{{ asset('publicWebsite/upload/payments.png') }}"
                                alt=""></a>
                    </div>
                    <div class="clear"></div>
                </div>

            </div>
        </div>

    </footer>
    <!-- End footer -->


    <script type="text/javascript" src="{{ asset('publicWebsite/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('publicWebsite/js/jquery.superfish.js') }}"></script>
    <script type="text/javascript" src="{{ asset('publicWebsite/js/jquery.bxslider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('publicWebsite/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('publicWebsite/js/jquery.nicescroll.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('publicWebsite/js/jquery.isotope.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('publicWebsite/js/jquery.imagesloaded.min.js') }}"></script>
    <!-- jQuery KenBurn Slider  -->
    <script type="text/javascript" src="{{ asset('publicWebsite/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('publicWebsite/js/script.js') }}"></script>


    <!--
 ##############################
 - ACTIVATE THE BANNER HERE -
 ##############################
 -->
    <script type="text/javascript">
        var tpj = jQuery;
        tpj.noConflict();

        tpj(document).ready(function() {

            if (tpj.fn.cssOriginal != undefined)
                tpj.fn.css = tpj.fn.cssOriginal;

            var api = tpj('.fullwidthbanner').revolution({
                delay: 8000,
                startwidth: 1170,
                startheight: 625,

                onHoverStop: "off", // Stop Banner Timet at Hover on Slide on/off

                thumbWidth: 100, // Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
                thumbHeight: 50,
                thumbAmount: 3,

                hideThumbs: 0,
                navigationType: "bullet", // bullet, thumb, none
                navigationArrows: "solo", // nexttobullets, solo (old name verticalcentered), none

                navigationStyle: "round", // round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


                navigationHAlign: "center", // Vertical Align top,center,bottom
                navigationVAlign: "bottom", // Horizontal Align left,center,right
                navigationHOffset: 30,
                navigationVOffset: 40,

                soloArrowLeftHalign: "left",
                soloArrowLeftValign: "center",
                soloArrowLeftHOffset: 40,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: "right",
                soloArrowRightValign: "center",
                soloArrowRightHOffset: 40,
                soloArrowRightVOffset: 0,

                touchenabled: "on", // Enable Swipe Function : on/off


                stopAtSlide: -
                    1, // Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
                stopAfterLoops: -
                    1, // Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

                hideCaptionAtLimit: 0, // It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
                hideAllCaptionAtLilmit: 0, // Hide all The Captions if Width of Browser is less then this value
                hideSliderAtLimit: 0, // Hide the whole slider, and stop also functions if Width of Browser is less than this value


                fullWidth: "on",

                shadow: 1 //0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

            });


            // TO HIDE THE ARROWS SEPERATLY FROM THE BULLETS, SOME TRICK HERE:
            // YOU CAN REMOVE IT FROM HERE TILL THE END OF THIS SECTION IF YOU DONT NEED THIS !
            api.bind("revolution.slide.onloaded", function(e) {


                jQuery('.tparrows').each(function() {
                    var arrows = jQuery(this);

                    var timer = setInterval(function() {

                        if (arrows.css('opacity') == 1 && !jQuery('.tp-simpleresponsive')
                            .hasClass("mouseisover"))
                            arrows.fadeOut(300);
                    }, 3000);
                })

                jQuery('.tp-simpleresponsive, .tparrows').hover(function() {
                    jQuery('.tp-simpleresponsive').addClass("mouseisover");
                    jQuery('body').find('.tparrows').each(function() {
                        jQuery(this).fadeIn(300);
                    });
                }, function() {
                    if (!jQuery(this).hasClass("tparrows"))
                        jQuery('.tp-simpleresponsive').removeClass("mouseisover");
                })
            });
            // END OF THE SECTION, HIDE MY ARROWS SEPERATLY FROM THE BULLETS
        });
    </script>


    <!-- Style Switcher -->
    <script src="{{ asset('publicWebsite/js/styleswitch.js') }}"></script>
    <script src="{{ asset('publicWebsite/js/style_switch_custom.js') }}"></script>
</body>

<!-- Mirrored from max-themes.net/demos/sweetpick/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Dec 2022 16:03:21 GMT -->

</html>
