<!DOCTYPE html>
<html style="background-color: #f3f3f4;">
    <head>
        <meta charset="UTF-8" /> 
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/377.less', 'css/377.css');
        ?>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/377.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="type-377">
            <div class="container">
                <div class="main_content">
                    <!--TITLE-->
                    <h2 class="page_heading">Featured products</h2>
                    <!--/END TITLE-->
                    <div class="row">
                        <div id="owl-demo" class="owl-carousel owl-theme">
                            <div class="item">
                                <!--IMAGES PRODUCT-->
                                <div class="product_img">
                                    <a class="img_change" href="#">
                                        <img class="img_1" src="image/img-1.png" title="" alt="">
                                        <img class="img_2" src="image/img-2.png">
                                        <span class="product_badge new">New</span>
                                        <span class="product_badge sale">–17%</span>
                                    </a>
                                </div>
                                <!--/END IMAGES PRODUCT-->

                                <!--INFORMATION-->
                                <div class="product_info">
                                    <!--NAME-->
                                    <div class="product_name">
                                        <a href="">Castle art supplies drawing and sketching penci...</a>
                                    </div>
                                    <!--/END NAME-->

                                    <!--PRICE-->
                                    <div class="product_price">
                                        <span class="money" data-currency-usd="From ">From </span>
                                        <span class="money" data-currency-usd="$19.00">$19.00</span>
                                        <span class="money money_sale" data-currency-usd="$23.00">$23.00</span>
                                    </div>
                                    <!--/END PRICE-->

                                    <!--CART-->
                                    <div class="product_links">
                                        <form method="post" action="get">
                                            <a class="btn btn_options" href="#"> Add to cart</a>
                                        </form>
                                        <a class="btn quick_view_btn btn_c" href="#" title="Quick view">
                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        </a>
                                        <a class="btn btn_c wishlist_add_login" href="#" title="Add to the wishlist">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <!--/END CART-->

                                </div>
                            </div>
                            <div class="item">
                                <div class="product_img">
                                    <a class="img_change" href="#">
                                        <img class="img_1" src="image/img-3.png" title="" alt="">
                                        <img class="img_2" src="image/img-4.png" alt="" >
                                        <span class="product_badge new">New</span>
                                        <span class="product_badge sale">–17%</span>
                                    </a>
                                </div>
                                <div class="product_info">
                                    <div class="product_name">
                                        <a href="">Castle art supplies drawing and sketching penci...</a>
                                    </div>
                                    <div class="product_price">
                                        <span class="money" data-currency-usd="From ">From </span>
                                        <span class="money" data-currency-usd="$19.00">$19.00</span>
                                        <span class="money money_sale" data-currency-usd="$23.00">$23.00</span>
                                    </div>
                                    <div class="product_links">
                                        <form method="post" action="get">
                                            <a class="btn btn_options" href="#"> Add to cart</a>
                                        </form>
                                        <a class="btn quick_view_btn btn_c" href="#" title="Quick view">
                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        </a>
                                        <a class="btn btn_c wishlist_add_login" href="#" title="Add to the wishlist">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product_img">
                                    <a class="img_change" href="#">
                                        <img class="img_1" src="image/img-5.png" title="" alt="">
                                        <img class="img_2" src="image/img-6.png" alt="">
                                        <span class="product_badge new">New</span>
                                        <span class="product_badge sale">–17%</span>
                                    </a>
                                </div>
                                <div class="product_info">
                                    <div class="product_name">
                                        <a href="">Castle art supplies drawing and sketching penci...</a>
                                    </div>
                                    <div class="product_price">
                                        <span class="money" data-currency-usd="From ">From </span>
                                        <span class="money" data-currency-usd="$19.00">$19.00</span>
                                        <span class="money money_sale" data-currency-usd="$23.00">$23.00</span>
                                    </div>
                                    <div class="product_links">
                                        <form method="post" action="get">
                                            <a class="btn btn_options" href="#"> Add to cart</a>
                                        </form>
                                        <a class="btn quick_view_btn btn_c" href="#" title="Quick view">
                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        </a>
                                        <a class="btn btn_c wishlist_add_login" href="#" title="Add to the wishlist">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product_img">
                                    <a class="img_change" href="#">
                                        <img class="img_1" src="image/img-7.png" title="" alt="">
                                        <img class="img_2" src="image/img-8.png" alt="" >
                                        <span class="product_badge new">New</span>
                                        <span class="product_badge sale">–17%</span>
                                    </a>
                                </div>
                                <div class="product_info">
                                    <div class="product_name">
                                        <a href="">Castle art supplies drawing and sketching penci...</a>
                                    </div>
                                    <div class="product_price">
                                        <span class="money" data-currency-usd="From ">From </span>
                                        <span class="money" data-currency-usd="$19.00">$19.00</span>
                                        <span class="money money_sale" data-currency-usd="$23.00">$23.00</span>
                                    </div>
                                    <div class="product_links">
                                        <form method="post" action="get">
                                            <a class="btn btn_options" href="#"> Add to cart</a>
                                        </form>
                                        <a class="btn quick_view_btn btn_c" href="#" title="Quick view">
                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        </a>
                                        <a class="btn btn_c wishlist_add_login" href="#" title="Add to the wishlist">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product_img">
                                    <a class="img_change" href="#">
                                        <img class="img_1" src="image/img-9.png" title="" alt="">
                                        <img class="img_2" src="image/img-10.png" alt="">
                                        <span class="product_badge new">New</span>
                                        <span class="product_badge sale">–17%</span>
                                    </a>
                                </div>
                                <div class="product_info">
                                    <div class="product_name">
                                        <a href="">Castle art supplies drawing and sketching penci...</a>
                                    </div>
                                    <div class="product_price">
                                        <span class="money" data-currency-usd="From ">From </span>
                                        <span class="money" data-currency-usd="$19.00">$19.00</span>
                                        <span class="money money_sale" data-currency-usd="$23.00">$23.00</span>
                                    </div>
                                    <div class="product_links">
                                        <form method="post" action="get">
                                            <a class="btn btn_options" href="#"> Add to cart</a>
                                        </form>
                                        <a class="btn quick_view_btn btn_c" href="#" title="Quick view">
                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        </a>
                                        <a class="btn btn_c wishlist_add_login" href="#" title="Add to the wishlist">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!--IMAGES PRODUCT-->
                                <div class="product_img">
                                    <a class="img_change" href="#">
                                        <img class="img_1" src="image/img-1.png" title="" alt="">
                                        <img class="img_2" src="image/img-2.png">
                                        <span class="product_badge new">New</span>
                                        <span class="product_badge sale">–17%</span>
                                    </a>
                                </div>
                                <!--/END IMAGES PRODUCT-->

                                <!--INFORMATION-->
                                <div class="product_info">
                                    <!--NAME-->
                                    <div class="product_name">
                                        <a href="">Castle art supplies drawing and sketching penci...</a>
                                    </div>
                                    <!--/END NAME-->

                                    <!--PRICE-->
                                    <div class="product_price">
                                        <span class="money" data-currency-usd="From ">From </span>
                                        <span class="money" data-currency-usd="$19.00">$19.00</span>
                                        <span class="money money_sale" data-currency-usd="$23.00">$23.00</span>
                                    </div>
                                    <!--/END PRICE-->

                                    <!--CART-->
                                    <div class="product_links">
                                        <form method="post" action="get">
                                            <a class="btn btn_options" href="#"> Add to cart</a>
                                        </form>
                                        <a class="btn quick_view_btn btn_c" href="#" title="Quick view">
                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        </a>
                                        <a class="btn btn_c wishlist_add_login" href="#" title="Add to the wishlist">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <!--/END CART-->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $('#owl-demo').owlCarousel({
                    loop: true,
                    autoPlay: 3000,
                    nav: true,
                    navText: ['<', '>'],
                    responsive: {
                        0: {
                            items: 1
                        },
                        480: {
                            items: 2
                        },
                        769: {
                            items: 3
                        },
                        992: {
                            items: 4
                        }
                    }
                })
            });
        </script>
    </body>
</html>