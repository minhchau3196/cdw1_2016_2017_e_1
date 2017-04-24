<!DOCTYPE html>
<html style="background-color: #f3f3f4;">
   <head>
      <meta charset="UTF-8" />     
      <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>     
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
      <?php
         if (!class_exists('lessc')) {
             include ('./libs/lessc.inc.php');
         }
         $less = new lessc;
         $less->compileFile('less/374.less', 'css/374.css');
         ?>
      <link href="css/374.css" rel="stylesheet" type="text/css"/>
   </head>
   <body>
       <div class="type-374">
           <div class="container">
               <div class="row">
                   <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                       <div class="show show1">
                           <img src="image/hoa.jpg" title="" alt="">
                           <div class="cnt">
                                <h3>Art Technology</h3>
                                <h4>Quilling Starter Kit</h4>
                                <span class="btn">Shop Now</span> 
                           </div>
                       </div>
                   </div>
                   <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
                       <div class="show show2">
                           <img src="image/pencil.jpg" title="" alt="">
                           <div class="cnt">
                                <h3>Drawing</h3>
                                <h4>Colorful Oil  Base Pencils</h4>
                                <span class="btn">Shop Now</span> 
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </body>
</html>