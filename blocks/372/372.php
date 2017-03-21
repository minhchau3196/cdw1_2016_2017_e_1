
<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

<head>
    <meta charset="UTF-8" />
    <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
    <link href="catalog/view/javascript/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <script src="catalog/view/javascript/bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
    <link href="font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="ionicons.min.css" rel="stylesheet" type="text/css"/>
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
   <div class="type-38-1">
    <section class="" style="">
        <div class="container">
            <div class="row center-block-sm" style="">
                <div class="col-md-4">
                    <div class="hover-effect"><img src="image/services-large-409x332-1.jpg" title="" alt="TECHNOLOGY &amp; INNOVATION" style="max-height:241px;"></div>
                    <h4 class="services-title-one subtitle">TECHNOLOGY &amp; INNOVATION</h4>
                    <p>Uniquely transform premier infrastructures before functional metrics. Completely mesh sustainable leadership for economically sound sources.â€¦</p>
                    <a class="link" href="#">Read More</a></div>
                <div class="col-md-4">
                    <div class="hover-effect"><img src="image/services-three-409x272-1.jpg" title="" alt="OUR OPERATIONS" style="max-height:241px;"></div>
                    <h4 class="services-title-one subtitle">OUR OPERATIONS</h4>
                    <p>Uniquely transform premier infrastructures before functional metrics. Completely mesh sustainable leadership for economically sound sources.â€¦</p>
                    <a class="link" href="#">Read More</a></div>
                <div class="col-md-4">
                    <div class="hover-effect"><img src="image/services-two-409x272-1.jpg" title="" alt="SOCIAL RESPONIBILITY" style="max-height:241px;"></div>
                    <h4 class="services-title-one subtitle">SOCIAL RESPONIBILITY</h4>
                    <p>Uniquely transform premier infrastructures before functional metrics. Completely mesh sustainable leadership for economically sound sources.â€¦</p>
                    <a class="link" href="#">Read More</a></div>
                
            </div>
        </div>
    </section>
</body>

</html>