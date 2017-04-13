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
        $less->compileFile('less/397.less', 'css/397.css');
        ?>
        <link href="css/397.css" rel="stylesheet" type="text/css" />
        <script src="js/swiper.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-397"> 
            <div id="swiper" class="swiper-container swiper-container-horizontal swiper-container-fade">
                <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-slide-duplicate">
                        <a>
                            <img src="images/1.jpg" alt=""/>
                            <div class="tp-caption tp1">
                                <h2>
                                    Targeting high impact exploration <br>
                                    Offshore Industry 
                                </h2>
                                <p>
                                    Holisticly brand sustainable .. than clicks-and-mortar applications. <br>
                                    Phosfluorescently whiteboard fully tested initiatives. 
                                </p>
                                <div class="btn-know">
                                    Know more
                                </div>
                            </div>                            
                        </a>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate">
                        <a>
                            <img src="images/2.jpg" alt=""/>                           
                            <div class="tp-caption tp2">
                                <h2>
                                    Targeting high impact exploration <br>
                                    Offshore Industry 
                                </h2>
                                <p>
                                    Holisticly brand sustainable .. than clicks-and-mortar applications. <br>
                                    Phosfluorescently whiteboard fully tested initiatives. 
                                </p>
                                <div class="btn-know">
                                    Know more
                                </div>
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