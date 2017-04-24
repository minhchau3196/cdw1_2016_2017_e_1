
<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/367.less', 'css/367.css');
        ?>
        <link href="css/367.css" rel="stylesheet" type="text/css" />

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>       
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-367">
            <div class="homepage_blog">
                <div class="container">
                    <h2 class="page_heading">BLOG</h2>
                    <div id="owl-demo" class="owl-carousel">
                        <div class="item">
                            <div class="row">
                                <div class="article_img col-md-6 col-sm-6">
                                    <img src="images/Home_14_03_1024x1024.jpg">
                                </div>
                                <div class="blog_wrapper col-md-6 col-sm-6">
                                    <span class="blog_date">July 18, 2016</span>
                                    <h3 class="blog_title">
                                        <a href="#">Easy-Peasy Way To Add Color  To A&nbsp;Journal</a>
                                    </h3>
                                    <div class="blog_content">Adding a little color to a journal is easy with watercolor dots, a brush and some water. Contrast or complement with fountain pen ink for a unique twist to doodling in a journal. </div>
                                    <a class="btn blog_btn" href="#">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="article_img col-md-6 col-sm-6">
                                    <img src="images/blog3_1024x1024.jpg" alt="In this case, our services are what you need.">
                                </div>
                                <div class="blog_wrapper col-md-6 col-sm-6">
                                    <span class="blog_date">July 22, 2016</span>
                                    <h3 class="blog_title">
                                        <a href="#">In this case, our services are what you need.</a>
                                    </h3>
                                    <div class="blog_content">Fortunately, our team will be with you from the moment you enter our online gallery to the day your artwork is delivered.If you are eager to explore and experiment, contact us and we'll make this procedure easier for you. </div>
                                    <a class="btn blog_btn" href="#">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="article_img col-md-6 col-sm-6">
                                    <img src="images/blog2_1024x1024.jpg" alt="If you are eager to explore and experiment, contact us and we'll make this procedure easier for you."></div>
                                <div class="blog_wrapper col-md-6 col-sm-6">
                                    <span class="blog_date">July 22, 2016</span>
                                    <h3 class="blog_title">
                                        <a href="#">If you are eager to explore and experiment...</a></h3>
                                    <div class="blog_content">If you are eager to explore and experiment, contact us and we'll make this procedure easier for you.If you live in a town with one or two galleries, it may be a challenge to find the artwork that would match... </div>
                                    <a class="btn blog_btn" href="#">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="article_img col-md-6 col-sm-6">
                                    <img src="images/Home_14_03_1024x1024.jpg" alt="Easy-Peasy Way To Add Color  To A&nbsp;Journal"></div>
                                <div class="blog_wrapper col-md-6 col-sm-6">
                                    <span class="blog_date">July 18, 2016</span>
                                    <h3 class="blog_title">
                                        <a href="#">Easy-Peasy Way To Add Color  To A&nbsp;Journal</a>
                                    </h3>
                                    <div class="blog_content">Adding a little color to a journal is easy with watercolor dots, a brush and some water. Contrast or complement with fountain pen ink for a unique twist to doodling in a journal. </div>
                                    <a class="btn blog_btn" href="#">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="article_img col-md-6 col-sm-6">
                                    <img src="images/blog3_1024x1024.jpg" alt="In this case, our services are what you need.">
                                </div>
                                <div class="blog_wrapper col-md-6 col-sm-6">
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
            </div>
        </div>

        <script>
            $(document).ready(function () {
                $('#owl-demo').owlCarousel({
                    loop: true,
                    margin: 20,
                    autoPlay: 3000,
                    nav: true,
                    navText: ['<', '>'],
                    responsive: {
                        0: {
                            items: 1
                        },
                        769: {
                            items: 1
                        },
                        992: {
                            items: 1
                        }
                    }
                })
            });
        </script>

    </body>
</html>