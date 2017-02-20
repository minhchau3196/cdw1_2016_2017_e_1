<!DOCTYPE html>

<html >

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
        $less->compileFile('less/course-faqs.less', 'css/course-faqs.css');
        ?>
        <link href="css/course-faqs.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <section class="white section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h4>Friendly Asked Questions</h4>
                            <p>The most frequently asked questions about LearnPLUS are listed below.<br>
                            If you want to ask a question at you, please contact us.</p>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 first">
                        <div class="question-answer">
                            <i class="fa fa-question-circle alignleft"></i>
                            <h4>The LearnPLUS is 100% Free?</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        </div><!-- end dmbox -->
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 last">
                        <div class="question-answer">
                            <i class="fa fa-question-circle alignleft"></i>
                            <h4>When I get Payment If I am a Teacher?</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        </div><!-- end dmbox -->
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 first">
                        <div class="question-answer">
                            <i class="fa fa-question-circle alignleft"></i>
                            <h4>How Can I Login or Open New Account?</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.y text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.  </p>
                        </div><!-- end dmbox -->
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 last">
                        <div class="question-answer">
                            <i class="fa fa-question-circle alignleft"></i>
                            <h4>How Can I Start New Course without Payment?</h4>
                            <p>Lorem Ipsum is simply dummy when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        </div><!-- end dmbox -->
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 first">
                        <div class="question-answer">
                            <i class="fa fa-question-circle alignleft"></i>
                            <h4>The LearnPLUS is 100% Free?</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown prinok a galley of type and scrambled it to make a type specimen book. ter took a galley of type and scrambled it to make a type specimen book. </p>
                        </div><!-- end dmbox -->
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 last">
                        <div class="question-answer">
                            <i class="fa fa-question-circle alignleft"></i>
                            <h4>When I get Payment If I am a Teacher?</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        </div><!-- end dmbox -->
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 first">
                        <div class="question-answer">
                            <i class="fa fa-question-circle alignleft"></i>
                            <h4>How Can I Login or Open New Account?</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.y text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.  </p>
                        </div><!-- end dmbox -->
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 last">
                        <div class="question-answer">
                            <i class="fa fa-question-circle alignleft"></i>
                            <h4>How Can I Start New Course without Payment?</h4>
                            <p>Lorem Ipsum is simply dummy when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the pnter took a galley of type and scrambled it to make a type specimen book. </p>
                        </div><!-- end dmbox -->
                    </div>


                </div><!-- end row -->

                <hr class="invis">

                <div class="button-wrapper text-center">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since<br> the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                </div><!-- end button-wrapper -->
            </div><!-- end container -->
        </section>
    </body>

</html>
