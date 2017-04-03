
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
            $less->compileFile('less/372.less', 'css/372.css');
        ?>
    <link href="css/372.css" rel="stylesheet" type="text/css"/>
</head>

<body>
   <div class="type-372">
    <section>
        <div class="container">
            <div class="row center-block-sm">
                <div class="col-md-4 col">
                    <div class="hover-effect">
                        <img src="image/services-two-409x272-1.jpg" title="" alt="TECHNOLOGY &amp; INNOVATION" style="max-height:241px;">
                    </div>
                    <h4 class="services-title-one subtitle">TECHNOLOGY &amp; INNOVATION</h4>
                    <p>Uniquely transform premier infrastructures before functional metrics.
                        Completely mesh sustainable leadership for economically sound sources....</p>
                    <a class="link" href="#">Read More</a>
                </div>
                <div class="col-md-4 col">
                    <div class="hover-effect"><img src="image/services-three-409x272-1.jpg" title="" alt="OUR OPERATIONS" style="max-height:241px;"></div>
                    <h4 class="services-title-one subtitle">OUR OPERATIONS</h4>
                    <p>Uniquely transform premier infrastructures before functional metrics. 
                        Completely mesh sustainable leadership for economically sound sources....</p>
                    <a class="link" href="#">Read More</a></div>
                <div class="col-md-4 col">
                    <div class="hover-effect"><img src="image/services-two-409x272-1.jpg" title="" alt="SOCIAL RESPONIBILITY" style="max-height:241px;"></div>
                    <h4 class="services-title-one subtitle">SOCIAL RESPONIBILITY</h4>
                    <p>Uniquely transform premier infrastructures before functional metrics. 
                        Completely mesh sustainable leadership for economically sound sources....</p>
                    <a class="link" href="#">Read More</a></div>
                
            </div>
        </div>
    </section>
</body>

</html>