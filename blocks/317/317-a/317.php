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
    $less->compileFile('less/317.less', 'css/317.css');
    ?>
    <link href="css/317.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>     
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    
</head>

<body>
    <div class="type-317">
        <div class="container teacher">
            <div class="row">
                <!--GRAPHICS (ĐỒ HỌA)-->
                <div class="col-sm-4 col-md-4">
                    <div class="widget html">
                        <div class="panel-heading">
                            <h2><span>bộ môn</span><br>Đồ họa</h2>
                            </div>
                        <p>
                                Trưởng bộ môn: Trần Thị Minh Sa
                        </p>
                        <p>
                Giảng dạy các môn học của chuyên ngành thiết kế đồ họa và công nghệ thông tin đa phương tiện như Photoshop, Illustrator, Corel, 3Dmax, Xử lý phim, Kỹ thuật in ấn..
                Kiến thức và kỹ năng được hình thành vững chắc hệ thống bài tập lớn, đồ án môn học, các chuyên đề về ứng dụng đồ họa trong thực tế không những giúp sinh viên tác phong chuyên nghiệp trong xử lý đồ họa mà còn có khả năng đáp ứng nhu cầu nhân lực trình độ cao của ngành đồ họa trong nước.
                        </p>	
                    </div>

                </div>
                <!--LIST TEACHER OF GRAPHICS-->
                <div class="col-sm-8 col-md-8 prof_list">
                    
                </div>
                <!--END LIST TEACHER OF GRAPHICS-->
                <!--END GRAPHICS-->
            </div>
        </div>
    </div>
</body>

