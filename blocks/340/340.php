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
    $less->compileFile('less/340.less', 'css/340.css');
    ?>

    <link href="css/340.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery.event.move.js" type="text/javascript"></script>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>

</head>
<body>
    <div class="type-340">

        <!--LIST OF HEADER BAC CAO DANG-->
        <div class="container">

        <!--LIST OF HEADER-->
        <div class="container tuyen-sinh">

            <header class="section-heading">
                <div>
                    <span class="spacer"></span>
                    <h2>BẬC CAO ĐẲNG</h2>
                    <span class="spacer"></span>
                </div>
            </header>
            <!--LIST OF TAB 1-->
            <div class="ready">
                <ul class="tabs tab3">
                    <li>
                        <div class="fold">
                            <h3>Ngành Công nghệ thông tin</h3>
                            <p>Trang bị cho sinh viên kiến thức và kỹ năng để<br>trở thành nhà phát triển phần mềm chuyên<br>nghiệp.</p>
                        </div>
                        <a href="#" class="more">Xem thêm</a>
                    </li>
                    <li>
                        <div class="fold">
                            <h3>Ngành Truyền thông và Mạng máy tính</h3>
                            <p>Sinh viên có khả năng nghiên cứu, thiết kế, phát triển và triển khai các ứng dụng về các công nghệ Mạng máy tính.</p>
                        </div>
                        <a href="#" class="more">Xem thêm</a>
                    </li>
                    <li>
                        <div class="fold">
                            <h3>Ngành Thiết kế Đồ họa</h3>
                            <p>Sinh viên có kiến thức nền tảng và chuyên sâu trong<br>các lĩnh vực thiết kế quảng cáo, phục vụ cho rất nhiều mục đích như: truyền thông, quảng cáo, ...</p>
                        </div>
                        <a href="#" class="more">Xem thêm</a>
                    </li>
                    <div style="clear:both;"></div>
                </ul>
                <!--BAC TRUNG CAP-->
                <header class="section-heading">
                    <div>
                        <span class="spacer"></span>
                        <h2>BẬC TRUNG CẤP CHUYÊN NGHIỆP</h2>
                        <span class="spacer"></span>
                    </div>
                </header>
            </div>
            <!--LIST OF TAB2-->
            <div class="ready">
                <ul class="tabs tab3">
                    <li>
                        <div class="fold">
                            <h3>Ngành Tin học Ứng dụng</h3>
                            <p>Trang bị cho học sinh kiến thức và kỹ năng để làm việc trong lĩnh vực phát triển và kiểm thử phần mềm và web.</p>
                        </div>
                        <a href="#" class="more">Xem thêm</a>
                    </li>
                    <li>
                        <div class="fold">
                            <h3>Ngành Truyền thông và Mạng máy tính</h3>
                            <p>Học sinh có khả năng triển khai các ứng dụng về các công nghệ Mạng máy tính như cài đặt, quản trị mạng.</p>
                        </div>
                        <a href="#" class="more">Xem thêm</a>
                    </li>
                    <li>
                        <div class="fold">
                            <h3>Ngành Truyền thông đa phương tiện</h3>
                            <p>Cung cấp các kiến thức về thiết kế đồ họa và công nghệ thông tin đa phương tiện.</p>
                        </div>
                        <a href="#" class="more">Xem thêm</a>
                    </li>
                    <div style="clear:both;"></div>
                </ul>

            </div>
            <!--END OF HEADER-->
        </div>

</body>