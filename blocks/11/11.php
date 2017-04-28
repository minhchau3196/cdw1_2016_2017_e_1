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
        $less->compileFile('less/11.less', 'css/11.css');
        ?>  
        <link href="css/11.css" rel="stylesheet" type="text/css"/>
        <script src="js/swiper.min.js" type="text/javascript"></script>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>  
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-11">             
            <!--MENU-->
            <div class="container top-menu">
                <!--LOGO-->
                <div class="logo">
                    <a href="#">
                        <div class="site-description">chicago travel agency</div>
                        Bon voyage
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
                <div id="swiper" class="swiper-container swiper-container-horizontal swiper-container-fade">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide swiper-slide-duplicate">
                            <a>
                                <img src="images/banner.jpg" alt=""/>                                
                                <div class="slider_caption ">                                    
                                    <h3>Jack Richeson Handmade Pastels Sets</h3>                                   
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate">
                            <a>
                                <img src="images/banner1.jpg" alt=""/>                                
                                <div class="slider_caption">                                   
                                    <h3>Jack Richeson Handmade Pastels Sets</h3>                                    
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate">
                            <a>
                                <img src="images/banner3.jpg" alt=""/>
                                <div class="slider_caption ">                                  
                                    <h3>Jack Richeson Handmade Pastels Sets</h3>                                    
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper_controls">
                        <div class="container">
                            <div id="swiper_btn_prev" class="swiper_btn">
                                <i class="fa fa-long-arrow-left"></i>
                            </div>
                            <div id="swiper_btn_next" class="swiper_btn">
                                <i class="fa fa-long-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="type-3">
                <div class="container">
                    <h1>Welcome to Bon Haiwai</h1>
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class="read">
                                <p>
                                    Theo số liệu của Tổng cục Thống kê, trong tháng 4/2017,
                                    lượng khách quốc tế đến Việt Nam tiếp tục tăng trưởng tốt,
                                    ước đạt 1.071.650 lượt, tăng 34,0% so với cùng kỳ năm 2016. 
                                    Đây là tháng thứ 4 liên tiếp trong năm 2017, 
                                    lượng khách quốc tế ...
                                </p>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-5 col-xs-12">
                            <div class="read">
                                <p>
                                    Theo số liệu của Tổng cục Thống kê, trong tháng 4/2017,
                                    lượng khách quốc tế đến Việt Nam tiếp tục tăng trưởng tốt,
                                    ước đạt 1.071.650 lượt, tăng 34,0% so với cùng kỳ năm 2016. 
                                    Đây là tháng thứ 4 liên tiếp trong năm 2017, 
                                    lượng khách quốc tế ...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="imgbeach">
                                <img src="images/2.jpg" alt=""/>
                            </div>
                            <div class="tours">
                                <h3>Tours guide</h3>
                                <h5>from <span>&#36;</span>350</h5>
                                <p>Khung ảnh bãi biển là hiệu ứng mang 
                                    đến sắc màu lãng mạn cho bức ảnh của mọi, 
                                    cũng như gắn kết bức hình với thiên nhiên
                                    thật ấn tượng. ...</p>
                                <div class="readmore">                                    
                                    Read more
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="imgbeach">
                                <img src="images/images2.jpg" alt=""/>
                            </div>
                            <div class="tours">
                                <h3>Tours guide</h3>
                                <h5>from <span>&#36;</span> 450</h5>
                                <p>Khung ảnh bãi biển là hiệu ứng mang 
                                    đến sắc màu lãng mạn cho bức ảnh của mọi, 
                                    cũng như gắn kết bức hình với thiên nhiên
                                    thật ấn tượng. ...</p>
                                <div class="readmore">
                                    Read more
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="imgbeach">
                                <img src="images/images.jpg" alt=""/>                            
                            </div>
                            <div class="tours">
                                <h3>Tours guide</h3>
                                <h5>from <span>&#36;</span> 550</h5>
                                <p>Khung ảnh bãi biển là hiệu ứng mang 
                                    đến sắc màu lãng mạn cho bức ảnh của mọi, 
                                    cũng như gắn kết bức hình với thiên nhiên
                                    thật ấn tượng. ...</p>
                                <div class="readmore">
                                    Read more
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="type-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-xs-12 col-sm-3">                            
                            <div class="tp1">    
                                <span class="fa fa-file-text-o cherry-icon   icon-298"></span>
                                <div class="view"> 16 </div>
                                <div class="vread">Mount city</div>
                                <p>Những thành phố này nổi tiếng với những 
                                    khu phố cổ, di sản cũng như là một đô thị văn minh,
                                    sáng tạo và có vai trò quan trọng về văn hoá, 
                                    kinh tế trong sự phát triển của đất nước.</p>
                                <div class="readmore"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-12 col-sm-3">
                            <div class="tp1">
                                <span class="fa fa-users cherry-icon   icon-221"></span>
                                <div class="view"> 365 </div>
                                <div class="vread">Mount city</div>
                                <p>Những thành phố này nổi tiếng với những 
                                    khu phố cổ, di sản cũng như là một đô thị văn minh,
                                    sáng tạo và có vai trò quan trọng về văn hoá, 
                                    kinh tế trong sự phát triển của đất nước.</p>
                                <div class="readmore"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-12 col-sm-3">
                            <div class="tp1">    
                                <span class="fa fa-file-text-o cherry-icon   icon-298"></span>
                                <div class="view"> 1% </div>
                                <div class="vread">Mount city</div>
                                <p>Những thành phố này nổi tiếng với những 
                                    khu phố cổ, di sản cũng như là một đô thị văn minh,
                                    sáng tạo và có vai trò quan trọng về văn hoá, 
                                    kinh tế trong sự phát triển của đất nước.</p>
                                <div class="readmore"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 ">
                            <div class="tp1">    
                                <span class="fa fa-file-text-o cherry-icon   icon-298"></span>
                                <div class="view"> 167 </div>
                                <div class="vread">Mount city</div>
                                <p>Những thành phố này nổi tiếng với những 
                                    khu phố cổ, di sản cũng như là một đô thị văn minh,
                                    sáng tạo và có vai trò quan trọng về văn hoá, 
                                    kinh tế trong sự phát triển của đất nước.</p>
                                <div class="readmore"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="type-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-xs-12 col-sm-4">
                            <div class="tp1">                            
                                <h1>Transite tracker</h1>
                                <h3>Bạn có muốn đi du lịch không, hãy thật thư giãn trong mùa hè này?</h3>
                                <h3 class="phone">+084123456</h3>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12 col-sm-4">
                            <div class="tp1">                            
                                <div class="row">
                                    <h3 class="travel">Family travel</h3>
                                    <p>Những thành phố này nổi tiếng với những khu phố cổ, 
                                        di sản cũng như là một đô thị văn minh, 
                                        sáng tạo và có vai trò quan trọng về văn hoá</p>
                                </div>
                                <div class="row">
                                    <h3 class="travel">Visit City</h3>
                                    <p>Những thành phố này nổi tiếng với những khu phố cổ, 
                                        di sản cũng như là một đô thị văn minh, 
                                        sáng tạo và có vai trò quan trọng về văn hoá</p>
                                </div>
                                <div class="row">
                                    <h3 class="travel">Tours guide</h3>
                                    <p>Những thành phố này nổi tiếng với những khu phố cổ, 
                                        di sản cũng như là một đô thị văn minh, 
                                        sáng tạo và có vai trò quan trọng về văn hoá</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12 col-sm-4">
                            <div class="tp1">                            
                                <h3 class="travel">Nơi nào lý tưởng cho mùa hè?</h3>
                                <a class="travel">Bạn muốn đi đâu?</a><br>
                                <a class="travel">Nhật Bản mùa hè này?</a><br>
                                <a class="travel">Bạn muốn đi đâu?</a><br>
                                <a class="travel">Bạn muốn đi đâu?</a><br>
                                <a class="travel">Bạn muốn đi đâu?</a><br>
                                <a class="travel">Bạn muốn đi đâu?</a><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="type-6">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-xs-12 col-sm-7">                        
                        </div>
                        <div class="col-md-5 col-xs-12 col-sm-5"> 
                            <h1>USA<br>
                                big tours</h1>
                            <div class="date"> 12 city, 42 country, 10 day</div>
                            <p>Những thành phố này nổi tiếng với những khu phố cổ,
                                di sản cũng như là một đô thị văn minh,
                                sáng tạo và có vai trò quan trọng về văn hoá, 
                                kinh tế trong sự phát triển của đất nước</p>
                            <div class="btn">Click here <i class="fa fa-chevron-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="type-7">
                <div id="map-canvas">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d501703.0896138455!2d106.41416349165823!3d10.768708518045173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529292e8d3dd1%3A0xf15f5aad773c112b!2zSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1493279887164" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen>
                        
                    </iframe>
                </div>
            </div>
            <div class="clearfix"></div>
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-xs-12 col-sm-4"> 
                            <a class="footer-logo-link" href="#" rel="home">Bon voyage</a>
                            <div class="site-info">© 2017 | <a href="#">Privacy Policy</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-12 col-sm-4">    
                            <div class="call">Call us:<br>
                                +012345678
                                <p>53 Võ Văn Ngân, P.Bình Thọ, Q.Thủ Đức, TPHCM</p>
                            </div>                            
                        </div>
                        <div class="col-md-6 col-xs-12 col-sm-6"> 
                            <a href="#" class="link"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="link"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="link"><i class="fa fa-linkedin"></i></a>
                            <a href="#" class="link"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </footer>
        </div> 
        <script>
            var swiper = new Swiper('.swiper-container', {
                effect: 'fade',
                autoplay: 5000,
                speed: 500,
                nextButton: '#swiper_btn_next',
                prevButton: '#swiper_btn_prev'

            });

        </script>
    </body>
</html>