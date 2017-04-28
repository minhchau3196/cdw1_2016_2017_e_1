<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>              
        <link href="css/swiper.min.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/27.less', 'css/27.css');
        ?>  
        <link href="css/27.css" rel="stylesheet" type="text/css"/>
        <script src="js/swiper.min.js" type="text/javascript"></script>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>  
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-11">             
            <div class="type-1">
                <div class="container">
                    <div class="show-img">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <img src="images/phone1.png">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <h2>Discover new adventures</h2>
                            <p>Cùng tải trọn bộ sưu tập hình nền 
                                điện thoại đẹp nhất cho dế yêu của mình.
                                Hình nền điện thoại đẹp cá tính, 
                                hình nền điện thoại độc nhất ...</p>
                            <div class="row">
                                <div class="btn btn1">Buy Now</div>
                                <div class="btn btn2">Find Out More</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            <div class="clearfix"></div>
            <!--MENU-->
            <div class="container top-menu">
                <!--LOGO-->
                <div class="logo">
                    <a href="#">
                        <img src="images/2.jpg" alt=""/>
                    </a>
                </div>
                <!--END LOGO-->

                <!--MAIN MENU-->
                <div class="">
                    <span class="fa fa-navicon btn-menu" data-toggle="collapse" data-target=".collapse-top-menu"></span>
                    <div class="clear"></div>
                </div>

                <div class="navbar-collapse">
                    <ul class="menu nav navbar-nav navbar-right collapse collapse-top-menu">
                        <li class="item active"><a href="#">home</a></li>
                        <li class="item"><a href="#">about us</a></li>
                        <li class="item"><a href="#">page</a></li>
                        <li class="item"><a href="#">Asus</a></li>
                        <li class="item"><a href="#">Quiz</a></li>
                    </ul>
                </div>
                <!--END MAIN MENU-->              
            </div> 
            <div class="clearfix"></div>
            <div class="type-2">
                <div class="container">
                    <h2>Services</h2>
                    <p class="read">Synonyms for thematic at Thesaurus.com with free 
                        online thesaurus, antonyms, and definitions. 
                        Dictionary and Word of the Day. ... 
                        Thematic elaboration is only</p>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <i class="fa fa-television"></i>
                            <h3>web developer</h3>
                            <p> Synonyms for thematic at Thesaurus.com with free 
                                online thesaurus, antonyms, and definitions. 
                                Dictionary and Word of the Day. ... 
                                Thematic elaboration is only</p>
                            <div class="btn">Read More</div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <img src="images/col2.JPG" alt=""/>
                            <h3>web developer</h3>
                            <p> Synonyms for thematic at Thesaurus.com with free 
                                online thesaurus, antonyms, and definitions. 
                                Dictionary and Word of the Day. ... 
                                Thematic elaboration is only</p>
                            <div class="btn">Read More</div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <i class="fa fa-file-text-o"></i>                        
                            <h3>web developer</h3>
                            <p> Synonyms for thematic at Thesaurus.com with free 
                                online thesaurus, antonyms, and definitions. 
                                Dictionary and Word of the Day. ... 
                                Thematic elaboration is only</p>
                            <div class="btn">Read More</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="type-3">
                <div class="line"></div>
                <div class="container">
                    <div class="row">                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <h2>Mobile Ready</h2>
                            <p>Synonyms for thematic at Thesaurus.com with 
                                free online thesaurus, antonyms, and definitions.
                                Dictionary and Word of the Day. ... Thematic elaboration is only</p>
                            <div class="row">
                                <div class="btn btn1">
                                    BUY IT
                                </div>
                                <div class="btn btn2">
                                    GET FREE
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <img src="images/dienthoai.png" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="type-4">               
                <div class="container">
                    <h2>we do it right</h2>
                    <p class="dep">Synonyms for thematic at Thesaurus.com with 
                        free online thesaurus, antonyms, and definitions.
                        Dictionary and Word of the Day. ... 
                        Thematic elaboration is only... Synonyms for thematic at Thesaurus.com with 
                        free online thesaurus, antonyms,</p>
                    <h3>Our criteria team</h3>
                    <div class="line"></div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="kcl">
                                <div class="row nv1">
                                    <div class="seo">SEO</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <h4>John Henry/Developer</h4>
                                        <p>Synonyms for thematic at Thesaurus.com with 
                                            free online thesaurus</p>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <img src="images/nv1.jpg" alt=""/>
                                    </div>
                                    <div class="desion">DESION</div>                                
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 nvb">
                            <div class="kcr">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <h4>John Henry/Developer</h4>
                                        <p>Synonyms for thematic at Thesaurus.com with 
                                            free online thesaurus</p>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <img src="images/nv3.jpg" alt=""/>
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <h4>John Henry/Developer</h4>
                                        <p>Synonyms for thematic at Thesaurus.com with 
                                            free online thesaurus</p>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <img src="images/nv2.jpg" alt=""/>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>         
    </body>
</html>