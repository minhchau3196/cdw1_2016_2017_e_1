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
         $less->compileFile('less/375.less', 'css/375.css');
         ?>
      <link href="css/375.css" rel="stylesheet" type="text/css"/>
   </head>
   <body>
      <div class="type">
         <div class="container">
            <div class="featured_items">
               <div class="row">
                  <h2 class="page_heading">Featured Items</h2>                  
                     <div class="col-md-4 col-sm-4 col-xs-12">
                           <div class="product_wrapper">
                              <div class="col-md-6 col-sm-6 col-xs-6 product_img">  
                                 <a href="#">
                                    <img src="image/375-1.png" alt="Acrylic paint kit">
                                 </a>   
                              </div>
                              <div class="col-md-6 col-sm-6 col-xs-6 product_info">
                                 <div class="product_name">
                                    <a href="#">Acrylic paint kit</a>
                                 </div>
                                 <div class="product_price">                       
                                    <span class="money" data-currency-usd="$30.00">$30.00</span> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     <div class="col-md-4 col-sm-4 col-xs-12">
                           <div class="product_wrapper show2">
                              <div class="col-md-6 col-sm-6 col-xs-6 product_img">  
                                 <a href="#">
                                 <img src="image/375-2.png" alt="Acrylic paint kit">
                                 </a>   
                              </div>
                              <div class="col-md-6 col-sm-6 col-xs-6 product_info">
                                 <div class="product_name">
                                    <a href="#">Art wood art set</a>
                                 </div>
                                 <div class="product_price">
                                    <span class="money compare-at-price" data-currency-usd="$20.00">$20.00</span>
                                    <span class="money" data-currency-usd="$12.00">$12.00</span> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     <div class="col-md-4 col-sm-4 col-xs-12">
                           <div class="product_wrapper">
                              <div class="col-md-6 col-sm-6 col-xs-6 product_img">  
                                 <a href="#">
                                 <img src="image/375-3.png" alt="Acrylic paint kit">
                                 </a>   
                              </div>
                              <div class="col-md-6 col-sm-6 col-xs-6 product_info">
                                 <div class="product_name">
                                    <a href="/#">Rembrandt soft pastels for artists 300h60p</a>
                                 </div>
                                 <div class="product_price">
                                    <span class="money" data-currency-usd="$30.00">$30.00</span> 
                                 </div>
                              </div>
                           </div>
                        </div>
                 
               </div>
            </div>
         </div>
      </div>
   </body>
</html>