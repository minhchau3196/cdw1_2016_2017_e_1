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
         $less->compileFile('less/382.less', 'css/382.css');
         ?>
      <link href="css/382.css" rel="stylesheet" type="text/css"/>     
   </head>
   <body>
      <div class="type-382">
         <div class="container">
            <div class="main_content">
               <!--TITLE-->
               <div class="col-md-4 col-sm-4 col-xs-12">
                  <h3 class="wd_header">Comments</h3>
                  <div class="row list_articles">
                     <i class="fa fa-comment-o item_icon"></i>
                     <span class="item_content">Guys, you rock! 
                         Made a purchase at your store recently. 
                         The order has been shipped and delivered on time. 
                         The...
                     </span>
                     <span class="clearfix"></span>
                     <span class="item_info">
                         <span class="item_author">rob Donnat</span>
                         <time datetime="2016-08-09">
                            <span class="item_date">09 August 2016</span>
                            <span class="item_time">01:43 AM</span>
                         </time>                             
                     </span>
                  </div>
                  <div class="row list_articles list_articles2">
                     <i class="fa fa-comment-o item_icon"></i>
                     <span class="item_content">Having the distressing experience 
                         with some online shops before decided
                         to say ‘’THANK YOU” to all personnel of this store....
                     </span>
                     <span class="clearfix"></span>
                     <span class="item_info">
                         <span class="item_author">rob Donnat</span>
                         <time datetime="2016-08-09">
                            <span class="item_date">09 August 2016</span>
                            <span class="item_time">01:43 AM</span>
                         </time>                             
                     </span>
                  </div>
                 
               </div>
               <div class="col-md-8 col-sm-8 col-xs-12">
               </div>
            </div>
         </div>
      </div>
   </body>
</html>