
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
        $less->compileFile('less/362.less', 'css/362.css');
        ?>
        <link href="css/362.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type-362">
            <section class="" style="background-color:#f4f5f8;padding-top:30px;padding-bottom:30px;">
                <div class="container">
                    <div class="row center-block-sm" style="">
                        <div class="col-md-2">
                            <h4 class="subtitle" style="margin: 0; line-height: 48px;">Quick Links</h4>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-secondary btn-normal btn-block">Careers</a>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-secondary btn-normal btn-block">Contact</a>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-secondary btn-normal btn-block">Market Info</a>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-secondary btn-normal btn-block">Technology</a>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-secondary btn-normal btn-block">Latest News</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>