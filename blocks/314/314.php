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
    $less->compileFile('less/314.less', 'css/314.css');
    ?>
    <link href="css/314.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>       
</head>

<body>
    <div class="type-314">
        <div class="container teacher">
            <div class="row">
                <!--FACULTY OFFICE (văn phòng khoa)--> 
                <div class="faculty-office">
                    <div class="col-sm-4 col-md-4">
                        <div class="widget html">
                            <div class="panel-heading">
                                <h2>Văn phòng khoa</h2>
                            </div>
                            <p>Trưởng khoa: Võ Thành Trung</p>
                            <p>
                                Thiết lập lịch trình hoạt động của khoa CNTT trong năm học như: thời khóa biểu, lịch thi, đăng ký giảng giạy, ...
                            </p>	                           
                        </div>
                    </div>  
                    <!--LIST TEACHER OF FACULTY OFFICE-->
                    <div class="col-sm-8 col-md-8 prof_list">
                        <div class="row">
                            <div class="col-xs-6 col-sm-3 placeholder profview">
                                <div class="profview_thumb">
                                    <div class="profview_thumb_wrap">
                                        <img src="images/VoThanhTrung.jpg" alt=""/>
                                    </div>
                                </div>
                                <h4 class="prof_name"><a href="#">Võ Thành Trung</a></h4>
                                <span class="prof_title">Trưởng khoa</span>
                            </div>
                            <div class="col-xs-6 col-sm-3 placeholder profview">
                                <div class="profview_thumb">
                                    <div class="profview_thumb_wrap">
                                        <img src="images/TieuKimCuong.jpg" alt=""/>
                                    </div>
                                </div>
                                <h4 class="prof_name"><a href="#">Tiêu Kim Cương</a></h4>
                                <span class="prof_title">Phó khoa</span>
                            </div>
                            <div class="col-xs-6 col-sm-3 placeholder profview">
                                <div class="profview_thumb">
                                    <div class="profview_thumb_wrap">
                                        <img src="images/NguyenHongLan.png" alt=""/>
                                    </div>
                                </div>
                                <h4 class="prof_name"><a href="#">Nguyễn Hồng Lân</a></h4>
                                <span class="prof_title">Nhân viên</span>
                            </div>
                            <div class="col-xs-6 col-sm-3 placeholder profview">
                                <div class="profview_thumb">
                                    <div class="profview_thumb_wrap">
                                        <img src="images/DongThiHoan.jpg" alt=""/>
                                    </div>
                                </div>
                                <h4 class="prof_name"><a href="#">Đồng Thị Hoan</a></h4>
                                <span class="prof_title">Nhân viên</span>
                            </div>
                        </div>
                    </div>
                    <!--END LIST TEACHER OF FACULTY OFFICE-->
                </div>
                <!--END FACULTY OFFICE-->
            </div>   
        </div>
    </div>
</body>

