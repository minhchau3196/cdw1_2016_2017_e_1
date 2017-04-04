<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/347.less', 'css/347.css');
        ?>
        <link href="css/347.css" rel="stylesheet" type="text/css" />
        <script src="js/swiper.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-347"> 
            <div id="swiper" class="swiper-container swiper-container-horizontal swiper-container-fade">
                <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-slide-duplicate">
                        <a>
                            <img src="images/slide.jpg" title="" alt="">
                            <div class="slider_caption ">
                                <div class="tp_caption big_theme"> 
                                    With Webmarket, the Sky Is the Limit
                                </div>
                                <div class="tp_caption small_theme"> 
                                    Take a tour on Webmarket HTML Template
                                </div>
                                <span class="btn_theme" data-text="Shop Now">Any More...</span>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate">
                        <a>
                            <img src="images/slide1.jpg" title="" alt="">
                            <div class="slider_caption">
                                <div class="tp_caption big_theme"> 
                                    Over status Customer..
                                </div>
                                <div class="tp_caption small_theme"> 
                                    Hepl customer in online
                                </div>
                                <span class="btn_theme" data-text="Shop Now">All reply..</span>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate">
                        <a>
                            <img src="images/slide2.jpg" title="" alt="">
                            <div class="slider_caption ">
                                <div class="tp_caption big_theme"> 
                                    Free shipping, the Sky Is the Limit
                                </div>
                                <div class="tp_caption small_theme"> 
                                    In the name of the...
                                </div>
                                <span class="btn_theme" data-text="Shop Now">Learning More...</span>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate">
                        <a>
                            <img src="images/slide3.jpg" title="" alt="">
                            <div class="slider_caption ">
                                <div class="tp_caption big_theme"> 
                                    With Customer, you are number one
                                </div>
                                <div class="tp_caption small_theme"> 
                                    Test template for customer
                                </div>
                                <span class="btn_theme" data-text="Shop Now">Shop now...</span>
                            </div>
                        </a>
                    </div>                    
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <div class="swiper_controls">
                    <div class="container">                        
                        <div id="swiper_btn_prev" class="swiper_btn">
                            <i class="fa fa-angle-left"></i>
                        </div>
                        <div id="swiper_btn_next" class="swiper_btn">
                            <i class="fa fa-angle-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            var swiper = new Swiper('.swiper-container', {
                effect: 'fade',
                pagination: '.swiper-pagination',
                autoplay: 5000,
                speed: 500,
                nextButton: '#swiper_btn_next',
                prevButton: '#swiper_btn_prev'

            });

        </script>
    </body>
</html>