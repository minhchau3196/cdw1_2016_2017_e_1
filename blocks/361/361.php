
<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">       
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/361.less', 'css/361.css');
        ?>
        <link href="css/361.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type-361">
            <div class="container"> 
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div id="course-left-sidebar">
                        <div class="course-image-widget">
                            <img src="images/course_01.png" alt="" class="img-responsive">
                        </div><!-- end image widget -->
                        <div class="course-meta">
                            <p class="course-category">Category : <a href="#">Graphic Design</a></p>
                            <hr>
                            <div class="rating">
                                <p>Reviews : &nbsp;
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <a title="" href="#reviews">&nbsp; (3)</a></p>
                            </div><!-- end rating -->
                            <hr>
                            <p class="course-student">Students : 21 Members </p>
                            <hr>
                            <p class="course-time">Perriod : 12 Month </p>
                            <hr>
                            <p class="course-prize">Prize : <i class="fa fa-trophy"></i> 
                                <i class="fa fa-certificate"></i> 
                                <i class="fa fa-shield"></i></p>
                            <hr>
                            <p class="course-instructors">Instructor : <a href="#" title=""><img src="images/student_01.png" class="img-circle" alt=""> John DOE</a>
                            </p>
                            <hr>
                            <p class="course-forum">Course Forum : <a href="#" title="">Web Designers</a></p>
                        </div><!-- end meta -->
                        <div class="course-button">
                            <a href="#" class="btn-primary btn-block">TAKE THIS COURSE</a>
                        </div>              
                    </div>    
                </div>
            </div>
        </div>
    </body>

</html>