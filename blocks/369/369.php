<!DOCTYPE html>
<html style="background-color: #f3f3f4;">
    <head>
        <meta charset="UTF-8" />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/369.less', 'css/369.css');
        ?>
        <link href="css/369.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="type-369">
            <div class="container">
                <div class="main_content">
                    <!--TITLE-->
                    <div class="sidebar col-sm-3 sidebar_left col-sm-pull-9">
                        <div class="sidebar_widget sidebar_widget__products">
                            <h3 class="widget_header">Best sellers</h3>
                            <div class="widget_content">
                                <ul class="list_products">
                                    <li class="product">
                                        <div class="product_img">  
                                            <a href="#"><img src="image/img-10.png" alt="Acrylic paint set sets of 18 colors"></a>                                           
                                        </div>
                                        <div class="product_info">
                                            <div class="product_name">
                                                <a href="#">Acrylic paint set sets of 18 colors</a>
                                            </div>
                                            <div class="product_price">
                                                <span class="money" data-currency-usd="From $26.00">From $26.00</span>
                                                <span class="money compare-at-price" data-currency-usd="$36.00">$36.00</span>
                                            </div>
                                            <div class="product_links">
                                                <a class="btn" href="#">View</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product">
                                        <div class="product_img">  
                                            <a href="#">
                                                <img src="image/img-2.png" alt="Art supplies value pack includes 12 acrylic paints 25 paint brushes and 4 window markers">
                                            </a>
                                        </div>

                                        <div class="product_info">
                                            <div class="product_name">
                                                <a href="#">Art supplies value pack includes 12 acrylic paints 25 paint brushes and 4 window markers</a>
                                            </div>

                                            <div class="product_price">
                                                <span class="money" data-currency-usd="$25.00">$25.00</span>

                                            </div>

                                            <div class="product_links">
                                                <a class="btn" href="#">View</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="product">
                                        <div class="product_img">  
                                            <a href="#">
                                                <img src="image/castle_art_supplies_drawing_and_sketching_pencil_art_set_01_compact.png?v=1468591262" alt="Castle art supplies drawing and sketching pencil art set">
                                            </a>
                                        </div>

                                        <div class="product_info">
                                            <div class="product_name">
                                                <a href="#">Castle art supplies drawing and sketching pencil art set</a>
                                            </div>

                                            <div class="product_price">
                                                <span class="money" data-currency-usd="From $19.00">From $19.00</span>

                                                <span class="money compare-at-price" data-currency-usd="$23.00">$23.00</span>

                                            </div>

                                            <div class="product_links">
                                                <a class="btn" href="#">View</a>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!---TITLE BLOG-->
                    <div class="col-md-9 col-sm-9 col-xs-12">                       
                    </div>
                    <!---END OF TITLE-->
                </div>
            </div>
        </div>
    </body>
</html>