<!DOCTYPE html>
<html>
    <head>
        <?php include('../assets/php/head.php'); ?>
        <link rel="stylesheet" href="/assets/css/pages.css" />
        <title>Litle Sports Heroes</title>
    </head>
    <body>
        <div id="container">
            <?php include('../assets/php/pages_menu.php'); ?>
            <div class="pure-u-1 banner">
                <img class="pure-img" src="http://placehold.it/1500x500">
            </div>
            <div class="pure-u-1 page_intro" style="background-color: #2ecc71">
                <div class="l-box">
                    <h1>
                        Get in Touch
                    </h1>
                </div>
            </div>
            <div class="pure-g body" style="background-color: #27ae60">
                <div class="pure-u-1 pure-u-md-14-24">
                    <div class="l-box">
                        <h2>Want <strong>Little Sports Heroes</strong> in your school or centre? It couldn't be easier to grt started with us.</h2>
                        <h2>Fill is the form and we'll get back to you as soon as possible!</h2>
                    </div>
                </div>
                <div class="pure-u-1 pure-u-md-10-24">
                    <div class="l-box">
                        <form class="pure-form">
                            <fieldset class="pure-group">
                                <input class="pure-input-1" type="text" name="name" placeholder="Your name" />
                                <input class="pure-input-1" type="text" name="contact" placeholder="Phone number or email" />
                                <input class="pure-input-1" type="text" name="type" placeholder="Type of centre (eg. primary school)" />
                            </fieldset>
                            <fieldset class="pure-group">
                                <textarea class="pure-input-1" placeholder="Anything Else?"></textarea>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <?php include('../assets/php/pages_footer.php'); ?>
        </div>
    </body>
</html>
