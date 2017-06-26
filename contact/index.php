<!DOCTYPE html>
<html>
    <head>
        <?php include('../assets/php/head.php'); ?>
        <link rel="stylesheet" href="/assets/css/pages.css" />
        <link rel="stylesheet" href="/assets/css/unslider.css">
        <link rel="stylesheet" href="/assets/css/unslider-dots.css">
        <title>Little Sports Heroes</title>
    </head>
    <body>
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=666382366847597";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        <div id="container">
            <?php include('../assets/php/pages_menu.php'); ?>
            <div class="pure-g page_intro banner contact">
                <div class="pure-u-1 darken">
                    <div class="l-box">
                        <h1>
                            Get in Touch
                        </h1>
                    </div>
                </div>
                <div class="pure-u-1 pure-u-md-14-24 darken">
                    <div class="l-box">
                        <h2>Want <strong>Little Sports Heroes</strong> in your school or centre? It couldn't be easier to get started with us. Fill is the form and we'll get back to you as soon as possible!</h2>
                    </div>
                </div>
            </div>
            <div class="pure-g body" style="background-color: #27ae60">
                <div class="pure-u-1 pure-u-md-10-24">
                    <div class="l-box">
                        <form class="pure-form" action="/contact/handle.php" method="post">
                            <fieldset class="pure-group">
                                <input class="pure-input-1" type="text" name="name" placeholder="Your name" />
                                <input class="pure-input-1" type="text" name="contact" placeholder="Phone number or email" />
                                <input class="pure-input-1" type="text" name="type" placeholder="Type of centre (eg. primary school)" />
                            </fieldset>
                            <fieldset class="pure-group">
                                <textarea class="pure-input-1" placeholder="Anything Else?" name="comments"></textarea>
                            </fieldset>
                            <button type="submit" class="pure-button pure-input-1 pure-button-secondary">Send!</button>
                        </form>
                    </div>
                </div>
                <div class="pure-u-1 pure-u-md-14-24">
                    <div class="l-box">
                        <?php if ($_GET['email']) { ?>
                            <h2><strong><u>Your email has been sent!</u></strong></h2>
                        <?php } ?>
                        <?php if ($_GET['empty']) { ?>
                            <h2><strong><u>Be sure to fill out all fields!</u></strong></h2>
                        <?php } ?>
                        <h2><strong>Little Sports Heroes</strong> services the wider Melbourne area and can work in all kinds of centres including daycares, kindergartens, schools and other sports centres.</h2>
                        <h2>If you're not sure if LSH can come to you, don't hesitate to get in touch to find out.</h2>
                    </div>
                </div>
            </div>
            <div class="pure-g">
            	<div class="pure-u-1">
                    <div class="l-box">
                        <h1>Little Sports Heroes On Social Media</h1>
                    </div>
                </div>
                <div class="pure-u-1 pure-u-md-8-24">
                    <div class="l-box">
                        <div class="fb-page" data-href="https://www.facebook.com/LittleSportsHeroes/?fref=ts" data-tabs="timeline" data-width="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/LittleSportsHeroes/?fref=ts" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/LittleSportsHeroes/?fref=ts">Little Sports Heroes</a></blockquote></div>
                    </div>
                </div>
                <div class="pure-u-1 pure-u-md-16-24">
                    <div class="l-box">
                        <div class="my-slider">
                        	<ul>
                        		<li><img class="pure-img" src="/assets/img/candid/IMG_0006.jpg" /></li>
                        		<li><img class="pure-img" src="/assets/img/candid/IMG_0011.jpg" /></li>
                        		<li><img class="pure-img" src="/assets/img/candid/IMG_0013.jpg" /></li>
                                <li><img class="pure-img" src="/assets/img/candid/IMG_0016.jpg" /></li>
                                <li><img class="pure-img" src="/assets/img/candid/1.jpg" /></li>
                                <li><img class="pure-img" src="/assets/img/candid/IMG_0002.jpg" /></li>
                        	</ul>
                        </div>
                    </div>

                </div>
            </div>
            <?php include('../assets/php/pages_footer.php'); ?>
        </div>
        <script src="/assets/js/unslider-min.js"></script>
        <script>
		jQuery(document).ready(function($) {
			$('.my-slider').unslider({
                nav: false,
                autoplay: true,
                arrows: false
            });
		});
	</script>
    </body>
</html>
