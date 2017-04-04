<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/390.less', 'css/390.css');
        ?>
        <link href="css/390.css" rel="stylesheet" type="text/css"/>

    </head>

    <body>
        <div class="type-390">
            <section class="" style="">
                <div class="container">
                    <div class="row center-block-sm" style="">
                        <div class="col-md-6">
                            <h2 class="process-title title-2">OUR PROCESS</h2>
                            <h4 class="process-subtitle subtitle-2">Interactively empower diverse imperatives after prospective convergence.</h4>
                            <p>Interactively fashion functional action items after 24/365 results. Dynamically redefine world-class metrics without leading-edge markets. Progressively orchestrate enabled “outside the box” thinking via scalable quality vectors. Objectively unleash optimal core competencies.</p>
                            <a href="#" id="btn-1349-57" class="btn btn-primary">Read the story</a>
                        </div>
                        <div class="col-md-6">
                            <div class="skillbar-title">FEUL AND MISCELLANEOUS</div>
                            <div class="skillbar" data-percent="46%">
                                <div class="skillbar-bar" style="width: 46%;"></div>
                                <div class="skill-bar-percent">46%</div>
                            </div>
                            <div class="skillbar-title">LIQUID CHEMICALS</div>
                            <div class="skillbar" data-percent="78%">
                                <div class="skillbar-bar" style="width: 78%;"></div>
                                <div class="skill-bar-percent">78%</div>
                            </div>
                            <div class="skillbar-title">MONOMERS / POLYMERS</div>
                            <div class="skillbar" data-percent="70%">
                                <div class="skillbar-bar" style="width: 70%;"></div>
                                <div class="skill-bar-percent">70%</div>
                            </div>
                            <div class="skillbar-title">ISOCYANATE</div>
                            <div class="skillbar" data-percent="80%">
                                <div class="skillbar-bar" style="width: 80%;"></div>
                                <div class="skill-bar-percent">80%</div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>