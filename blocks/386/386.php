<!DOCTYPE html>
<html>
    <head>
        <title>Live preview</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/386.less', 'css/386.css');
        ?>
        <link href="css/386.css" rel="stylesheet" type="text/css" />

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
       
    </head>
    <body>
        <!--Header-->
        <div class="type-386">
            <div class="header">
                <header id="lms_header" style="opacity: 1;">
                    <!--Header top-->
                    <div class="lms_header_top">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                    <div class="lms_any_que_wrapper">
                                        <a>My Account</a>
                                        <a>Wish</a>
                                        <a>Checkout</a>                                    
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                    <div class="logo">
                                        <img src="images/rapha.png" alt=""/>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="lms_login_wrapper">
                                        <ul>
                                            <li><a href="#/" title="USD">USD 
                                                    <i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#/" title="Card">
                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                    <span id="#">0</span>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Menu-->
                    <div class="container">
                        <button class="lms_menu_toggle btn-responsive-nav" data-toggle="collapse" data-target=".nav-main-collapse"><i class="fa fa-bars"></i> </button>
                    </div>

                    <div class="navbar-collapse nav-main-collapse collapse">
                        <div class="container">
                            <div class="row">
                                <nav class="nav-main mega-menu">
                                    <ul class="nav nav-pills nav-main">
                                        <li class="dropdown resp-active">
                                            <a href="#" class="dropdown-toggle">Home 
                                                <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-submenu resp-active">
                                                    <a href="#" class="dropdown-toggle">Shipping &amp;Return</a>                                                
                                                </li>
                                                <li><a href="#home-video/" class="dropdown-toggle">Home Video</a></li>
                                                <li><a href="#home-version-1/" class="dropdown-toggle">Home Version 1</a></li>
                                                <li><a href="#home-version-2/" class="dropdown-toggle">Home Version 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown mega-menu-item mega-menu-fullwidth">
                                            <a href="#" class="dropdown-toggle">Product
                                                <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown">
                                                    <div class="mega-menu-content">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <ul class="sub-menu">
                                                                    <li>
                                                                        <span class="mega-menu-sub-title">Courses</span>
                                                                        <ul class="sub-menu">
                                                                            <img src="images/1.jpg" alt=""/>
                                                                            <li><a href="#" class="dropdown-toggle">Courses Page</a></li>
                                                                            <li><a href="content_right_sidebar.php" class="dropdown-toggle">Course Right Sidebar</a></li>                                                                 
                                                                            <li><a href="#know-about-html-and-html5/" class="dropdown-toggle">Course Left Sidebar</a></li>
                                                                            <li><a href="#web-development/" class="dropdown-toggle">Course Category</a></li>
                                                                            <li><a href="#fundamentals-of-project-management/" class="dropdown-toggle">Free Course</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <ul class="sub-menu">
                                                                    <li>
                                                                        <span class="mega-menu-sub-title">Other Course</span>
                                                                        <ul class="sub-menu">
                                                                            <img src="images/2.jpg" alt=""/>
                                                                            <li><a href="#lokendragami/" class="dropdown-toggle">Learner Profile</a></li>
                                                                            <li><a href="#rahultiwari/" class="dropdown-toggle">Instructor Profile</a></li>
                                                                            <li><a href="#wordpress-lms-education-theme-wordpress/" class="dropdown-toggle">Forum</a></li>
                                                                            <li><a href="#members/" class="dropdown-toggle">Members</a></li>
                                                                            <li><a href="#activity/" class="dropdown-toggle">Activity</a></li>
                                                                            <li><a href="#login/" class="dropdown-toggle">Create New Course</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <ul class="sub-menu">
                                                                    <li>
                                                                        <span class="mega-menu-sub-title">Blog</span>
                                                                        <ul class="sub-menu">
                                                                            <img src="images/3.jpg" alt=""/>
                                                                            <li><a href="#blog-grid-right-sidebar/" class="dropdown-toggle">Grid Right Sidebar</a></li>
                                                                            <li><a href="#blog-full-width/" class="dropdown-toggle">Blog Full Width</a></li>
                                                                            <li><a href="#blog-left-sidebar/" class="dropdown-toggle">Blog Left Sidebar</a></li>
                                                                            <li><a href="blog_right_sidebar.php" class="dropdown-toggle">Blog Right Sidebar</a></li>
                                                                            <li><a href="#blog-grid-full-width/" class="dropdown-toggle">Blog Grid Full Width</a></li>
                                                                            <li><a href="#blog-grid-left-sidebar/" class="dropdown-toggle">Blog Left Sidebar</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <ul class="sub-menu">
                                                                    <li>
                                                                        <span class="mega-menu-sub-title">Blog Single</span>
                                                                        <ul class="sub-menu">
                                                                            <img src="images/4.jpg" alt=""/>
                                                                            <li><a href="#blog-single-full-width/" class="dropdown-toggle">Single Full Width</a></li>
                                                                            <li><a href="#blog-single-left-sidebar/" class="dropdown-toggle">Single Left Sidebar</a></li>
                                                                            <li><a href="#blog-single-right-sidebar/" class="dropdown-toggle">Single Right Sidebar</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>                                                       
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown mega-menu-item mega-menu-fullwidth">
                                            <a href="#" class="dropdown-toggle">Blog
                                                <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown">
                                                    <div class="mega-menu-content">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <ul class="sub-menu">
                                                                    <li>
                                                                        <span class="mega-menu-sub-title">Courses</span>
                                                                        <ul class="sub-menu">
                                                                            <img src="images/bg1.jpg" alt=""/>                                                                            
                                                                                <span class="blog_date">July 18, 2016</span>
                                                                                <h5 class="blog_title">
                                                                                    <a href="#">Easy-Peasy Way To Add Color  To A&nbsp;Journal</a>
                                                                                </h5>
                                                                                <div class="blog_content">Adding a little color to a journal is easy with watercolor dots,
                                                                                    a brush and some water. </div>
                                                                                <a class="btn" href="#">Read more</a>                                                                            
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <ul class="sub-menu">
                                                                    <li>
                                                                        <span class="mega-menu-sub-title">Courses</span>
                                                                        <ul class="sub-menu">
                                                                            <img src="images/bl2.jpg" alt=""/>                                                                            
                                                                                <span class="blog_date">July 18, 2016</span>
                                                                                <h5 class="blog_title">
                                                                                    <a href="#">Easy-Peasy Way To Add Color  To A&nbsp;Journal</a>
                                                                                </h5>
                                                                                <div class="blog_content">Adding a little color to a journal is easy with watercolor dots,
                                                                                    a brush and some water. </div>
                                                                                <a class="btn" href="#">Read more</a>
                                                                            
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <ul class="sub-menu">
                                                                    <li>
                                                                        <span class="mega-menu-sub-title">Courses</span>
                                                                        <ul class="sub-menu">
                                                                            <img src="images/bg3.jpg" alt=""/>                                                                            
                                                                                <span class="blog_date">July 18, 2016</span>
                                                                                <h5 class="blog_title">
                                                                                    <a href="#">Easy-Peasy Way To Add Color  To A&nbsp;Journal</a>
                                                                                </h5>
                                                                                <div class="blog_content">Adding a little color to a journal is easy with watercolor dots,
                                                                                    a brush and some water. </div>
                                                                                <a class="btn" href="#">Read more</a>                                                                           
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>                                                                                                           
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>                             
                                        <li class=" dropdown resp-active">
                                            <a href="#" class="dropdown-toggle">Pages
                                                <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown-menu">
                                                <li ><a href="#teams/" class="dropdown-toggle">Team</a></li>
                                                <li ><a href="#team/noaln-jude/" class="dropdown-toggle">Team Single</a></li>
                                                <li ><a href="#services/" class="dropdown-toggle">Services</a></li>
                                                <li ><a href="#careers/" class="dropdown-toggle">Careers</a></li>
                                                <li ><a href="#faq/" class="dropdown-toggle">FAQ</a></li>
                                                <li ><a href="#plans/" class="dropdown-toggle">Plans</a></li>
                                            </ul>
                                        </li>
                                        <li ><a href="#about/" class="dropdown-toggle">About</a></li>
                                        <li ><a href="#contact-us/" class="dropdown-toggle">Contact Us</a></li>
                                    </ul>
                                </nav>
                                <div class="lms_search_toggle" onClick="showSearch()"><a><i class="fa fa-search"></i></a></div>
                                <div class="lms_search_wrapper" style="display: none; overflow: hidden;">
                                    <form method="get" action="#">
                                        <input type="search" value="" placeholder="Search..." name="s" id="cs" class="form-control"/>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>              
            </div>
        </div>
        
        
    </body>
</html>
