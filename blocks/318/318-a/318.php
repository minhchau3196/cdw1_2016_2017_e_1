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
    $less->compileFile('less/318.less', 'css/318.css');
    ?>
    <link href="css/318.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>       
</head>

<body>
    <div class="type-318">
        <div class="container teacher">
            <div class="row">
                <!--COMPUTER NETWORK (MẠNG MÁY TÍNH)-->
                <div class="col-sm-4 col-md-4">
                    <div class="widget html">	
                        <div class="panel-heading">
                            <h2><span>bộ môn</span><br>Mạng máy tính</h2>
                        </div>
                        <p>
                                Trưởng bộ môn: Lê Diên Tâm
                        </p>
                        <p>Sinh viên có khả năng nghiên cứu, thiết kế, phát triển và triển khai các ứng dụng về các công nghệ Mạng máy tính như cài đặt, quản trị, khắc phục sự cố hệ thống mạng máy tính; khai thác hiệu quả các dịch vụ mạng, phát triển các dịch vụ truyền thông trên mạng Internet, mạng truyền thông di động, Linux và phần mềm nguồn mở, an toàn thông tin trên mạng.
                Sau khi tốt nghiệp, sinh viên có thể tham gia vào các bộ phận quản trị hệ thống mạng của các công ty, Sở, Ban, Ngành và các Trung tâm tin học trong cả nước. 
                        </p>
                    </div>

                </div>
                <!--LIST TEACHER OF COMPUTER NETWORK-->
                <div class="col-sm-8 col-md-8 prof_list">
                    
                </div>
                <!--END LIST TEACHER OF COMPUTER NETWORK-->
                <!--END COMPUTER NETWORK-->
            </div>
        </div>
    </div>
</body>

