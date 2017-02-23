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
    <div class="type-E-19">
        <div class="container">

            <!-- Course-table Right -->
            
                <div class="course-table">
                    <h4>Course Lessons</h4>
                    <!-- course-table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Lesson Title</th>
                                <th>Time</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><i class="fa fa-play-circle"></i></td>
                                <td><a href="#">Introduction</a></td>
                                <td>12 Min</td>
                                <td><i class="fa fa-check"></i></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-play-circle"></i></td>
                                <td><a href="#">Lesson One - What is Photoshop</a></td>
                                <td>20 Min</td>
                                <td><i class="fa fa-close"></i></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-play-circle"></i></td>
                                <td><a href="#">Lesson Two - How to Use Tools</a></td>
                                <td>41 Min</td>
                                <td><i class="fa fa-close"></i></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-play-circle"></i></td>
                                <td><a href="#">Lesson Three - Creating First Homepage</a></td>
                                <td>15 Min</td>
                                <td><i class="fa fa-close"></i></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-play-circle"></i></td>
                                <td><a href="#">Lesson Four - Understanding Colors</a></td>
                                <td>29 Min</td>
                                <td><i class="fa fa-close"></i></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-play-circle"></i></td>
                                <td><a href="#">Lesson Five - International Sizes</a></td>
                                <td>31 Min</td>
                                <td><i class="fa fa-close"></i></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-question-circle"></i></td>
                                <td><a href="#">Quiz Time - Your First Quiz</a></td>
                                <td>31 Min</td>
                                <td><i class="fa fa-close"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- End Course-Table -->

                <hr class="invis">

            <!-- Button-Course Right -->
                <div class="feedbacks">
                    <p>
                        <a class="btn btn-default btn-block">
                            What our customers said? (3 Feedbacks)
                        </a>
                    </p>
                </div><!-- End Button-Course Right -->
            
        </div>
    </div>
</body>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/jquery.js" type="text/javascript"></script>
