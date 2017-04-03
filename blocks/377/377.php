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
        $less->compileFile('less/377.less', 'css/377.css');
        ?>
        <link href="css/377.css" rel="stylesheet" type="text/css"/>  
        
        <script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/swiper.min.js" type="text/javascript"></script>
        
    </head>
    <body>
        <div class="type-377">
            <div class="container">
                <div class="main_content">
                    
                    <!--TITLE-->
                    <h2 class="page_heading">Featured products</h2>
                    <!--/END TITLE-->
                    
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!--PRODUCT-->
                            <div class="col-md-3 col-sm-3 col-xs-12 swiper-slide">
                                <div class="product_wrapper">
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
                                    <!--/END INFORMATION-->
                                    
                                </div>
                            </div>
                            <!--/END PRODUCT-->
                            
                            <div class="col-md-3 col-sm-3 col-xs-12 swiper-slide">
                                <div class="product_wrapper">
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
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 swiper-slide">
                                <div class="product_wrapper">
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
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 swiper-slide">
                                <div class="product_wrapper">
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
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 swiper-slide">
                                <div class="product_wrapper">
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
                            </div>
                            
                             <!--PRODUCT-->
                            <div class="col-md-3 col-sm-3 col-xs-12 swiper-slide">
                                <div class="product_wrapper">
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
                                    <!--/END INFORMATION-->
                                    
                                </div>
                            </div>
                            <!--/END PRODUCT-->
                            
                             <!--PRODUCT-->
                            <div class="col-md-3 col-sm-3 col-xs-12 swiper-slide">
                                <div class="product_wrapper">
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
                                    <!--/END INFORMATION-->
                                    
                                </div>
                            </div>
                            <!--/END PRODUCT-->
                            
                             <!--PRODUCT-->
                            <div class="col-md-3 col-sm-3 col-xs-12 swiper-slide">
                                <div class="product_wrapper">
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
                                    <!--/END INFORMATION-->
                                    
                                </div>
                            </div>
                            <!--/END PRODUCT-->
                        </div>
                    </div>
                    
                    <!--BUTTON CONTROL-->
                    <div class="swiper_btn swiper-button-prev">&#8249;</div>
                    <div class="swiper_btn swiper-button-next">&#8250;</div>
                    <!--/END BUTTON CONTROL-->
                    
                </div>
            </div>
        </div>

        <script>

            var swiper = new Swiper('.swiper-container', {
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
                slidesPerView: 4                
            });

        </script>        
    
    </body>
</html>