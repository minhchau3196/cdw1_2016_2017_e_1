<!DOCTYPE html>
<html style="background-color: #f3f3f4;">
   <head>
      <meta charset="UTF-8" />
      <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
      <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>      
      <link href="css/swiper.min.css" rel="stylesheet" type="text/css"/>
      <?php
         if (!class_exists('lessc')) {
             include ('./libs/lessc.inc.php');
         }
         $less = new lessc;
         $less->compileFile('less/378.less', 'css/378.css');
         ?>
      <link href="css/378.css" rel="stylesheet" type="text/css"/>  
      <script src="js/swiper.min.js" type="text/javascript"></script>
   </head>
   <body>
      <div class="type">
         <div class="main_content">
            <div id="swiper" class="swiper-container swiper-container-horizontal swiper-container-fade">
               <div class="swiper-wrapper">
                  <div class="swiper-slide swiper-slide-duplicate">
                     <a>
                        <img src="image/sld1.jpg" title="" alt="">
                        <div class="slider_caption ">
                           <h2>Up to 50% off</h2>
                           <h3>Jack Richeson Handmade Pastels Sets</h3>
                           <span class="button" data-text="Shop Now">Shop Now</span>
                        </div>
                     </a>
                  </div>
                   <div class="swiper-slide swiper-slide-duplicate">
                     <a>
                        <img src="image/sld2.jpg" title="" alt="">
                        <div class="slider_caption">
                           <h2>Up to 25% off</h2>
                           <h3>Jack Richeson Handmade Pastels Sets</h3>
                           <span class="button" data-text="Shop Now">Shop Now</span>
                        </div>
                     </a>
                  </div>
                   <div class="swiper-slide swiper-slide-duplicate">
                     <a>
                        <img src="image/sld3.jpg" title="" alt="">
                        <div class="slider_caption ">
                           <h2>Up to 40% off</h2>
                           <h3>Jack Richeson Handmade Pastels Sets</h3>
                           <span class="button" data-text="Shop Now">Shop Now</span>
                        </div>
                     </a>
                  </div>
               </div>
                <div class="swiper_controls">
               <div class="container">
                  <div id="swiper_btn_prev" class="swiper_btn">
                     <i class="fa fa-angle-left"></i>
                  </div>
                  <div id="swiper_btn_next" class="swiper_btn">
                     <i class="fa fa-angle-right"></i>
                  </div>
               </div>
                </div>
            </div>
         </div>
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