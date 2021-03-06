<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="/font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="/css/datepicker.css"/>
    <link rel="stylesheet" href="/css/tooplate-style.css">                                   <!-- Templatemo style -->
    @yield('styles')
</head>

<body>
<div class="tm-main-content" id="top">
    <div class="tm-top-bar-bg"></div>
    <div class="tm-top-bar" id="tm-top-bar">
        <!-- Top Navbar -->
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg narbar-light">
                    <a class="navbar-brand mr-auto" href="/">BookingManager</a>
                    <button type="button" id="nav-toggle" class="navbar-toggler collapsed" data-toggle="collapse"
                            data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div id="mainNav" class="collapse navbar-collapse tm-bg-white">
                        <ul class="navbar-nav ml-auto">
                            @if(Auth::check() == false)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('login')}}">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('register')}}">Register</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <form action="{{route('logout')}}" method="post">
                                        @csrf
                                        <input style="border:none; width:100%; cursor: pointer;" type="submit" class="nav-link text-left" value="{{__('Logout')}}">
                                    </form>
                                </li>
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="root">
        @yield('main-content')
    </div>
    <footer
        style="display: flex; position:relative ;width: 100%; height: 50px; bottom: 0;flex-direction:row;justify-content:center;background-color: #003580 ;color: white !important">
        <div>
            <p style="margin:auto">
                Copyright &copy; <span class="tm-current-year">2018</span> Your Company

                - Design: Tooplate</p>
        </div>
    </footer>
</div>

<!-- load JS files -->
<script src="/js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
<script src="/js/popper.min.js"></script>                    <!-- https://popper.js.org/ -->
<script src="/js/bootstrap.min.js"></script>                 <!-- https://getbootstrap.com/ -->
<script src="/js/datepicker.min.js"></script>                <!-- https://github.com/qodesmith/datepicker -->
<script src="/js/jquery.singlePageNav.min.js"></script>
<!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
<script src="/slick/slick.min.js"></script>                  <!-- http://kenwheeler.github.io/slick/ -->
<script>

    /* Google map
    ------------------------------------------------*/
    var map = '';
    var center;

    function initialize() {
        var mapOptions = {
            zoom: 16,
            center: new google.maps.LatLng(13.7567928, 100.5653741),
            scrollwheel: false
        };

        map = new google.maps.Map(document.getElementById('google-map'), mapOptions);

        google.maps.event.addDomListener(map, 'idle', function () {
            calculateCenter();
        });

        google.maps.event.addDomListener(window, 'resize', function () {
            map.setCenter(center);
        });
    }

    function calculateCenter() {
        center = map.getCenter();
    }

    function loadGoogleMap() {
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDVWt4rJfibfsEDvcuaChUaZRS5NXey1Cs&v=3.exp&sensor=false&' + 'callback=initialize';
        document.body.appendChild(script);
    }

    function setCarousel() {

        if ($('.tm-article-carousel').hasClass('slick-initialized')) {
            $('.tm-article-carousel').slick('destroy');
        }

        if ($(window).width() < 438) {
            // Slick carousel
            $('.tm-article-carousel').slick({
                infinite: false,
                dots: true,
                slidesToShow: 1,
                slidesToScroll: 1
            });
        } else {
            $('.tm-article-carousel').slick({
                infinite: false,
                dots: true,
                slidesToShow: 2,
                slidesToScroll: 1
            });
        }
    }

    function setPageNav() {
        // try {
        //     if ($(window).width() > 991) {
        //         $('#tm-top-bar').singlePageNav({
        //             currentClass: 'active',
        //             offset: 79
        //         });
        //     }
        //     else {
        //         $('#tm-top-bar').singlePageNav({
        //             currentClass: 'active',
        //             offset: 65
        //         });
        //     }
        // }
        // catch (error) {
        //     console.log('HELLO ENEMIES :DD')
        // }
    }

    function togglePlayPause() {
        vid = $('.tmVideo').get(0);

        if (vid.paused) {
            vid.play();
            $('.tm-btn-play').hide();
            $('.tm-btn-pause').show();
        } else {
            vid.pause();
            $('.tm-btn-play').show();
            $('.tm-btn-pause').hide();
        }
    }

    $(document).ready(function () {

        $(window).on("scroll", function () {
            if ($(window).scrollTop() > 100) {
                $(".tm-top-bar").addClass("active");
            } else {
                //remove the background property so it comes transparent again (defined in your css)
                $(".tm-top-bar").removeClass("active");
            }
        });

        // Google Map
        loadGoogleMap();

        // // Date Picker
        const pickerCheckIn = datepicker('#inputCheckIn');
        const pickerCheckOut = datepicker('#inputCheckOut');

        // // Slick carousel
        setCarousel();
        setPageNav();

        // $(window).resize(function () {
        //     setCarousel();
        //     setPageNav();
        // });

        // // Close navbar after clicked
        // $('.nav-link').click(function () {
        //     $('#mainNav').removeClass('show');
        // });

        // // Control video
        // $('.tm-btn-play').click(function () {
        //     togglePlayPause();
        // });

        // $('.tm-btn-pause').click(function () {
        //     togglePlayPause();
        // });

        // // Update the current year in copyright
        // $('.tm-current-year').text(new Date().getFullYear());
    });

</script>

</body>
</html>
