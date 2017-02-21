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
    $less->compileFile('less/type-E-19.less', 'css/type-E-19.css');
    ?>

    <link href="css/type-E-19.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>

</head>

<body>

    <div class="type-301">

        <div class="container type-301-content">

            <!--LIST OF PRODUCTS-->
            <div class="row">

                <!--LIST OF FAVORITES PRODUCTS-->
                <div class="col-md-9 "></div>
                <!--/END LIST OF FAVORITES PRODUCTS-->

                <!--SIDEBAR RIGHT-->
                <div class="col-md-3 "></div>
                <!--/END SIDEBAR RIGHT-->


            </div>
            <!--/END LIST OF PRODUCTS-->

        </div>

    </div>
</body>