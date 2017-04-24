
<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <meta charset="UTF-8" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type.less', 'css/type.css');
        ?>
        <link href="css/type.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-38-6">
            <section class="" style="background-color:#f4f5f8;padding-top:0px;padding-bottom:0px;">
                <div class="container">
                    <div class="row center-block-sm" style="">
                        <div class="col-md-6">
                            <div class="hovereffect">
                                <a href="#"><img class="size-full wp-image-1424 aligncenter" src="image/ceo.png" alt="ceo" width="474" height="474" ></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="column-wrapper" style="padding-top:45px;padding-bottom:25px;">
                                <span class="label label-default" style="&quot;no&quot;">WORD FROM CEO</span>
                                <h4 class="" style="font-size: 27px; font-weight: bold; font-family: Roboto; line-height: 38px; color: #093eb6; margin-top: 20px; margin-bottom: 20px;">READ THE MESSAGE FROM OUR CEO</h4>
                                <p>Proactively incubate enterprise total linkage without sustainable leadership skills. Monotonectally strategize user-centric interfaces whereas low-risk high-yield materials. Efficiently syndicate web-enabled portals for principle centered partnerships.</p>
                                <p>Proactively whiteboard revolutionary processes after scalable testing procedures. Holisticly reinvent seamless after business.</p>
                                <p><img class="alignnone size-full wp-image-734" src="image/ceo-sign.png" alt="ceo-sign" width="268" height="40"></p>
                                <h4 class="ceo-sign"></h4>
                                <p class="ceo-name">Gregory Walker, CEO</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section> 
        </div>
    </body>
</html>