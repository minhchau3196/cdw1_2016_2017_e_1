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
        $less->compileFile('less/373.less', 'css/373.css');
        ?>
        <link href="css/373.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="type-373">            
            <section class="text-center">  
                <div class="container">
                    <span class="label label-default">DON’T TAKE OUR WORD</span>
                    <h2 class="title-2">CLIENT TESTIMONIAL</h2>

                    <div class="row">
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