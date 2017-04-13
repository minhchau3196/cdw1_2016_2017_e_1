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
        $less->compileFile('less/344.less', 'css/344.css');
        ?>
        <link href="css/344.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/owl.carousel.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-344">
            <!--FOOTER-->           
            <div class="container">
                <div class="main-titles lined">
                    <h2 class="title"><span class="light">Our</span> Brands</h2>                  
                </div>
                <div class="logo" style="text-align: center;">               
                    <div id="owl-demo" class="owl-carousel owl-theme">
                        <div class="item"><img src="images/1.jpg" alt="Owl Image"></div>
                        <div class="item"><img src="images/2.jpg" alt="Owl Image"></div>
                        <div class="item"><img src="images/3.jpg" alt="Owl Image"></div>
                        <div class="item"><img src="images/4.jpg" alt="Owl Image"></div>
                        <div class="item"><img src="images/5.jpg" alt="Owl Image"></div>
                        <div class="item"><img src="images/4.jpg" alt="Owl Image"></div>
                        <div class="item"><img src="images/3.jpg" alt="Owl Image"></div>
                        <div class="item"><img src="images/2.jpg" alt="Owl Image"></div>
                        <div class="item"><img src="images/1.jpg" alt="Owl Image"></div>
                        <div class="item"><img src="images/3.jpg" alt="Owl Image"></div>
                    </div>
                </div>                
            </div>
        </div>

        <script>
            $(document).ready(function () {
                $('#owl-demo').owlCarousel({
                    loop: true,
                    autoPlay: 3000,                   
                    responsive: {
                        0: {
                            items: 1
                        },
                        769: {
                            items: 3
                        },
                        992: {
                            items: 5
                        }
                    }
                })
            });
        </script>
    </body>
</html>