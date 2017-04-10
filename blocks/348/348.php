
<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/348.less', 'css/348.css');
        ?>
        <link href="css/348.css" rel="stylesheet" type="text/css" />

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    </head>

    <body>   
        <div class="type-348">
            <div class="container">
                <div class="row">                                      
                    <h2 class="title">
                        <span class="light">Featured</span> Products
                    </h2>  
                    <div id="owl-demo" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="product">
                                <div class="product-img featured">
                                    <div class="picture">
                                        <a href="#">
                                            <img src="images/dummy/featured-products/featured-1.png"  ></a>
                                        <div class="img-overlay">
                                            <a href="#" class="btn more btn-primary">More</a>
                                            <a href="#" class="btn buy btn-danger">Buy</a>
                                        </div>
                                    </div>
                                </div>                                
                                <div class="main-titles">
                                    <h4 class="title">$62</h4>
                                    <h5 class="no-margin"><a href="#">Horsefeathers 610</a></h5>
                                </div>
                                <p class="desc">59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila</p>
                            </div>
                        </div>
                        <div class="item">  
                            <div class="product">
                                <div class="product-img featured">
                                    <div class="picture">
                                        <a href="#">
                                            <img src="images/dummy/featured-products/featured-2.png" ></a>
                                        <div class="img-overlay">
                                            <a href="#" class="btn more btn-primary">More</a>
                                            <a href="#" class="btn buy btn-danger">Buy</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-titles">
                                    <h4 class="title">$101</h4>
                                    <h5 class="no-margin"><a href="#">Horsefeathers 358</a></h5>
                                </div>
                                <p class="desc">59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila</p>
                            </div>
                        </div>
                        <div class="item"> 
                            <div class="product">
                                <div class="product-img featured">
                                    <div class="picture">
                                        <a href="#">
                                            <img src="images/dummy/featured-products/featured-3.png"></a>
                                        <div class="img-overlay">
                                            <a href="#" class="btn more btn-primary">More</a>
                                            <a href="#" class="btn buy btn-danger">Buy</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-titles">
                                    <h4 class="title">$38</h4>
                                    <h5 class="no-margin"><a href="#">Horsefeathers 409</a></h5>
                                </div>
                                <p class="desc">59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila</p>
                            </div>
                        </div>
                        <div class="item"> 
                            <div class="product">
                                <div class="product-img featured">
                                    <div class="picture">
                                        <a href="#">
                                            <img src="images/dummy/featured-products/featured-1.png"></a>
                                        <div class="img-overlay">
                                            <a href="#" class="btn more btn-primary">More</a>
                                            <a href="#" class="btn buy btn-danger">Buy</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-titles">
                                    <h4 class="title">$62</h4>
                                    <h5 class="no-margin"><a href="#">Horsefeathers 768</a></h5>
                                </div>
                                <p class="desc">59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila</p>
                            </div>
                        </div>   
                        <div class="item">   
                            <div class="product">
                                <div class="product-img featured">
                                    <div class="picture">
                                        <a href="#">
                                            <img src="images/dummy/featured-products/featured-2.png" ></a>
                                        <div class="img-overlay">
                                            <a href="#" class="btn more btn-primary">More</a>
                                            <a href="#" class="btn buy btn-danger">Buy</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-titles">
                                    <h4 class="title">$101</h4>
                                    <h5 class="no-margin"><a href="#">Horsefeathers 358</a></h5>
                                </div>
                                <p class="desc">59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila</p>
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
                        769: {
                            items: 3
                        }
                    }
                })
            });
        </script>
    </body>
</html>