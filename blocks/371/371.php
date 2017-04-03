<html lang="en" class="no-js"><head>
        <meta charset="utf-8">
        <title>Offshore</title>        

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/371.less', 'css/371.css');
        ?>
        <link href="css/371.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="type-371">            
            <section>
                <div class="container">
                    <div class="row center-block-sm">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <span class="label-default" style="&quot;no&quot;">THE COMPANY</span>
                            <h4>Interactively empower diverse imperatives after prospective convergence.</h4>
                            <p>Assertively productize efficient partnerships through customer directed supply chains.
                                Continually maintain process-centric catalysts for change via backward compatible value.</p>
                            <div class="btn1">
                                <a href="#" class="btn-primary">READ OUR MISSION</a>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="company-image">
                                <div class="img-left hover-effect">
                                    <img src="images/company-image2.jpg" alt="Company Image">
                                </div>
                                <div class="img-right hover-effect">
                                    <img src="images/company-image1.jpg" alt="Company Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </body>
</html>