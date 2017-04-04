<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/352.less', 'css/352.css');
        ?>
        <link href="css/352.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="type-352"> 
            <div class="foot-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <h2 class="pacifico">Webmarket &nbsp; <img src="images/webmarket.png" alt="Webmarket Cart" class="align-baseline"></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt vestibulum risus et gravida. 
                                Etiam vel augue ligula, blandit malesuada nisi. Quisque a augue nisi. Nullam interdum convallis </p>
                        </div>    
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="main-titles lined">
                                <h3 class="title">Facebook</h3>
                                <div class="bordered">
                                    <div class="fill-iframe">
                                        <div class="fb-like-box fb_iframe_widget">
                                            <span style="vertical-align: bottom; width: 0px; height: 0px;">
                                                <iframe name="fa7535c6c138c4" width="292px" height="200px" frameborder="0"src="" 
                                                        style="border: none; visibility: visible; width: 0px; height: 0px;">                                                                
                                                </iframe>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="main-titles lined">
                                <h3 class="title"><span class="light">Newsletters</span> Signup</h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Aliquam tincidunt vestibulum risus et gravida.
                            </p>
                            <input type="text" placeholder="Enter your e-mail address" class="text">
                            <input type="button" class="btn btn-info" value="SEND">
                        </div>
                    </div>
                </div>
            </div>
            <div class="foot-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="main-titles lined">
                                <h3 class="title"><span class="light">Main</span> Navigation</h3>
                            </div>
                            <ul class="nav bold">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Shortcodes</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="main-titles lined">
                                <h3 class="title"><span class="light">Main</span> Navigation</h3>
                            </div>
                            <ul class="nav bold">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Shortcodes</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="main-titles lined">
                                <h3 class="title"><span class="light">Main</span> Navigation</h3>
                            </div>
                            <ul class="nav bold">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Shortcodes</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="main-titles lined">
                                <h3 class="title"><span class="light">Main</span> Navigation</h3>
                            </div>
                            <ul class="nav bold">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Shortcodes</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="foot-last">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <p>� Copyright 2013. Images of products by
                                <a target="_blank" href="#">Horsefeathers</a></p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="pull-right">Webmarket HTML Template by <a href="#">ProteusThemes</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>