<!DOCTYPE html>
<html style="background-color: #f3f3f4;">
   <head>
      <meta charset="UTF-8" />
      <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
      <link href="catalog/view/javascript/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
      <script src="catalog/view/javascript/bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
      <script src="catalog/view/javascript/jquery/jquery-2.1.1.min_1.js" type="text/javascript"></script>
      <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
      <link href="css/ionicons.min.css" rel="stylesheet" type="text/css"/>
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