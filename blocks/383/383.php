<!DOCTYPE html>
<html style="background-color: #f3f3f4;">
   <head>
      <meta charset="UTF-8" />
      <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
      <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
      <link href="css/ionicons.min.css" rel="stylesheet" type="text/css"/>
      <?php
         if (!class_exists('lessc')) {
             include ('./libs/lessc.inc.php');
         }
         $less = new lessc;
         $less->compileFile('less/383.less', 'css/383.css');
         ?>
      <link href="css/383.css" rel="stylesheet" type="text/css"/>
      <script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
      <script src="js/bootstrap.min.js" type="text/javascript"></script>
   </head>
   <body>
      <div class="type-383">
         <div class="container">
            <div class="main_content">
               <ul class="breadcrumb">
                    <li><a href="/" class="homepage-link" title="Back to the frontpage">Home</a></li>
                    <li><span class="page-title">Blog</span></li>
			
		</ul>
            </div>
         </div>
      </div>
   </body>
</html>