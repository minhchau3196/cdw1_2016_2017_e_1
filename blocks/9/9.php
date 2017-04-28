<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script src="css/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/9.less', 'css/9.css');
        ?>
        <link href="css/9.css" rel="stylesheet" type="text/css" />


    </head>
    <body>
        <div class="type-9">
            <div class="bg">
                <div class="container">
                    <!--------------Phan menu-------------->
                    <nav class="navbar navbar-default">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span> 
                                </button>
                                <a class="navbar-brand" href="#">
                                    <img src="images/logo1.png" alt=""/>
                                </a>
                            </div>
                            <div class="collapse navbar-collapse" id="myNavbar">
                                <ul class="nav navbar-nav">
                                    <li  class="active"><a href="#">HOME</a></li>
                                    <li ><a href="#">FEAUTURE</a></li>
                                    <li><a href="#">SERVICES</a></li> 
                                    <li><a href="#">PROJECTS</a></li>
                                    <li><a href="#">SHOP</a></li> 
                                    <li><a href="#">NEW</a></li> 
                                    <li><a href="#">CONTACT</a></li> 
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
                                    <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <div class="clearfix"></div>
                    <div class="text">
                        <img src="images/s-icon-01.png" alt=""/>
                        <h1>Knitting & Hot Coffe</h1>
                        <p>orem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                            It has survived not only five centuries, but also the leap into electronic </p>
                    </div>
                    <div class="btn-explore">
                        <a href="#">Explore Now</a>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <!-------------Phan Mo ta about-------------->
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                        <div class="info">
                            <h2>About</h2>
                            <div class="line"></div>
                            <div class="text-about">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lectus mauris. Fusce ultrices in orci ac rhoncus. Duis dictum tempus neque, eu bibendum nibh viverra quis. Etiam sagittis ullamcorper volutpat.
                                    Vestibulum lacinia risus sed ligula malesuada volutpat. Quisque molestie condimentum purus at rhoncus.</p>
                                <div class="btn-contact">
                                    <a href="#">Contacts Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-8 col-xs-12">
                        <div class="info">
                            <h2>Service</h2>
                            <div class="line"></div>
                            <div class="thumb">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-2 col-lg-2 c0l-sm-2 col-xs-12">
                                                <div class="icon">
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-10 col-lg-10 col-sm-10 col-xs-12">
                                                <div class="clean">
                                                    <h5>Clean Desion</h5>
                                                    <p>Fusce ac odio odio. Cum sociis natoque </p>
                                                    <p>penatibus et magnis dis parturie.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-2 col-lg-2 c0l-sm-2 col-xs-12">
                                                <div class="icon">
                                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-10 col-lg-10 col-sm-10 col-xs-12">
                                                <div class="clean">
                                                    <h5>Loader With Power</h5>
                                                    <p>Fusce ac odio odio. Cum sociis natoque </p>
                                                    <p>penatibus et magnis dis parturie.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-2 col-lg-2 col-sm-2 col-xs-12">
                                                <div class="icon">
                                                    <i class="fa fa-optin-monster" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-10 col-lg-10 col-sm-10 col-xs-12">
                                                <div class="clean">
                                                    <h5>Free Update $ Support</h5>
                                                    <p>Fusce ac odio odio. Cum sociis natoque </p>
                                                    <p>penatibus et magnis dis parturie.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-2 col-lg-2 col-sm-2 col-xs-12">
                                                <div class="icon">
                                                    <i class="fa fa-gift" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-10 col-lg-10 col-sm-10 col-xs-12">
                                                <div class="clean">
                                                    <h5>CHOOSE THE PRODUCT YOU LOVE</h5>
                                                    <p>Fusce ac odio odio. Cum sociis natoque </p>
                                                    <p>penatibus et magnis dis parturie.</p>
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
            <div class="clearfix"></div>
            <!----------------Phan Portfolio---------->
            <div class="container">
                <div class="portfolio">
                    <h3>portfolio</h3>
                </div>
                <hr style="border-color:#f0ad4e;">
                <!---------Phan sliveshow------------>
                <div class="owl-carousel owl-theme">
                    <div class="item">

                        <img src="images/sl1.jpg" alt=""/>
                        <div class="text-sliveshow">
                            <p>The Blue "A"</p>
                            <a href="#">sociis</a>
                        </div>


                    </div>
                    <div class="item">
                        <img src="images/sl2.jpg" alt=""/>
                        <div class="text-sliveshow">
                            <p>The Blue "A"</p>
                            <a href="#">sociis</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/sl3.jpg" alt=""/>
                        <div class="text-sliveshow">
                            <p>The Blue "A"</p>
                            <a href="#">sociis</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/sl4.jpg" alt=""/>
                        <div class="text-sliveshow">
                            <p>The Blue "A"</p>
                            <a href="#">sociis</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/sl5.jpg" alt=""/>
                        <div class="text-sliveshow">
                            <p>The Blue "A"</p>
                            <a href="#">sociis</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/sl6" alt=""/>
                        <div class="text-sliveshow">
                            <p>The Blue "A"</p>
                            <a href="#">sociis</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/sl7.jpg" alt=""/>
                        <div class="text-sliveshow">
                            <p>The Blue "A"</p>
                            <a href="#">sociis</a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="btn-loading">
                    <a href="#">Loading More</a>
                </div>
            </div>
            <div class="clearfix"></div>
            <!---------------Phan Image --------->
            <div class="container">
                <div class="partner">
                    <ul>
                        <li><img src="images/partner-1.jpg" alt=""/></li>
                        <li><img src="images/partner-2.jpg" alt=""/></li>
                        <li><img src="images/partner-3.jpg" alt=""/></li>
                        <li><img src="images/partner-4.jpg" alt=""/></li>
                        <li><img src="images/partner-5.jpg" alt=""/></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
            <!----------------phan man and women------------------->
            <div class="info-man">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="thumb-man">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="img-man">
                                            <img src="images/man.jpg" alt=""/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="text-man">
                                            <p>Lorem Ipsum has been the industry's standard dummy text 
                                                ever since the 1500s, when an unknown printer took a gallery</p>
                                            <span class="name">David willer</span> Graphic designer
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="thumb-man">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="img-man">
                                            <img src="images/woman.jpg" alt=""/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="text-man">
                                            <p>Lorem Ipsum has been the industry's standard dummy text 
                                                ever since the 1500s, when an unknown printer took a gallery</p>
                                            <span class="name">David Miller</span> Graphic designer
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <!------------------Phan from out------------------>
            <div class="container">
                <div class="portfolio">
                    <h3>From Out Blog</h3>
                </div>
                <hr style="border-color:#f0ad4e;">
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="from-img">
                            <img src="images/new.jpg" alt=""/>
                            <h4>You Can Creat Amazing Things</h4>
                            <h6>Jan 20 2014 porro quisquam</h6>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of </p>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="from-img">
                            <img src="images/new1 .jpg" alt=""/>
                            <h4>You Can Creat Amazing Things</h4>
                            <h6>Jan 20 2014 porro quisquam</h6>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of </p>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="from-img">
                            <img src="images/new4.jpg" alt=""/>
                            <h4>You Can Creat Amazing Things</h4>
                            <h6>Jan 20 2014 porro quisquam</h6>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <!---------Phan top footer------------>
            <div class="topfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="see">
                                <i class="fa fa-sellsy" aria-hidden="true"></i>  SEE MAP
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="see1">
                                <i class="fa fa-amazon" aria-hidden="true"></i> SCROLL UP
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <!----------Phan footer--------------->
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="logo-footer">
                                <img src="images/logo.png" alt=""/>
                                <p>It is a long established fact that a reader will be distracted by 
                                    the readable content of a page when looking at its layout. The point of </p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="logo-footer">
                                <h3>Information</h3>
                                <p>It is a long established fact </p>
                                <p class="color">It is a long established fact </p>
                                <p>Privace Policy </p>
                                <p>It is a long  </p>
                                <p>It is a long  </p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="logo-footer">
                                <h3>Extras</h3>
                                <p>Branchs </p>
                                <p>Gh Voucher </p>
                                <p>Ipsum </p>
                                <p>ILorem</p>
                                <p>It is a long  </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="logo-footer">
                                <h3>Recent Post</h3>
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i> 14 Toanpham , Count road, LonDon,English </p>
                                <p><i class="fa fa-phone" aria-hidden="true"></i> [102]3456789 </p>
                                <p> <i class="fa fa-envelope-o" aria-hidden="true"></i> Info@email.com </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="clearfix"></div>
            <!----------End footer------------->
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="text-footer">
                            <p>&copy; Copy Right 2013. Power by Nhu Tran.<br>Theme may by themsome</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="end">
                        <div class="footer-end">
                            <ul>
                                <li><img src="images/pay1.png" alt=""/></li>
                                <li><img src="images/pay2.png" alt=""/></li>
                                <li><img src="images/pay3.png" alt=""/></li>
                                <li><img src="images/pay5.png" alt=""/></li>
                            </ul> 
                        </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>

<script>
    $(document).ready(function () {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
            margin: 10,
            nav: true,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })
    })
</script>