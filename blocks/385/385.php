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
        $less->compileFile('less/385.less', 'css/385.css');
        ?>
        <link href="css/385.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="type-385">
            <div class="container">
                <div class="main_content">
                    <div class="row">
                        <h3>COLLECTIONS</h3>
                        <div role="tabpanel">
                            <div class="col-sm-3">
                            </div>
                            <div class="col-sm-9">
                                <div class="list-grid-demo">
                                    <div class="well well-sm">                             
                                        <div class="group"> 
                                            <a href="#" id="grid" class="btn-sm">
                                                <i class="fa fa-th-list"></i></a>
                                            <a href="#" id="list" class="btn-sm">
                                                <i class="fa fa-th"></i></a>                                            
                                        </div>
                                        <div class="sort_by">
                                            <label>Sort by</label>
                                            <select id="sort_by_select" class="form-control">
                                                <option value="manual" selected="selected">Featured</option>
                                                <option value="best-selling">Best selling</option>
                                                <option value="title-ascending">Name: A to Z</option>
                                                <option value="title-descending">Name: Z to A</option>
                                                <option value="price-ascending">Price: low to high</option>
                                                <option value="price-descending">Price: high to low</option>
                                                <option value="created-ascending">Oldest to newest</option>
                                                <option value="created-descending">Newest to oldest</option>
                                            </select>
                                        </div>
                                        <div class="show_products">
                                            <label>Show</label>

                                            <select id="show_products_select" class="form-control">
                                                <option value="6" selected="selected">6</option>
                                                <option value="9">9</option>
                                                <option value="15">15</option>
                                                <option value="all">All</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="products" class="grid-group-wrapper row">
                                        <div class="item col-md-4 col-lg-4 col-xs-12 col-sm-12">
                                            <div class="product_wrapper">
                                                <div class="product_img">
                                                    <a class="img_change" href="#">
                                                        <img class="img_1" src="image/375-1.png" alt="Wood box easel painting set 12 tubes of oil colors">
                                                        <img class="img_2" src="image/375-3.png" alt="">
                                                        <span class="product_badge new">New</span>
                                                    </a>
                                                </div>
                                                <div class="product_info">                                                    
                                                    <div class="product_name">
                                                        <a href="#">Wood box easel painting set 12 tubes of oil colors</a>
                                                    </div>
                                                    <div class="product_desc_long">
                                                       <p>Are you eager to obtain a unique piece of art rather than something used in 9 out of 10 places?
                                                        If you live in a town with one or two galleries,
                                                        it may be a challenge to find the artwork that would match your preferences.
                                                        This is when our company will come in handy.&nbsp;&nbsp;In this case, our services are what you need.
                                                        This website boasts of a collect...</p></div>
                                                    <div class="product_price">
                                                        <span class="money">$16.00</span>
                                                    </div>
                                                    <div class="product_links">
                                                        <form method="post" action="">
                                                            <button class="btn btn-cart btn-disabled" disabled="disabled" title="Unavailable">
                                                                <i aria-hidden="true" class="fa fa-ban"></i></button>
                                                        </form>
                                                        <a class="btn quick_view_btn btn_c" href="#" title="Quick view">
                                                            <i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                                        <a class="btn btn_c wishlist_add_login" href="#" title="Add to the wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-md-4 col-lg-4 col-xs-12 col-sm-12">
                                            <div class="product_wrapper">
                                                <div class="product_img">
                                                    <a class="img_change" href="#">
                                                        <img class="img_1" src="image/3853.png" alt="Wood box easel painting set 12 tubes of oil colors">
                                                        <img class="img_2" src="image/375-3.png" alt="">
                                                        <span class="product_badge new">New</span>
                                                    </a>
                                                </div>
                                                <div class="product_info">                                                    
                                                    <div class="product_name">
                                                        <a href="#">Wood box easel painting set 12 tubes of oil colors</a>
                                                    </div>
                                                    <div class="product_desc_long">
                                                       <p>Are you eager to obtain a unique piece of art rather than something used in 9 out of 10 places?
                                                        If you live in a town with one or two galleries,
                                                        it may be a challenge to find the artwork that would match your preferences.
                                                        This is when our company will come in handy.&nbsp;&nbsp;In this case, our services are what you need.
                                                        This website boasts of a collect...</p></div>
                                                    <div class="product_price">
                                                        <span class="money">$16.00</span>
                                                    </div>
                                                    <div class="product_links">
                                                        <form method="post" action="">
                                                            <button class="btn btn-cart btn-disabled" disabled="disabled" title="Unavailable">
                                                                <i aria-hidden="true" class="fa fa-ban"></i></button>
                                                        </form>
                                                        <a class="btn quick_view_btn btn_c" href="#" title="Quick view">
                                                            <i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                                        <a class="btn btn_c wishlist_add_login" href="#" title="Add to the wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-md-4 col-lg-4 col-xs-12 col-sm-12">
                                            <div class="product_wrapper">
                                                <div class="product_img">
                                                    <a class="img_change" href="#">
                                                        <img class="img_1" src="image/3852.png" alt="Wood box easel painting set 12 tubes of oil colors">
                                                        <img class="img_2" src="image/375-1.png" alt="">
                                                        <span class="product_badge new">New</span>
                                                    </a>
                                                </div>
                                                <div class="product_info">
                                                    <div class="product_name">
                                                        <a href="#">Wood box easel painting set 12 tubes of oil colors</a>
                                                    </div>
                                                    <div class="product_desc_long">
                                                        <p>Are you eager to obtain a unique piece of art rather than something used in 9 out of 10 places?
                                                        If you live in a town with one or two galleries,
                                                        it may be a challenge to find the artwork that would match your preferences.
                                                        This is when our company will come in handy.&nbsp;&nbsp;In this case, our services are what you need.
                                                        This website boasts of a collect...</p></div>
                                                    <div class="product_price">
                                                        <span class="money">$16.00</span>
                                                    </div>

                                                    <div class="product_links">
                                                        <form method="post" action="">
                                                            <button class="btn btn-cart" type="submit" title="Unavailable">
                                                                <input type="hidden" name="id" value="25022984519">
                                                                <a class="btn btn-success" href="#">Add to cart</a></button>
                                                        </form>
                                                        <a class="btn quick_view_btn btn_c" href="#" title="Quick view">
                                                            <i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                                        <a class="btn btn_c wishlist_add_login" href="#" title="Add to the wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                        
                                         <div class="item col-md-4 col-lg-4 col-xs-12 col-sm-12">
                                            <div class="product_wrapper">
                                                <div class="product_img">
                                                    <a class="img_change" href="#">
                                                        <img class="img_1" src="image/3852.png" alt="Wood box easel painting set 12 tubes of oil colors">
                                                        <img class="img_2" src="image/375-1.png" alt="">
                                                        <span class="product_badge new">New</span>
                                                    </a>
                                                </div>
                                                <div class="product_info">
                                                    <div class="product_name">
                                                        <a href="#">Wood box easel painting set 12 tubes of oil colors</a>
                                                    </div>
                                                    <div class="product_desc_long">
                                                        <p>Are you eager to obtain a unique piece of art rather than something used in 9 out of 10 places?
                                                        If you live in a town with one or two galleries,
                                                        it may be a challenge to find the artwork that would match your preferences.
                                                        This is when our company will come in handy.&nbsp;&nbsp;In this case, our services are what you need.
                                                        This website boasts of a collect...</p></div>
                                                    <div class="product_price">
                                                        <span class="money">$16.00</span>
                                                    </div>

                                                    <div class="product_links">
                                                        <form method="post" action="">
                                                            <button class="btn btn-cart" type="submit" title="Unavailable">
                                                                <input type="hidden" name="id" value="25022984519">
                                                                <a class="btn btn-success" href="#">Add to cart</a></button>
                                                        </form>
                                                        <a class="btn quick_view_btn btn_c" href="#" title="Quick view">
                                                            <i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                                        <a class="btn btn_c wishlist_add_login" href="#" title="Add to the wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-md-4 col-lg-4 col-xs-12 col-sm-12">
                                            <div class="product_wrapper">
                                                <div class="product_img">
                                                    <a class="img_change" href="#">
                                                        <img class="img_1" src="image/385.png" alt="Wood box easel painting set 12 tubes of oil colors">
                                                        <img class="img_2" src="image/375-2.png" alt="">
                                                        <span class="product_badge new">New</span>
                                                    </a>
                                                </div>
                                                <div class="product_info">                                                    
                                                    <div class="product_name">
                                                        <a href="#">Wood box easel painting set 12 tubes of oil colors</a>
                                                    </div>
                                                    <div class="product_desc_long">
                                                       <p>Are you eager to obtain a unique piece of art rather than something used in 9 out of 10 places?
                                                        If you live in a town with one or two galleries,
                                                        it may be a challenge to find the artwork that would match your preferences.
                                                        This is when our company will come in handy.&nbsp;&nbsp;In this case, our services are what you need.
                                                        This website boasts of a collect...</p></div>
                                                    <div class="product_price">
                                                        <span class="money">$16.00</span>
                                                    </div>
                                                    <div class="product_links">
                                                        <form method="post" action="">
                                                            <button class="btn btn-cart btn-disabled" disabled="disabled" title="Unavailable">
                                                                <i aria-hidden="true" class="fa fa-ban"></i></button>
                                                        </form>
                                                        <a class="btn quick_view_btn btn_c" href="#" title="Quick view">
                                                            <i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                                        <a class="btn btn_c wishlist_add_login" href="#" title="Add to the wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-md-4 col-lg-4 col-xs-12 col-sm-12">
                                            <div class="product_wrapper">
                                                <div class="product_img">
                                                    <a class="img_change" href="#">
                                                        <img class="img_1" src="image/385.png" alt="Wood box easel painting set 12 tubes of oil colors">
                                                        <img class="img_2" src="image/3853.png" alt="">
                                                        <span class="product_badge new">New</span>
                                                    </a>
                                                </div>
                                                <div class="product_info">
                                                    <div class="product_name">
                                                        <a href="#">Wood box easel painting set 12 tubes of oil colors</a>
                                                    </div>
                                                    <div class="product_desc_long">
                                                        <p>Are you eager to obtain a unique piece of art rather than something used in 9 out of 10 places?
                                                        If you live in a town with one or two galleries,
                                                        it may be a challenge to find the artwork that would match your preferences.
                                                        This is when our company will come in handy.&nbsp;&nbsp;In this case, our services are what you need.
                                                        This website boasts of a collect...</p></div>
                                                    <div class="product_price">
                                                        <span class="money">$16.00</span>
                                                    </div>

                                                    <div class="product_links">
                                                        <form method="post" action="">
                                                            <button class="btn btn-cart" type="submit" title="Unavailable">
                                                                <input type="hidden" name="id" value="25022984519">
                                                                <a class="btn btn-success" href="#">Add to cart</a></button>
                                                        </form>
                                                        <a class="btn quick_view_btn btn_c" href="#" title="Quick view">
                                                            <i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                                        <a class="btn btn_c wishlist_add_login" href="#" title="Add to the wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <<script>
            jQuery(document).ready(function ($) {
                $('#list').click(function (event) {
                    event.preventDefault();
                    $('#products').addClass('list-group-wrapper').removeClass('grid-group-wrapper');
                });
                $('#grid').click(function (event) {
                    event.preventDefault();
                    $('#products').removeClass('list-group-wrapper').addClass('grid-group-wrapper');
                });
            });
        </script>
    </body>
</html>