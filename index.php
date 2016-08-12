<!DOCTYPE html>
<html>
    <head>
        <?php include('assets/php/head.php'); ?>
        <title>Little Sports Heroes</title>
    </head>
    <body>
        <script>

        $(document).ready(function(){

        $("#mobile_menu").hide();

        $("#mobile_menu_button").click(function() {
            //need the following to toggle
            $("#mobile_menu").slideToggle();
        });

        });

        </script>
        <div id="mobile_menu" class="pure-u-1 mobile_menu menu">
            <div class="pure-u-18-24 pure-u-sm-1">
                <div class="l-box">
                    <ul>
                        <li>
                            <a class="services" href="/services">What We Do</a>
                        </li>
                        <li>
                            <a class="about" href="/about">Who We Are</a>
                        </li>
                        <li>
                            <a class="contact" href="/contact">Get In Touch</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <div id="outer">
        <div id="wrapper">
            <div class="intro">
                <div class="pure-g menu_wrap">
                    <div class="pure-u-2-24 pure-u-md-1-24 pure-u-lg-2-24 spacer">

                    </div>
                    <div class="pure-u-9-24 pure-u-sm-6-24 pure-u-md-5-24 pure-u-lg-3-24 logo">
                        <img class="pure-img" src="/assets/img/logo/trans.png" />
                    </div>
                    <div class="pure-u-7-24 pure-u-sm-9-24 pure-u-md-1-24 pure-u-lg-5-24 pure-u-xl-8-24 spacer">

                    </div>
                    <div class="pure-u-10-24 pure-u-sm-8-24 pure-u-md-17-24 pure-u-lg-14-24 pure-u-xl-10-24 desktop_only menu">
                        <div class="l-box">
                            <ul>
                                <li>
                                    <a class="services" href="/services">What We Do</a>
                                </li>
                                <li>
                                    <a class="about" href="/about">Who We Are</a>
                                </li>
                                <li>
                                    <a class="contact" href="/contact">Get In Touch</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="mobile_menu_button" class="mobile_only pure-u-4-24 pure-u-sm-5-24 pure-u-md-17-24 pure-u-lg-14-24 pure-u-xl-10-24 menu">
                            <i class="fa fa-bars fa-3x" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="kids">
                    <img class="pure-img" src="/assets/img/bg/kids-on-hill-web.png" />
                </div>
                <div class="pure-g">
                    <div class="pure-u-2-24 spacer">

                    </div>
                    <div class="pure-u-lg-12-24 pure-u-18-24 text">
                        <div class="l-box">
                            <h1>Your Kids Can Be <span>Little Sports Heroes!</span></h1>
                            <p>
                                Little Sports Heroes wants to help your kids be the best they can be when it comes to sports and games.
                            </p>
                            <p>
                                LSH gets your kids active, doing everything from the basics, to team sports, all while building important team-based skills
                            </p>
                        </div>
                        <div class="pure-g">

                            <div class="pure-u-1">
                                <div class="l-box">
                                    <h1><a href="/services" class="services">Find out about our program here!</a> and take a look at <a href="/about" class="about">what people are saying about us.</a></h1>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="pure-u-lg-2-24 pure-u-10-24 spacer">
                    </div>
                    <div class="pure-u-1 pure-u-lg-5-24 pure-u-10-24 map desktop_only">
                        <div class="l-box">
                            <h1><a href="/contact" class="contact">Get in touch today</a> to register your interest!</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <script>
        $(document).ready(function() {
   $(window).scroll(function() {

       var headerH = $('.menu_wrap').outerHeight(true);
       console.log(headerH);
//this will calculate header's full height, with borders, margins, paddings
       var scrollVal = $(this).scrollTop();
       if (/Mobi/.test(navigator.userAgent)) {
        if ( scrollVal > headerH ) {
            $('.kids').css({'position':'fixed','top' :'0px'});
            $('.text').css({'margin-top': headerH});
        } else {
            $('.kids').css({'position':'static','top':'0px'});

            $('.text').css({'margin-top': '0'});
        }
    }
    });
 });
        </script>
    </body>
</html>
