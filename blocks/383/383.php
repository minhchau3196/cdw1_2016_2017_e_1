<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>  

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/383.less', 'css/383.css');
        ?>

        <link href="css/383.css" rel="stylesheet" type="text/css"/> 

        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-383">
            <div class="container">
                <!--TITLE-->
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12"></div>              
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div id="contact_page">
                            <h1 class="page_heading">Contact us</h1>
                            <!--  GOOGLE MAP -->
                            <div id="map-canvas">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4805347001443!2d106.7560762145813!3d10.851008692270929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752797e321f8e9%3A0xb3ff69197b10ec4f!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEPDtG5nIG5naOG7hyBUaOG7pyDEkOG7qWM!5e0!3m2!1svi!2s!4v1488176391234" width="100%" height="450px" frameborder="0" style="border:2" allowfullscreen></iframe> 
                            </div>                           
                        </div>
                        <div class="rte">
                            <p style="font-size:12px;">You can contact us any way that is convenient for you. We are available 24/7 via fax, email or telephone. You can also use a quick contact form below or visit our office personally.</p>
                            <p style="font-size:12px;">Email us with any questions or inquiries or use our contact data. We would be happy to answer your questions.</p>
                        </div>                     
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>