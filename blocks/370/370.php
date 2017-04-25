<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Gas &amp; Oil Industry HTML Template">
        <meta name="author" content="Gautam Thapar">

        <title>Offshore</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />  

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/370.less', 'css/370.css');
        ?>

        <link href="css/370.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="type-370">
            <div class="section">
                <div class="container">
                    <div class="title-header">
                        <h2 class="title">NEWS AND MEDIA</h2>
                    </div>
                    <div class="title-header1">
                        <h2 class="title1">LATEST FROM BLOG</h2>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="posts-img-box">
                                <div class="blog-date">
                                    <span class="month">JUN</span>
                                    <span class="date">1</span>
                                </div>
                                <a class="hover-effect" href="#">
                                    <img src="images/services-three.jpg" alt="" />
                                </a>
                            </div>
                            <div class="blog-content">
                                <h3><a href="#">SOCIAL RESPONIBILITY</a></h3>
                                <p>By <a href="">Taylor White</a> in Transportation</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="posts-img-box">
                                <div class="blog-date">
                                    <span class="month">JUN</span>
                                    <span class="date">1</span>
                                </div>
                                <a class="hover-effect" href="#">
                                    <img src="images/services-three.jpg" alt="" />
                                </a>
                            </div>
                            <div class="blog-content">
                                <h3><a href="#">SOCIAL RESPONIBILITY</a></h3>
                                <p>By <a href="">Taylor White</a> in Transportation</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="posts-img-box">
                                <div class="blog-date">
                                    <span class="month">JUN</span>
                                    <span class="date">1</span>
                                </div>
                                <a class="hover-effect" href="#">
                                    <img src="images/services-three.jpg" alt="" />
                                </a>
                            </div>
                            <div class="blog-content">
                                <h3><a href="#">SOCIAL RESPONIBILITY</a></h3>
                                <p>By <a href="">Taylor White</a> in Transportation</p>
                            </div>
                        </div>
                    </div>
                   
                    <div class="btnRead">
                        <a href="#" class="btn btn-primary">Read the blog</a>
                    </div>

                </div>
            </div>   
        </div>
    </body>

</html>