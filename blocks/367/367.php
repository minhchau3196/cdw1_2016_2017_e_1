
<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/367.less', 'css/367.css');
        ?>
        <link href="css/367.css" rel="stylesheet" type="text/css" />

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/swiper.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-367">
            <div class="homepage_blog">
                <div class="container">
                    <h2 class="page_heading">BLOG</h2>
                    <div id="homepage_blog" class="swiper-container">
                        <div class="" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                            <div class="swiper-slide" data-swiper-slide-index="2" style="width: 1170px; margin-right: 30px;">
                                <div class="row">
                                    <div class="article_img col-md-6 col-sm-6 col-xs-12">
                                        <img src="images/Home_14_03_1024x1024.jpg" alt="Easy-Peasy Way To Add Color  To A&nbsp;Journal"></div>
                                    <div class="blog_wrapper col-md-6 col-sm-6 col-xs-12">
                                        <span class="blog_date">July 18, 2016</span>
                                        <h3 class="blog_title">
                                            <a href="#">Easy-Peasy Way To Add Color  To A&nbsp;Journal</a>
                                        </h3>
                                        <div class="blog_content">Adding a little color to a journal is easy with watercolor dots, a brush and some water. Contrast or complement with fountain pen ink for a unique twist to doodling in a journal. </div>
                                        <a class="btn blog_btn" href="#">Read more</a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide" data-swiper-slide-index="0" style="width: 1170px; margin-right: 30px;">
                                <div class="row">
                                    <div class="article_img col-md-6">
                                        <img src="images/blog3_1024x1024.jpg" alt="In this case, our services are what you need.">
                                    </div>
                                    <div class="blog_wrapper col-md-6">
                                        <span class="blog_date">July 22, 2016</span>
                                        <h3 class="blog_title">
                                            <a href="#">In this case, our services are what you need.</a>
                                        </h3>
                                        <div class="blog_content">Fortunately, our team will be with you from the moment you enter our online gallery to the day your artwork is delivered.If you are eager to explore and experiment, contact us and we'll make this procedure easier for you. </div>
                                        <a class="btn blog_btn" href="#">Read more</a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide" data-swiper-slide-index="1" style="width: 1170px; margin-right: 30px;">
                                <div class="row">
                                    <div class="article_img col-md-6">
                                        <img src="images/blog2_1024x1024.jpg" alt="If you are eager to explore and experiment, contact us and we'll make this procedure easier for you."></div>
                                    <div class="blog_wrapper col-md-6">
                                        <span class="blog_date">July 22, 2016</span>
                                        <h3 class="blog_title">
                                            <a href="#">If you are eager to explore and experiment...</a></h3>
                                        <div class="blog_content">If you are eager to explore and experiment, contact us and we'll make this procedure easier for you.If you live in a town with one or two galleries, it may be a challenge to find the artwork that would match... </div>
                                        <a class="btn blog_btn" href="#">Read more</a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide" data-swiper-slide-index="2" style="width: 1170px; margin-right: 30px;">
                                <div class="row">
                                    <div class="article_img col-md-6">
                                        <img src="images/Home_14_03_1024x1024.jpg" alt="Easy-Peasy Way To Add Color  To A&nbsp;Journal"></div>
                                    <div class="blog_wrapper col-md-6">
                                        <span class="blog_date">July 18, 2016</span>
                                        <h3 class="blog_title">
                                            <a href="#">Easy-Peasy Way To Add Color  To A&nbsp;Journal</a>
                                        </h3>
                                        <div class="blog_content">Adding a little color to a journal is easy with watercolor dots, a brush and some water. Contrast or complement with fountain pen ink for a unique twist to doodling in a journal. </div>
                                        <a class="btn blog_btn" href="#">Read more</a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide" data-swiper-slide-index="0" style="width: 1170px; margin-right: 30px;">
                                <div class="row">
                                    <div class="article_img col-md-6">
                                        <img src="images/blog3_1024x1024.jpg" alt="In this case, our services are what you need.">
                                    </div>
                                    <div class="blog_wrapper col-md-6">
                                        <span class="blog_date">July 22, 2016</span>
                                        <h3 class="blog_title">
                                            <a href="#">In this case, our services are what you need.</a>
                                        </h3>
                                        <div class="blog_content">Fortunately, our team will be with you from the moment you enter our online gallery to the day your artwork is delivered.If you are eager to explore and experiment, contact us and we'll make this procedure easier for you. </div>
                                        <a class="btn blog_btn" href="#">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="blog_controls">
                        <div class="swiper-button-prev swiper_btn">
                            <i class="fa fa-angle-left"></i>
                        </div>
                        <div class="swiper-button-next swiper_btn">
                            <i class="fa fa-angle-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            var homepage_blog = new Swiper('#homepage_blog', {
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
                slidesPerView: 1,
            });
        </script>

    </body>
</html>