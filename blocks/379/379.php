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
         $less->compileFile('less/379.less', 'css/379.css');
         ?>
      <link href="css/379.css" rel="stylesheet" type="text/css"/>     
      
   </head>
   <body>
      <div class="type-379">
         <div class="container">
            <div class="main_content">
               <!--TITLE-->
               <h2 class="page_heading">COLLECTIONS</h2>
               <!--/END TITLE-->                   
               <!--PRODUCT-->
               <div class="col-md-3 col-sm-6 col-xs-6 pad">
                  <div class="collection_img">
                     <a href="#">
                     <img src="image/pro1.png" alt="Installation">
                     </a>
                  </div>
                <div class="collection_info">
                    <h4 class="collection_name"><a href="#">Installation</a></h4>
                    <p class="collection_products">10 products</p>
                    <p class="collection_desc">If you live in a town with one or two galleries, it may be a challe...</p>
                    <a class="btn" href="#">View products</a>
                 </div>
               </div>
               
               <!--/END PRODUCT-->
               <!--PRODUCT-->
               <div class="col-md-3 col-sm-6 col-xs-6 pad">
                  <div class="collection_img">
                     <a href="#">
                     <img src="image/pro2.png" alt="Installation">
                     </a>
                  </div>
                <div class="collection_info">
                    <h4 class="collection_name"><a href="#">Installation</a></h4>
                    <p class="collection_products">10 products</p>
                    <p class="collection_desc">If you live in a town with one or two galleries, it may be a challe...</p>
                    <a class="btn" href="#">View products</a>
                 </div>
               </div>
               
               <!--/END PRODUCT-->
               <!--PRODUCT-->
               <div class="col-md-3 col-sm-6 col-xs-6 pad">
                  <div class="collection_img">
                     <a href="#">
                     <img src="image/pro3.png" alt="Installation">
                     </a>
                  </div>
                <div class="collection_info">
                    <h4 class="collection_name"><a href="#">Installation</a></h4>
                    <p class="collection_products">10 products</p>
                    <p class="collection_desc">If you live in a town with one or two galleries, it may be a challe...</p>
                    <a class="btn" href="#">View products</a>
                 </div>
               </div>
               
               <!--/END PRODUCT-->
               <!--PRODUCT-->
               <div class="col-md-3 col-sm-6 col-xs-6 pad">
                  <div class="collection_img">
                     <a href="#">
                     <img src="image/pro4.png" alt="Installation">
                     </a>
                  </div>
                <div class="collection_info">
                    <h4 class="collection_name"><a href="#">Installation</a></h4>
                    <p class="collection_products">10 products</p>
                    <p class="collection_desc">If you live in a town with one or two galleries, it may be a challe...</p>
                    <a class="btn" href="#">View products</a>
                 </div>
               </div>
               
               <!--/END PRODUCT-->
            </div>
         </div>
      </div>
   </body>
</html>