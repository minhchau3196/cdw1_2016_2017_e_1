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
         $less->compileFile('less/381.less', 'css/381.css');
         ?>
      <link href="css/381.css" rel="stylesheet" type="text/css"/>    
   </head>
   <body>
      <div class="type-381">
         <div class="container">
            <div class="main_content">
               <!--TITLE-->
               <div class="col-md-4 col-sm-4 col-xs-12">
                  <h3 class="wd_header">Tags</h3>
                  <div class="row">
                     <div class="blog_tags">
                        <a href="#">Acrylic Paint</a>
                        <a href="#">Acrylic Paint Set</a>
                        <a href="#">Color Pencils</a>
                        <a href="#">Colorful Oil  Base Pencils</a>
                        <a href="#">Crayons</a>
                        <a href="#">Drawing</a>
                        <a href="#">Painting</a>
                        <a href="#">Pastels</a>
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