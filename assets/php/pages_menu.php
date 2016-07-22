<script>

$(document).ready(function(){

$("#mobile_menu").hide();

$("#mobile_menu_button").click(function() {
    //need the following to toggle
    $("#mobile_menu").slideToggle();
});

});

</script>
<div class="pure-g upper">
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
    <div class="pure-u-8-24 pure-u-xs-8-24 pure-u-sm-5-24 pure-u-md-5-24 pure-u-lg-5-24 pure-u-xl-5-24 page_logo">
        <a href="/">
            <img class="pure-img" src="/assets/img/logo/white.jpg" />
        </a>
    </div>
    <div class="pure-u-9-24 pure-u-sm-14-24 pure-u-md-3-24 pure-u-lg-7-24 pure-u-xl-7-24 spacer">

    </div>
    <div class="pure-u-10-24 pure-u-sm-8-24 pure-u-md-16-24 pure-u-lg-12-24 pure-u-xl-12-24 desktop_only menu">
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
    <div class="mobile_only pure-u-3-24 pure-u-sm-5-24 pure-u-md-17-24 pure-u-lg-14-24 pure-u-xl-10-24 menu">
        <div id="mobile_menu_button" class="l-box">
            <span><i class="fa fa-bars fa-2x" aria-hidden="true"></i></span>

        </div>
    </div>
</div>
