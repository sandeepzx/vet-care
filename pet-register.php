<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pet Care</title>
    <!-- google-fonts -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>            
    <!-- //google-fonts -->
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    

    <!-- //Template CSS Style link -->
</head>
    <body>
        <!--header-->
        <header id="site-header" class="fixed-top">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg stroke">
                    <h1>
                        <a class="navbar-brand d-flex align-items-center" href="index.html">
                            <i class='fa fa-paw'></i>&nbsp;Vet Care</a>
                    </h1>
                    <!-- if logo is image enable this   
        <a class="navbar-brand" href="#index.html">
            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
        </a> -->
                    <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                        data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                        <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav ml-lg-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="New-user.php">New User</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="services.php">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="map.php">Google Map</a>
                            </li>
                            <!-- search button -->
                            <div class="search-right">
                                <form action="#search" method="GET" class="search-box position-relative">
                                    <div class="input-search">
                                        <input type="search" placeholder="Enter Keyword" name="search" required="required"
                                            autofocus="" class="search-popup">
                                    </div>
                                    <button type="submit" class="btn search-btn"><i class="fa fa-search"
                                            aria-hidden="true"></i></button>
                                </form>
                            </div>
                            <!-- //search button -->
                        </ul>
                    </div>
                    <!-- toggle switch for light and dark theme -->
                    <div class="cont-ser-position">
                        <nav class="navigation">
                            <div class="theme-switch-wrapper">
                                <label class="theme-switch" for="checkbox">
                                    <input type="checkbox" id="checkbox">
                                    <div class="mode-container">
                                        <i class="gg-sun"></i>
                                        <i class="gg-moon"></i>
                                    </div>
                                </label>
                            </div>
                        </nav>
                    </div>
                    <!-- //toggle switch for light and dark theme -->
                </nav>
            </div>
        </header>
        <!--//header-->

        <!-- inner banner -->
        <div class="inner-banner">
            <div class="w3l-breadcrumb">
                <div class="container">
                    <h4 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2">New User</h4>
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>New User
                        <span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Pet
                        <span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Register</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- //inner banner -->
        <!-- contact page -->
        <section class="w3l-contact-11 py-5" id="contact">
            <div class="container py-md-5 py-5">
                <div class="row justify-content-center text-center">                                   
                    <h3 class="title-style mb-2">Pet Owner</h3>                                                         
                </div>
                <div class="form-41-mian mt-5 pt-lg-5 pt-md-4">
                    <div class="container">
                        <div class="form-inner-cont">
                            <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
                                <div class="row align-form-map">
                                    <div class="col-sm-12 form-input">
                                        <label for="w3lName">Full Name</label>
                                        <input type="text" name="FullName" id="FullName" placeholder="" />
                                    </div>
                                    <div class="col-sm-12 form-input">
                                        <label for="w3lSender">Phone Number*</label>
                                        <input type="number" name="w3lPhone" placeholder="" class="contact-input">
                                    </div>
                                    <div class="col-sm-12 form-input">
                                        <label for="w3lSender">Email</label>
                                        <input type="email" name="w3lSender" id="w3lSender" placeholder="" required="" />
                                    </div>
                                </div>

                                    <div class="form-input">
                                        <label for="Address">Address</label>
                                        <textarea placeholder="" name="Address" id="Address" required=""></textarea>
                                    </div>
                                <div class="row align-form-map">   
                                    <div class="col-sm-12 form-input">
                                        <fieldset class="harry">
                                            <legend><b>Location</b></legend>
                                            <label for="w3lSender">longitude</label>
                                            <input type="number" name="longitude" placeholder="" class="contact-input">
                                            <label for="w3lSender">latitude</label>
                                            <input type="number" name="latitude" placeholder="" class="contact-input">
                                        </fieldset>
                                    </div>                                   
                                    <div class="col-sm-12 form-input">
                                        <label for="w3lName">Password</label>
                                        <input type="Password" name="Password" id="Password" placeholder="" />
                                    </div>
                                    <div class="col-sm-12 form-input">
                                        <label for="w3lName">Confirm Password</label>
                                        <input type="Password" name="confirmPassword" id="confirmPassword" placeholder="" />
                                    </div>                              
                                </div>                            
                                <div class="submit text-right">
                                    <button type="submit" class="btn btn-style-white btn-style-primary">Submit
                                        Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="w3l-footer-16">
        <div class="w3l-footer-16-main">
            <div class="container">
                <div class="row footer-p">
                    <div class="col-lg-4 pr-lg-5">
                        <a class="logo" href="index.html"><i class="fa fa-paw" aria-hidden="true"></i> Dogs Care</a>
                        <p class="mt-4">Duis imperdiet sapien tortor, vitae congue diam auctor vitae. Aliquam
                            eget turpis ornare, euismod ligul aeget, enenatis dui. </p>
                    </div>
                    <div class="col-lg-4 mt-lg-0 mt-4">
                        <h3>Pages</h3>
                        <div class="row">
                            <div class="col-6 column">
                                <ul class="footer-gd-16">
                                    <li><a href="index.html"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i>Home</a></li>
                                    <li><a href="about.html"><i class="fa fa-angle-right" aria-hidden="true"></i>About
                                            Us</a></li>
                                    <li><a href="services.html"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i>Services</a></li>
                                    <li><a href="#blog"><i class="fa fa-angle-right" aria-hidden="true"></i>Blog
                                            Posts</a></li>
                                    <li><a href="contact.html"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i>Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-6 column pl-0">
                                <ul class="footer-gd-16">
                                    <li><a href="#support"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i>Support</a></li>
                                    <li><a href="#privacy"><i class="fa fa-angle-right" aria-hidden="true"></i>Privacy
                                            Policy</a></li>
                                    <li><a href="#terms"><i class="fa fa-angle-right" aria-hidden="true"></i>Terms and
                                            conditions</a></li>
                                    <li><a href="#faq"><i class="fa fa-angle-right" aria-hidden="true"></i>FAQ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-7 column mt-lg-0 mt-4">
                        <h3>Newsletter </h3>
                        <div class="end-column">
                            <h3>Subscribe Here Now</h3>
                            <form action="#" class="subscribe" method="post">
                                <input type="email" name="email" placeholder="Email Address" required="">
                                <button><span class="fa fa-paper-plane" aria-hidden="true"></span></button>
                            </form>
                            <p>Subscribe to our mailing list and get updates to your email inbox.</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex below-section justify-content-between align-items-center pt-4 mt-5">
                    <div class="columns text-lg-left">
                        <p class="copy-text">@ 2020 Dogs Care. All rights reserved. Design by <a
                                href="https://w3layouts.com/" target="_blank">
                                W3Layouts</a>
                        </p>
                    </div>
                    <div class="columns-2 mt-md-0 mt-3">
                        <ul class="social">
                            <li><a href="#facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#github"><span class="fa fa-github" aria-hidden="true"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-level-up" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <script>
        function autoType(elementClass, typingSpeed) {
            var thhis = $(elementClass);
            thhis.css({
                "position": "relative",
                "display": "inline-block"
            });
            thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
            thhis = thhis.find(".text-js");
            var text = thhis.text().trim().split('');
            var amntOfChars = text.length;
            var newString = "";
            thhis.text("|");
            setTimeout(function () {
                thhis.css("opacity", 1);
                thhis.prev().removeAttr("style");
                thhis.text("");
                for (var i = 0; i < amntOfChars; i++) {
                    (function (i, char) {
                        setTimeout(function () {
                            newString += char;
                            thhis.text(newString);
                        }, i * typingSpeed);
                    })(i + 1, text[i]);
                }
            }, 1500);
        }

        $(document).ready(function () {
            // Now to start autoTyping just call the autoType function with the 
            // class of outer div
            // The second paramter is the speed between each letter is typed.   
            autoType(".type-js", 200);
        });
    </script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->
    </body>
</html>