<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />


        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/style.less', 'css/type-3.css');
        ?>
        <link href="css/type-3.css" rel="stylesheet" type="text/css" />

        <script src="js/jquery/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-1" >
            <header id="header">
                <div class="darker-row">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="span4">
                                    <div class="higher-line">
                                        Wellcome! Please
                                        <a href="#registerModal" role="button" data-toggle="modal">Register</a> or
                                        <a href="#loginModal" role="button" data-toggle="modal">Login</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="span8">
                                    <div class="topmost-line">
                                        <div class="higher-line">
                                            <a href="#" class="gray-link">My account</a>
                                            &nbsp; | &nbsp;
                                            <a href="#" class="gray-link">Wishlist (2)</a>
                                            &nbsp; | &nbsp;
                                            <a href="#" class="gray-link">Checkout</a>
                                        </div>
                                        &nbsp;
                                        <div class="lang-currency">
                                            <div class="dropdown js-selectable-dropdown">
                                                <a data-toggle="dropdown" class="selected" href="#"><span class="js-change-text"><i class="famfamfam-flag-gb"></i> English (EN)</span> <b class="caret"></b></a>
                                                <ul class="dropdown-menu js-possibilities" role="menu" aria-labelledby="dLabel">
                                                    <li><a href="#"><i class="famfamfam-flag-gb"></i> English (EN)</a></li>
                                                    <li><a href="#"><i class="famfamfam-flag-si"></i> Slovenian (SI)</a></li>
                                                    <li><a href="#"><i class="famfamfam-flag-de"></i> German (DE)</a></li>
                                                    <li><a href="#"><i class="famfamfam-flag-fr"></i> French (FR)</a></li>
                                                    <li><a href="#"><i class="famfamfam-flag-es"></i> Spanish (ES)</a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown js-selectable-dropdown">
                                                <a data-toggle="dropdown" class="selected" href="#"><span class="js-change-text">USD ($)</span> <b class="caret"></b></a>
                                                <ul class="dropdown-menu js-possibilities" role="menu" aria-labelledby="dLabel">
                                                    <li><a href="#">USD ($)</a></li>
                                                    <li><a href="#">EUR (€)</a></li>
                                                    <li><a href="#">YEN (¥)</a></li>
                                                    <li><a href="#">GBP (£)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---LOGO CONTAINER--->
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="span7">
                                <a class="brand" href="#">
                                    <img src="images/logo.png" alt="Webmarket Logo" width="48" height="48">
                                    <span class="pacifico">Webmarket</span>
                                    <span class="tagline">Really Cool e-Commerce HTML Template</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="span5">
                                <div class="top-right">
                                    <div class="icons">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-wordpress" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-android" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-html5" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-windows" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-apple" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </body>
</html>