<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/351.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/351.less', 'css/351.css');
        ?>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/swiper.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-351">
            <div class="container">
                <div class="swiper-container">
                    <h2 class="title">
                        <span class="swiper-button-prev" id="tweetsLeft" style="display: inline;"></span>
                        &nbsp;&nbsp;&nbsp;Latest<span class="light"> News</span> &nbsp;&nbsp;&nbsp;
                        <span class="swiper-button-next" id="tweetsRight" style="display: inline;"></span>
                    </h2>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="col-md-6 col-xs-12 col-sm-6">
                                    <div class="news-item">
                                        <div class="published">12. July, 2013</div>
                                        <h6><a href="#">Title of the Latest News</a></h6>
                                        <p>There's a voice that keeps on calling me. Down the road, that's where I'll al ways be. Every stop I make, I make a new friend. Lorem sown the road, that's where I'll always be. Every stop I make, I make a new friend.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12 col-sm-6">
                                    <div class="news-item">
                                        <div class="published">18. July, 2013</div>
                                        <h6><a href="#">Another Amusing News</a></h6>
                                        <p>There's a voice that keeps on calling me. Down the road, that's where I'll al ways be. Every stop I make, I make a new friend. Lorem sown the road, that's where I'll always be. Every stop I make, I make a new friend.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="col-md-6 col-xs-12 col-sm-6">
                                    <div class="news-item">
                                        <div class="published">12. July, 2013</div>
                                        <h6><a href="#">Title of the Latest News</a></h6>
                                        <p>There's a voice that keeps on calling me. Down the road, that's where I'll al ways be. Every stop I make, I make a new friend. Lorem sown the road, that's where I'll always be. Every stop I make, I make a new friend.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12 col-sm-6">
                                    <div class="news-item">
                                        <div class="published">18. July, 2013</div>
                                        <h6><a href="#">Another Amusing News</a></h6>
                                        <p>There's a voice that keeps on calling me. Down the road, that's where I'll al ways be. Every stop I make, I make a new friend. Lorem sown the road, that's where I'll always be. Every stop I make, I make a new friend.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="col-md-6 col-xs-12 col-sm-6">
                                    <div class="news-item">
                                        <div class="published">12. July, 2013</div>
                                        <h6><a href="#">Title of the Latest News</a></h6>
                                        <p>There's a voice that keeps on calling me. Down the road, that's where I'll al ways be. Every stop I make, I make a new friend. Lorem sown the road, that's where I'll always be. Every stop I make, I make a new friend.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12 col-sm-6">
                                    <div class="news-item">
                                        <div class="published">18. July, 2013</div>
                                        <h6><a href="#">Another Amusing News</a></h6>
                                        <p>There's a voice that keeps on calling me. Down the road, that's where I'll al ways be. Every stop I make, I make a new friend. Lorem sown the road, that's where I'll always be. Every stop I make, I make a new friend.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="col-md-6 col-xs-12 col-sm-6">
                                    <div class="news-item">
                                        <div class="published">12. July, 2013</div>
                                        <h6><a href="#">Title of the Latest News</a></h6>
                                        <p>There's a voice that keeps on calling me. Down the road, that's where I'll al ways be. Every stop I make, I make a new friend. Lorem sown the road, that's where I'll always be. Every stop I make, I make a new friend.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12 col-sm-6">
                                    <div class="news-item">
                                        <div class="published">18. July, 2013</div>
                                        <h6><a href="#">Another Amusing News</a></h6>
                                        <p>There's a voice that keeps on calling me. Down the road, that's where I'll al ways be. Every stop I make, I make a new friend. Lorem sown the road, that's where I'll always be. Every stop I make, I make a new friend.</p>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>  
        <script>
            var swiper = new Swiper('.swiper-container', {
                pagination: '.swiper-pagination',
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
                paginationClickable: true,
                spaceBetween: 30,
                centeredSlides: true,
                autoplay: 5000,
                autoplayDisableOnInteraction: false
            });
        </script>
    </body>
</html>