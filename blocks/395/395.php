<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <link href="css/owl.theme.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="js/owl.carousel.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/395.less', 'css/395.css');
        ?>

        <link href="css/395.css" rel="stylesheet" type="text/css"/>

    </head>

    <body>
        <div class="type-395">
            <div class="container">
                <div class="title-our">
                    <h2 class="title">OUR PARTNERS</h2>
                </div>
                <div class="clearfix" style="margin-top: 100px;"></div>
                <div class="type_slider">
                    <div class="content">
                        <div id="owl-demo" class="owl-carousel owl-theme">

                            <div class="item">
                                <div class="partner-images">
                                    <img src="images/partner2.png" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="partner-images">
                                    <img src="images/partner3.png" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="partner-images">
                                    <img src="images/partner1.png" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="partner-images">
                                    <img src="images/partner2.png" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="partner-images">
                                    <img src="images/partner4.png" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="partner-images">
                                    <img src="images/partner1.png" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="partner-images">
                                    <img src="images/partner2.png" alt="" />
                                </div>
                            </div>

                            <div class="item">
                                <div class="partner-images">
                                    <img src="images/partner3.png" alt="" />
                                </div>
                            </div>

                            <div class="item">
                                <div class="partner-images">
                                    <img src="images/partner4.png" alt="" />
                                </div>
                            </div>

                            <div class="item">
                                <div class="partner-images">
                                    <img src="images/partner1.png" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="partner-images">
                                    <img src="images/partner2.png" alt="" />
                                </div>
                            </div>

                            <div class="item">
                                <div class="partner-images">
                                    <img src="images/partner3.png" alt="" />
                                </div>
                            </div>

                            <div class="item">
                                <div class="partner-images">
                                    <img src="images/partner1.png" alt="" />
                                </div>
                            </div>

                            <div class="item">
                                <div class="partner-images">
                                    <img src="images/partner2.png" alt="" />
                                </div>
                            </div>

                            <div class="item">
                                <div class="partner-images">
                                    <img src="images/partner4.png" alt="" />
                                </div>
                            </div>

                            <div class="item">
                                <div class="partner-images">
                                    <img src="images/partner1.png" alt="" />
                                </div>
                            </div>

                            <div class="item">
                                <div class="partner-images">
                                    <img src="images/partner2.png" alt="" />
                                </div>
                            </div>

                            <div class="item">
                                <div class="partner-images">
                                    <img src="images/partner3.png" alt="" />
                                </div>
                            </div>

                            <div class="item">
                                <div class="partner-images">
                                    <img src="images/partner4.png" alt="" />
                                </div>
                            </div>

                            <div class="item">
                                <div class="partner-images">
                                    <img src="images/partner1.png" alt="" />
                                </div>
                            </div>

                            <script>
                                $(document).ready(function () {

                                    $("#owl-demo").owlCarousel({
                                        //Set AutoPlay to 3 seconds

                                        items: 5

                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
                <div class="clearfix" style="margin-top: 150px;"></div>
            </div>
        </div>
    </body>
</html>