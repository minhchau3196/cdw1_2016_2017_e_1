<!DOCTYPE html>

<html>
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
        $less->compileFile('less/398.less', 'css/398.css');
        ?>
        <link href="css/398.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-398"> 
            <!--MENU-->
            <div class="header">
                <!-- Top Contact Info -->
                <div class="row logo-top-info">
                    <div class="container">
                        <div class="col-md-3 logo">
                            <!-- Main Logo -->
                            <div itemscope="">
                                <a href="#" rel="home" itemprop="url">
                                    <img src="images/logo.png" alt="logo" itemprop="logo">
                                </a>
                            </div>
                            <h1 class="site-title hidden">
                                <a href="#" rel="home">Offshore</a>
                            </h1>
                            <p class="site-description hidden">Responsive Gas &amp; Oil Industry HTML Template</p>  
                        </div>
                        <div class="col-md-9 top-info-social">
                            <div class="pull-right">
                                <div class="top-widgets">
                                    <div class="widget">
                                        <h3>Call Us</h3>			
                                        <p>1800 425 4646</p>
                                    </div>
                                    <div class="widget">
                                        <h3>Email Us</h3>			
                                        <p>info@offshoreindustry.com</p>
                                    </div>
                                    <div class="widget">
                                        <h3>Market</h3>
                                        <p>143.17<span class="forex"><i class="fa fa-caret-down" aria-hidden="true"></i> -0.17 </span></p>
                                    </div>
                                    <div class="widget">
                                        <div class="social">                    
                                            <ul class="social-icons">
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>                    
                                            </ul>
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--------MENU--------->
                <div id="navbar">
                    <nav class="navbar navbar-default navbar-static-top main-menu" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="container">
                            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                <ul class="nav navbar-nav main-menu">
                                    <li class="active"><a title="Home" href="#">Home</a></li>
                                    <li class="dropdown">
                                        <a title="About" href="#" data-toggle="dropdown" class="dropdown-toggle">About <span class="caret"></span></a>
                                        <ul role="menu">
                                            <li><a title="The Company" href="#">The Company</a></li>
                                            <li><a title="Vision &amp; Mission" href="#">Vision &amp; Mission</a></li>
                                            <li><a title="Our Approach" href="#">Our Approach</a></li>
                                            <li><a title="Our Team" href="#">Our Team</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a title="Services" href="#" data-toggle="dropdown" class="dropdown-toggle">Services <span class="caret"></span></a>
                                        <ul role="menu">
                                            <li><a title="Services List" href="#">Services List</a></li>
                                            <li><a title="Services Single" href="#">Services Single</a></li>
                                            <li><a title="Services Single Full Width" href="#">Services Single Full Width</a></li>
                                        </ul>
                                    </li>
                                    <li><a title="Technology" href="#">Technology</a></li>
                                    <li><a title="News &amp; Media" href="#">News &amp; Media</a></li>
                                    <li><a title="Blog" href="#">Blog</a></li>
                                    <li class="dropdown"><a title="Pages" href="#" data-toggle="dropdown" class="dropdown-toggle">Pages <span class="caret"></span></a>
                                        <ul role="menu">
                                            <li><a title="Blog" href="#">Blog</a></li>
                                            <li><a title="Blog Single" href="#">Blog Single</a></li>
                                            <li><a title="Careers Single" href="#">Careers Single</a></li>
                                            <li><a title="Shortcodes" href="#">Shortcodes</a></li>
                                            <li><a title="404 Page" href="#">404 Page</a></li>
                                            <li><a title="Blank Page" href="#">Blank Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a title="Careers" href="#">Careers</a></li>
                                    <li><a title="Contact" href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
        </div>
<!--        <script>
            $(document).ready(function () {
                $("button").click(function () {
                    $("main-menu").toggle("collapse in");
                });
            });

        </script>-->
    </body>
</html>