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
    $less->compileFile('less/302.less', 'css/302.css');
    ?>
    <link href="css/302" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="js/302.js" type="text/javascript"></script>
</head>

<body>
    <div class="type-302">
         <!--SLIDE SHOW-->
         <div class="container slideshow">
             <div class="row">
                 <!--BANNER SLIDE SHOW-->
                     <div class="carousel slide" id="myCarousel1">
                      <div class="carousel-inner">
                        <div class="item active">
                            <a href="#">
                                <img src="images/banner3.jpg" alt=""/>
                            </a>  
                            <div class="carousel-caption">         
                                <h2>Ra mắt<br/><span>Logo Khoa CNTT</span></h2>
                            </div>

                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="images/banner2.jpg" alt=""/>
                            </a>       
                            <div class="carousel-caption">         
                                <h2><span>Chào mừng Tân Sinh viên</span></br> Khóa 2016</h2>
                            </div>

                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="images/banner1.jpg" alt=""/>
                            </a>    
                            <div class="carousel-caption">         
                                <h2><span>Khoa CNTT</span><br>Trường CĐ Công Nghệ Thủ Đức</h2>
                            </div>

                        </div>                                          
                      </div>
                       <a class="slider-control left" href="#myCarousel1" data-slide="prev">&lt;</a>      
                        <a class="slider-control right" href="#myCarousel1" data-slide="next">&gt;</a>
                     </div>

                 <!--END BANNER SLIDE SHOW-->
             </div>
             <div class="clear"></div>
         </div>
         <!--END SLIDE SHOW-->
         <div class="clear"></div>
    </div>
</body>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.js" type="text/javascript"></script>