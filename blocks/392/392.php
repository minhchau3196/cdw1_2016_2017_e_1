<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/392.less', 'css/392.css');
        ?>
        <link href="css/392.css" rel="stylesheet" type="text/css"/>

    </head>

    <body>
        <div class="type-392">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="push-up over-slider blocks-spacer">
                            <div class="row">
                                <div class="col-md-4 col-xs-12 col-lg-4 col-sm-4">
                                    <a href="#" class="btn btn-block banner">
                                        <span class="title"><span class="light">SUMMER</span> SALE</span>
                                        <em>up to 60% off on all shoes</em>
                                    </a>
                                </div>
                                <div class="col-md-4 col-xs-12 col-lg-4 col-sm-4">
                                    <a href="#" class="btn btn-block colored banner">
                                        <span class="title"><span class="light">FREE</span> SHIPPING</span>
                                        <em>on orders over $69</em>
                                    </a>
                                </div>
                                <div class="col-md-4 col-xs-12 col-lg-4 col-sm-4">
                                    <a href="#" class="btn btn-block banner">
                                        <span class="title"><span class="light">NEW</span> PRODUCTS</span>
                                        <em>for running on lorem ipsum dolor</em>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>