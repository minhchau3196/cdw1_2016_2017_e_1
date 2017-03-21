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
         $less->compileFile('less/type.less', 'css/type.css');
         ?>
      <link href="css/type.css" rel="stylesheet" type="text/css"/>
   </head>
   <body>
      <div class="type-38-4">
         <section class=" text-center" style="background-color:#f4f5f8;">
            <div class="container">
               <span class="label label-default">DON’T TAKE OUR WORD</span>
               <h2 class="title-2" style="font-family: Roboto; margin-top: 20px; margin-bottom: 20px;">CLIENT TESTIMONIAL</h2>
               <div class="clearfix spacer" style="height:50px;"></div>
               <div class="row">
                  <div class="col-md-4">
                     <div class="home-testimonials">
                        <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget leo ac nisi porta consectetur. Duis sit amet ligula turpis. Suspendisse eget hendrerit justo. Suspendisse elementum eleifend arcu in consequat. Nullam imperdiet, mauris a consequat pharetra, quam quam malesuada nisi, non scelerisque.</blockquote>
                        <h4 class="client-name">Calvin Sims</h4>
                        <p class="designation">Marketing Head, ABC Chemicals</p>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="home-testimonials">
                        <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget leo ac nisi porta consectetur. Duis sit amet ligula turpis. Suspendisse eget hendrerit justo. Suspendisse elementum eleifend arcu in consequat. Nullam imperdiet, mauris a consequat pharetra, quam quam malesuada nisi, non scelerisque.</blockquote>
                        <h4 class="client-name">Bertha Gonzales</h4>
                        <p class="designation">Divisional Manager, Corpo Inc.</p>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="home-testimonials">
                        <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget leo ac nisi porta consectetur. Duis sit amet ligula turpis. Suspendisse eget hendrerit justo. Suspendisse elementum eleifend arcu in consequat. Nullam imperdiet, mauris a consequat pharetra, quam quam malesuada nisi, non scelerisque.</blockquote>
                        <h4 class="client-name">Brianna Hernandez</h4>
                        <p class="designation">Founder &amp; CEO, Marine Engineering</p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </body>
</html>