
<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">       
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/366.less', 'css/366.css');
        ?>
        <link href="css/366.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type-366">
            <div class="newsletter">
                <div class="container">
                    <div class="homepage_newsletter">
                        <h3>Newsletter</h3>
                        <p>Enter your email address to join our mailing list</p>
                        <div class="footer_newsletter">
                            <form method="post" action="#" class="contact-form" accept-charset="UTF-8">
                                <input type="hidden" value="customer" name="form_type">
                                <input type="hidden" name="utf8" value="✓">
                                <input type="hidden" name="contact[tags]" value="prospect,newsletter" >
                                <input type="hidden" name="contact[first_name]" value="Newsletter">
                                <input type="hidden" name="contact[last_name]" value="Subscriber">
                                <input type="email" name="contact[email]" placeholder="Enter your email" required="">
                                <button type="submit" name="subscribe" class="btn">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </body>
</html>