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
        $less->compileFile('less/course-forums.less', 'css/course-forums.css');
        ?>
        <link href="css/course-forums.css" rel="stylesheet" type="text/css" />



    </head>

    <body>
        <div class="course-forums row">
    <div class="col-md-12">
        <div id="bbpress-forums">
            <ul class="bbp-forums">
                <li class="bbp-header">
                    <ul class="forum-titles">
                        <li class="bbp-forum-info">Forums</li>
                        <li class="bbp-forum-topic-count">Topics</li>
                        <li class="bbp-forum-reply-count">Posts</li>
                        <li class="bbp-forum-freshness">Freshness</li>
                    </ul>
                </li><!-- .bbp-header -->

                <li class="bbp-body">       
                    <ul class="forum type-forum">
                        <li class="bbp-forum-info">
                            <img src="images/student_01.png" alt="" class="alignleft img-thumbnail">                         
                                <a class="bbp-forum-title" href="#" title="General">General Forums</a>
                                <div class="bbp-forum-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>                           
                        </li>
                        <li class="bbp-forum-topic-count">21</li>
                        <li class="bbp-forum-reply-count">332</li>
                        <li class="bbp-forum-freshness">
                            <a href="#" title="Reply To: Please NOTIFY YOUR CUSTOMERS of UPDATES">2 days, 7 hours ago</a>
                            <p class="bbp-topic-meta">
                                <span class="bbp-topic-freshness-author">
                                    <a href="#" title="View admin profile" class="bbp-author-avatar" rel="nofollow">
                                        <img alt="" src="images/student_02.png" class="avatar">
                                    </a>&nbsp;<a href="#" title="View admin profile" class="bbp-author-name" rel="nofollow">John DOE</a>
                                </span>
                            </p>
                        </li>
                    </ul><!-- end bbp forums -->
                </li>

                <li class="bbp-body">       
                    <ul class="forum type-forum">
                        <li class="bbp-forum-info">
                            <img src="images/student_02.png" alt="" class="alignleft img-thumbnail">
                            <a class="bbp-forum-title" href="#" title="General">Learning Graphic Design</a>
                            <div class="bbp-forum-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                        </li>
                        <li class="bbp-forum-topic-count">44</li>
                        <li class="bbp-forum-reply-count">134</li>
                        <li class="bbp-forum-freshness">
                            <a href="#" title="Reply To: Please NOTIFY YOUR CUSTOMERS of UPDATES">2 days, 7 hours ago</a>
                            <p class="bbp-topic-meta">
                                <span class="bbp-topic-freshness-author">
                                    <a href="#" title="View admin profile" class="bbp-author-avatar" rel="nofollow">
                                        <img alt="" src="images/student_05.png" class="avatar">
                                    </a>&nbsp;<a href="#" title="View admin profile" class="bbp-author-name" rel="nofollow">Bobby DISTLEs</a>
                                </span>
                            </p>
                        </li>
                    </ul><!-- end bbp forums -->
                </li>

                <li class="bbp-body">       
                    <ul class="forum type-forum">
                        <li class="bbp-forum-info">
                            <img src="images/student_03.png" alt="" class="alignleft img-thumbnail">
                            <a class="bbp-forum-title" href="#" title="General">WordPress Support &amp; Desk Forum</a>
                            <div class="bbp-forum-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                        </li>
                        <li class="bbp-forum-topic-count">3</li>
                        <li class="bbp-forum-reply-count">146</li>
                        <li class="bbp-forum-freshness">
                            <a href="#" title="Reply To: Please NOTIFY YOUR CUSTOMERS of UPDATES">2 days, 7 hours ago</a>
                            <p class="bbp-topic-meta">
                                <span class="bbp-topic-freshness-author">
                                    <a href="#" title="View admin profile" class="bbp-author-avatar" rel="nofollow">
                                        <img alt="" src="images/student_05.png" class="avatar">
                                    </a>&nbsp;<a href="#" title="View admin profile" class="bbp-author-name" rel="nofollow">Bobby DISTLEs</a>
                                </span>
                            </p>
                        </li>
                    </ul><!-- end bbp forums -->
                </li>

                <li class="bbp-body">       
                    <ul class="forum type-forum">
                        <li class="bbp-forum-info">
                            <img src="images/student_03.png" alt="" class="alignleft img-thumbnail">
                            <a class="bbp-forum-title" href="#" title="General">Why LearnPLUS support customers?</a>
                            <div class="bbp-forum-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                        </li>
                        <li class="bbp-forum-topic-count">56</li>
                        <li class="bbp-forum-reply-count">12</li>
                        <li class="bbp-forum-freshness">
                            <a href="#" title="Reply To: Please NOTIFY YOUR CUSTOMERS of UPDATES">2 days, 7 hours ago</a>
                            <p class="bbp-topic-meta">
                                <span class="bbp-topic-freshness-author">
                                    <a href="#" title="View admin profile" class="bbp-author-avatar" rel="nofollow">
                                        <img alt="" src="images/student_05.png" class="avatar">
                                    </a>&nbsp;<a href="#" title="View admin profile" class="bbp-author-name" rel="nofollow">Bobby DISTLEs</a>
                                </span>
                            </p>
                        </li>
                    </ul><!-- end bbp forums -->
                </li>

                <li class="bbp-body">       
                    <ul class="forum type-forum">
                        <li class="bbp-forum-info">
                            <img src="images/student_05.png" alt="" class="alignleft img-thumbnail">
                            <a class="bbp-forum-title" href="#" title="General">Dont' Miss This Topic! Its IMPORTANT</a>
                            <div class="bbp-forum-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                        </li>
                        <li class="bbp-forum-topic-count">41</li>
                        <li class="bbp-forum-reply-count">567</li>
                        <li class="bbp-forum-freshness">
                            <a href="#" title="Reply To: Please NOTIFY YOUR CUSTOMERS of UPDATES">2 days, 7 hours ago</a>
                            <p class="bbp-topic-meta">
                                <span class="bbp-topic-freshness-author">
                                    <a href="#" title="View admin profile" class="bbp-author-avatar" rel="nofollow">
                                        <img alt="" src="images/student_05.png" class="avatar">
                                    </a>&nbsp;<a href="#" title="View admin profile" class="bbp-author-name" rel="nofollow">Bobby DISTLEs</a>
                                </span>
                            </p>
                        </li>
                    </ul><!-- end bbp forums -->
                </li>
            </ul>
        </div><!-- end bbpress -->
    </div><!-- end forums -->
</div>
    </body>

</html>
