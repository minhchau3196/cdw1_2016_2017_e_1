<!DOCTYPE html>
<html style="background-color: #f3f3f4;">
    <head>
        <meta charset="UTF-8" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/368.less', 'css/368.css');
        ?>
        <link href="css/368.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="type-368">
            <div class="container">
                <div class="row">
                    <!--TITLE-->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                    </div>               
                    <!---TITLE BLOG-->
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <h1 class="page_heading">BLOG<a href="#" target="_blank"></a></h1>
                        <div class="blog_listing__article">
                            <h2 class="article_title">
                                <a href="#">In this case, our services are what you need.</a>
                            </h2>
                            <div class="article_info">
                                <time class="article_date" datetime="2016-07-22">22 Jul 2016</time>
                                <span>David Braun</span>
                                <span>1 Comments</span>
                            </div>
                            <div class="article_body">                    
                                <img src="image/3801.jpg" alt="In this case our services are what you need."/>
                                <div class="article_content rte">
                                    Fortunately, our team will be with you from the moment you enter our online gallery to the day your artwork is delivered.If you are eager to explore and experiment, contact us and we'll...
                                </div>
                            </div>
                            <div class="article_footer">
                                <p class="blog_tags">
                                    <a href="#">Drawing</a>
                                    <a href="#">Painting</a>
                                </p>
                                <a class="btn" href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                    <!---END OF TITLE-->
                </div>
            </div>
        </div>
    </body>
</html>