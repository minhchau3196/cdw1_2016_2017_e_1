<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/389.less', 'css/389.css');
        ?>
        <link href="css/389.css" rel="stylesheet" type="text/css" />

        <script src="js/jquery/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-389">           
            <div class="container">
                <div class="row">
                    <div class="emphasis-title">
                        <h1>Create Powerful Websites 
                            <span class="font-secondary ls1">
                                <em>Beautifully</em>
                            </span>
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="bottommargin">
                        <p class="lead center divcenter bottommargin-lg" style="max-width: 900px; font-size: 24px;">
                            Truly Multi-Purpose 
                            <span class="font-secondary">&amp;</span> 
                            Powerful Bootstrap based Template with 
                            <span class="color t500">700+</span> 
                            Niche, Multi-Page 
                            <span class="font-secondary">&amp;</span> 
                            One-Page Layouts with 
                            <span class="color t500">1000+</span> 
                            UI Features.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="btnex">
                        <a href="#" class="button button-3d" data-scrollto="#section-niche" data-easing="easeInOutExpo" data-speed="1250">Niche Demos</a>
                        <a href="#" class="button button-3d button-black" data-scrollto="#section-multipage" data-easing="easeInOutExpo" data-speed="1250">Multi-Page Demos</a>
                        <a href="#" class="button button-3d button-white button-light" data-scrollto="#section-onepage" data-easing="easeInOutExpo" data-speed="1250">One-Page Demos</a>
                    </div>                    
                </div>
            </div>
        </div>
    </body>

</html>