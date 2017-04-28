<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/swiper.min.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/30.less', 'css/30.css');
        ?>
        <link href="css/30.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/swiper.min.js" type="text/javascript"></script>

    </head>

    <body>
        <!--------menu------------>
        <div class="type-1">
            <header id="header">
                <div class="container">
                    <h1 class="logo">
                        <a href="#"><img src="images/logo.gif" alt="car wash"></a>
                    </h1>
                    <nav class="main-menu">
                        <ul class="sf-menu">
                            <li class="current"><a href="#">home</a></li>
                            <li><a href="#">about</a> </li>                                
                            <li><a href="#">services</a></li>
                            <li><a href="#">coupons</a></li>
                            <li><a href="#">fundraising</a></li>
                            <li><a href="#">contacts</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </nav>
                    <div class="clearfix"></div>
                </div>
            </header> 
        </div>
        <div class="clearfix"></div>
        <!----------------------------->
        <div class="type-2">
            <div id="swiper" class="swiper-container swiper-container-horizontal swiper-container-fade">
                <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-slide-duplicate">
                        <a>
                            <img src="images/images.jpg" alt=""/>                                
                            <div class="camera_caption" style="visibility: visible; opacity: 1;">
                                Giving your car the best cleaning it’s <span>ever had</span>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate">
                        <a>
                            <img src="images/2-2.jpg" alt=""/>                                
                            <div class="camera_caption" style="visibility: visible; opacity: 1;">
                                Giving your car the best cleaning it’s <span>ever had</span>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate">
                        <a>
                            <img src="images/vw-465b.jpg" alt=""/>
                            <div class="camera_caption" style="visibility: visible; opacity: 1;">
                                Giving your car the best cleaning it’s <span>ever had</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="swiper_controls">
                    <div class="container">
                        <div id="swiper_btn_prev" class="swiper_btn">
                            <i class="fa fa-long-arrow-left"></i>
                        </div>
                        <div id="swiper_btn_next" class="swiper_btn">
                            <i class="fa fa-long-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <!------------------------>
        <div class="type-3">
            <div class="container">
                <div class="row">
                    <div class="title title-h2" >
                        <h2>Welcome visitor!</h2>
                        <div class="welcome_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="box-inner-indent" style="visibility: visible; animation-name: fadeInLeft;">
                            <img src="images/icon-1.png" alt="">
                            <h3>CAR WASH</h3>
                            <h4>Ut enim ad minima </h4>
                            <div class="service-description">
                                Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitaullaboris nisi ut aliquip. 
                            </div>
                            <a href="#" class="link">more info</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="box-inner-indent" style="visibility: visible; animation-name: fadeInUp;">
                            <img src="images/icon-2.png" alt="">
                            <h3>car repair</h3>
                            <h4>Duis aute irure dolor</h4>
                            <div class="service-description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitaullamco. 
                            </div>
                            <a href="#" class="link">more info</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="box-inner-indent" style="visibility: visible; animation-name: fadeInRight;">
                            <img src="images/icon-3.png" alt="">
                            <h3>diagnostics</h3>
                            <h4>massa laoreetum</h4>
                            <div class="service-description">
                                Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitau.
                            </div>
                            <a href="#" class="link">more info</a>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <div class="clearfix"></div>
        <!------------------------------------->
        <div class="type-4">
            <div class="container">
                <div class="box-1-section-indent">
                    <div class="row">
                        <div class="title title-h2" style="visibility: visible; animation-name: fadeIn;">
                            <h2 class="color__white heading__indent">high quality</h2>
                            <div class="text-1 align-center">
                                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="box-1 box-1__indent" style="visibility: visible; animation-name: fadeInLeft;">
                                <img src="images/Untitled-2.jpg" alt="" class="img-fl-rigth">
                                <h5>dolore est</h5>
                                <div class="box-1-content">
                                    Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse
                                </div>
                                <a href="#" class="link-1"></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="box-1 box-1__indent" style="visibility: visible; animation-name: fadeInDown;">
                                <img src="images/xe2.jpg" alt="" class="img-fl-rigth">
                                <h5>laoreetum</h5>
                                <div class="box-1-content">
                                    Eutem vel eum iurede repquam nihil molesti ae consequatur
                                </div>
                                <a href="#" class="link-1"></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="box-1 box-1__indent" style="visibility: visible; animation-name: fadeInRight;">
                                <img src="images/page1-img1.jpg" alt="" class="img-fl-rigth">
                                <h5>consectetuer</h5>
                                <div class="box-1-content">
                                    Vel eum iure reprehen derit qui in eavoluptat velit esse quam nihil
                                </div>
                                <a href="#" class="link-1"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <!------------------------------------->
        <div class="type-5">
            <div class="subscribe-indent">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="fl-l" style="visibility: visible; animation-name: fadeInLeft;">
                                <h3 class="heading__size">Sign up to get fresh news &amp; deals </h3>
                                <span class="sub-title">Subscribe to our mailing list</span>
                            </div>
                            <form id="subscribe-form" style="visibility: visible; animation-name: fadeInRight;">
                                <div class="success" style="display: none;">Your subscription request has been sent!</div>
                                <fieldset>
                                    <label class="name">
                                        <input type="text" value="">
                                        <span class="error">*This is not a valid name.</span></label>
                                    <label class="email">
                                        <input type="email" value="">
                                        <span class="error">*This is not a valid email address.</span>
                                    </label>
                                    <a href="#" class="btn-default" data-type="submit">Submit</a>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <!------------------------------------->
        <div class="type-6">
            <div class="box-3-indent">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12" style="visibility: visible; animation-name: fadeIn;">
                            <h2 class="color__white heading__indent">testimonials</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12" style="visibility: visible; animation-name: fadeInLeft;">
                            <div class="box-testimonial">
                                <img src="images/1.jpg" alt="" class="testimonial-img">
                                Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id...
                                <strong>Jonh Sawyer.</strong>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="box-testimonial">
                                <img src="images/1.jpg" alt="" class="testimonial-img">
                                Massa tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id lorem...
                                <strong>Andrew Doo.</strong>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12" style="visibility: visible; animation-name: fadeInRight;">
                            <div class="box-testimonial">
                                <img src="images/1.jpg" alt="" class="testimonial-img">
                                Wero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id dolore sed...
                                <strong>Chris Smith.</strong>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 align-center" style="visibility: visible; animation-name: fadeInDown;">
                            <a href="#" class="btn-default">view all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <!----------Footer------------------>
        <div class="type-7">
            <footer id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12" style="visibility: visible; animation-name: fadeInUp;">
                            © <span>2017</span><a href="#" class="privacy-link">Privacy policy</a>
                            <ul class="social-list">
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-google-plus "></a></li>
                                <li><a href="#" class="fa fa-rss"></a></li>
                                <li><a href="#" class="fa fa-pinterest"></a></li>
                                <li><a href="#" class="fa fa-linkedin"></a></li>
                            </ul>
                            <span class="telephone">Telephone:  +1 800 603 6035</span>
                            <!--{%FOOTER_LINK} -->
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <script>
            var swiper = new Swiper('.swiper-container', {
                effect: 'fade',
                autoplay: 5000,
                speed: 500,
                nextButton: '#swiper_btn_next',
                prevButton: '#swiper_btn_prev'

            });

        </script>
    </body>
</html>