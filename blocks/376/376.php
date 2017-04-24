<!DOCTYPE html>
<html style="background-color: #f3f3f4;">
   <head>
      <meta charset="UTF-8" />
     
      <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
      <?php
         if (!class_exists('lessc')) {
             include ('./libs/lessc.inc.php');
         }
         $less = new lessc;
         $less->compileFile('less/376.less', 'css/376.css');
         ?>
      <link href="css/376.css" rel="stylesheet" type="text/css"/>
   </head>
   <body>
      <div class="type-376">
         <div class="container">
             <div class="content_">
                <h2>Oil Paint Set Artist Quality Art Paints</h2>
                <a class="btn" href="#">Shop Now</a>
            </div>
         </div>
      </div>
   </body>
</html>