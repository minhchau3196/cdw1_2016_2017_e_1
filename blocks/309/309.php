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
    $less->compileFile('less/309.less', 'css/309.css');
    ?>
    <link href="css/309.css" rel="stylesheet" type="text/css"/>

</head>

<body>

    <div class="type-309">
        <div class="container">
            <div class="row">
                <!--LEFT SIDE BAR-->
                <div class="col-md-4"></div>
                <!--/END LEFT SIDE BAR-->

                <!--RIGHT CONTENTS HOME-->
                <div class="col-md-8">
                    <!--LEFT PARTNERS-->
                    <div class="widget">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2>Đối tác</h2>
                            </div>
                            <div class="crossedbg"></div>
                            
                            <h4><b>Chứng nhận</b></h4>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="partnerlogo">
                                        <a href="#" data-toggle="lightbox" data-title="Microsoft IT Academy">
                                            <img class="img-responsive" src="images/ms.gif">
                                        </a>

                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="partnerlogo">
                                        <a href="#" data-toggle="lightbox" data-title="Cisco Networking Academy">
                                            <img class="img-responsive" src="images/cisco.gif">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <h4><b>Công ty thực tập</b></h4>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="partnerlogo">
                                        <img class="img-responsive" src="images/9e407b891b.png">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="partnerlogo">
                                        <img class="img-responsive" src="images/9e9e60e44e.png">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="partnerlogo">
                                        <img class="img-responsive" src="images/ab645dde3c.png">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="partnerlogo">
                                        <img class="img-responsive" src="images/9e4a5e2c0f.png">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="partnerlogo">
                                        <img class="img-responsive" src="images/9e5de453d8.png">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="partnerlogo">
                                        <img class="img-responsive" src="images/9e6df75452.png">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="partnerlogo">
                                        <img class="img-responsive" src="images/9e73406038.png">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="partnerlogo">
                                        <img class="img-responsive" src="images/9e7f6f17d1.png">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="partnerlogo">
                                        <img class="img-responsive" src="images/9e944c4e1f.png">
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="partnerlogo">
                                        <img class="img-responsive" src="images/logo-3t.png">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="partnerlogo">
                                        <img class="img-responsive" src="images/bk.gif">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="partnerlogo">
                                        <img class="img-responsive" src="images/chanchinh.gif">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="partnerlogo">
                                        <img class="img-responsive" src="images/hk.gif">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="partnerlogo">
                                        <img class="img-responsive" src="images/pnc.gif">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="divider"></div>
                    </div>
                </div>
                <!--/END LEFT PARTNERS-->
            </div>
        </div>
    </div>

</body>