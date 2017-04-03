<!DOCTYPE html>
<html style="background-color: #f3f3f4;">
   <head>
      <meta charset="UTF-8" />
      <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
      <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
     
      <?php
         if (!class_exists('lessc')) {
             include ('./libs/lessc.inc.php');
         }
         $less = new lessc;
         $less->compileFile('less/380.less', 'css/380.css');
         ?>
      <link href="css/380.css" rel="stylesheet" type="text/css"/>     
   </head>
   <body>
      <div class="type-380">
         <div class="container">
            <div class="main_content">
               <!--TITLE-->
               <div class="col-md-4 col-sm-4 col-xs-12">
                  <h3 class="wd_header">Recent articles</h3>
                  <div class="row list_articles">
                     <div class="col-md-6 col-xs-5">
                        <img src="image/3801.jpg" alt="Installation">
                     </div>
                     <div class="col-md-6 col-xs-7">
                        <div class="article_content">
                           <time class="article_date" datetime="2016-07-22">22 July 2016</time>
                           <h4 class="article_title">
                              <a href="#">In this case, our services are what...</a>
                           </h4>
                           <p class="article_comments">1</p>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </div>
                  <div class="row list_articles">
                     <div class="col-md-6 col-xs-5">
                        <img src="image/3802.jpg" alt="Installation">
                     </div>
                     <div class="col-md-6 col-xs-7">
                        <div class="article_content">
                           <time class="article_date" datetime="2016-07-22">22 July 2016</time>
                           <h4 class="article_title">
                              <a href="#">In this case, our services are what...</a>
                           </h4>
                           <p class="article_comments">1</p>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </div>
                  <div class="row list_articles">
                     <div class="col-md-6 col-xs-5">
                        <img src="image/3803.jpg" alt="Installation">
                     </div>
                     <div class="col-md-6 col-xs-7">
                        <div class="article_content">
                           <time class="article_date" datetime="2016-07-22">22 July 2016</time>
                           <h4 class="article_title">
                              <a href="#">In this case, our services are what...</a>
                           </h4>
                           <p class="article_comments">1</p>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-8 col-sm-8 col-xs-12">
               </div>
            </div>
         </div>
      </div>
   </body>
</html>