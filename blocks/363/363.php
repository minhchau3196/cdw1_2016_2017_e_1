
<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">       
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/363.less', 'css/363.css');
        ?>
        <link href="css/363.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type-363">
            <section class="" style="background-color:#f4f5f8;padding-top:30px;padding-bottom:30px;">
                <div class="container">
                    <div class="row center-block-sm" style="">
                        <div class="col-md-3">
                            <img src="images/hinh/globe.png" class="counter-img" alt="counter">
                            <div class="stats-info">
                                <h4 class="counter">26</h4>
                                <p>Offices Worldwide</p>

                            </div>
                        </div>
                        <div class="col-md-3" style="border-left:1px solid #dee0e5;">
                            <img src="images/hinh/friends.png" class="counter-img" alt="counter">
                            <div class="stats-info">
                                <h4 class="counter">10000</h4>
                                <p>Satisfied Employees</p>

                            </div>
                        </div>
                        <div class="col-md-3" style="border-left:1px solid #dee0e5;">
                            <img src="images/hinh/fire.png" class="counter-img" alt="counter">
                            <div class="stats-info">
                                <h4 class="counter">126</h4>
                                <p>Refineries &amp; Operations</p>

                            </div>
                        </div>
                        <div class="col-md-3" style="border-left:1px solid #dee0e5;">
                            <img src="images/hinh/badge.png" class="counter-img" alt="counter">
                            <div class="stats-info">
                                <h4 class="counter">35</h4>
                                <p>Awards &amp; Recognitions</p>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>