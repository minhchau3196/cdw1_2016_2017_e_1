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
    $less->compileFile('less/331.less', 'css/331.css');
    ?>
    <link href="css/331.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Prata" />

</head>

<body>

    <div class="type-331">
        <div class="container">
            <div class="row">
                <!--LEFT ADDRESS-->
                <div class="col-sm-6 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Văn phòng Khoa<br><span>Địa chỉ</span></h2>
                        </div>
                        <div class="crossedbg"></div>
                        <div class="panel-body">
                            <address>
                                <p>
                                    <b>Khoa CNTT<br>
                                        Khu B, Cao đẳng Công nghệ Thủ Đức</b>
                                </p>
                                <p>
                                </p><ul class="itdcadd">
                                    <li>
                                        <i class="fa fa-clock-o fa-lg fa-fw"></i>&nbsp; Thứ 2 đến thứ 6, 7h00 - 11h30, 13h30 - 16h30<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Thứ 7, 7h30 - 11h
                                    </li>
                                    <li>
                                        <i class="fa fa-building fa-lg fa-fw"></i>&nbsp; 53, Võ Văn Ngân, P.Linh Chiểu,<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Q.Thủ Đức, Tp.HCM
                                    </li>
                                    <li>
                                        <i class="fa fa-phone fa-lg fa-fw"></i>&nbsp; (08) 22 158 642
                                    </li>
                                </ul>
                                <p></p>
                            </address>
                            
                            <!--MAP CANVAS-->
                            <div id="map-canvas">

                            </div>
                            <!--MAP CANVAS-->
                            
                        </div>
                    </div>
                    <!--/END LEFT ADDRESS-->

                    <!--RIGHT CONTACTS-->
                    <div class="col-md-6"></div>
                    <!--/END RIGHT CONTACTS-->

                </div>
            </div>
        </div>

</body>