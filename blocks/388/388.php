<!DOCTYPE html>
<html style="background-color: #f3f3f4;">
    <head>
        <meta charset="UTF-8" />
        
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/388.less', 'css/388.css');
        ?>
        <link href="css/388.css" rel="stylesheet" type="text/css"/>
        
        <script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        
    </head>
    <body>
        <div class="type-388">
            <div class="container">
                <div class="main_content">
                    <!--TITLE-->
                    <div class="col-md-3 col-sm-3 col-xs-12">
                    </div>
                    <!---TITLE BLOG-->
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="page-scope">
                            <div class="page_header">
                                <h1 class="page_heading">About us</h1>
                            </div>
                            <div class="page_content">
                                <div class="rte">
                                    <h2 style="text-align: center;">Catering to your requirements, handling your needs with care</h2>
                                    <p>Our store is more than just another average online retailer. We sell not only top quality products, but give our customers a positive online shopping experience. Forget about struggling to do everything at once: taking care of the family, running your business, walking your dog, cleaning the house, doing the shopping, etc. Purchase the goods you need every day or just like in a few clicks or taps, depending on the device you use to access the Internet. We work to make your life more enjoyable.</p>
                                    <h2 style="text-align: center;">Store events</h2>
                                    <div class="row">
                                        <div class="col-md-4">                                    
                                            <p style="text-align: center;"><img src="image/about_1.png" alt="img1"></p>
                                            <h4 style="text-align: center;">For convenience of choice</h4>
                                            <p style="text-align: center;">We think about the convenience of your choice. Our products are supplied with star rating that should help hesitant buyers to take a decision. What’s more, you can search our site if you know exactly what you are looking for or use a bunch of different filters that will considerably save your time and efforts.</p>                                  
                                        </div>
                                        <div class="col-md-4">                                       
                                            <p style="text-align: center;"><img src="image/about_2.png" alt="img1"></p>
                                            <h4 style="text-align: center;">Delivery to all regions</h4>
                                            <p style="text-align: center;">We deliver our goods worldwide. No matter where you live, your order will be shipped in time and delivered right to your door or to any other location you have stated. The packages are handled with utmost care, so the ordered products will be handed to you safe and sound, just like you expect them to be.</p>
                                        </div>
                                        <div class="col-md-4">
                                            <p style="text-align: center;"><img src="image/about_3.png" alt="img1"></p>
                                            <h4 style="text-align: center;">The highest quality of products</h4>
                                            <p style="text-align: center;">We guarantee the highest quality of the products we sell. Several decades of successful operation and millions of happy customers let us feel certain about that. Besides, all items we sell pass thorough quality control, so no characteristics mismatch can escape the eye of our professionals.</p>
                                        </div>
                                    </div>
                                    <h2 style="text-align: center;">Our team</h2>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p><img src="image/photo_1.jpg" alt="img1"></p>
                                            <h5 style="text-align: center;">ROBERT JOHNSON</h5>
                                            <p style="text-align: center;">Senior salesman with 15 years of experience. He knows everything about the products he offers.</p>
                                        </div>
                                        <div class="col-md-4">
                                            <p><img src="image/photo_2.jpg" alt="img1"></p>
                                            <h5 style="text-align: center;">JESSICA PRISTON</h5>
                                            <p style="text-align: center;">Mega positive shop assistant always ready to help you make the right choice and charm you with a smile.</p>
                                        </div>
                                        <div class="col-md-4">
                                            <p><img src="image/photo_3.jpg" alt="img1"></p>
                                            <h5 style="text-align: center;">SAM KROMSTAIN</h5>
                                            <p style="text-align: center;">Wholesale manager. Contact him if you want to buy a batch of the products offered at our store.</p>
                                        </div>
                                    </div>
                                    <h2 style="text-align: center;">Testimonials</h2>
                                    <p style="padding: 5px 35px;"><i class="fa fa-quote-left" aria-hidden="true"></i><br>"Guys, you rock! Made a purchase at your store recently. The order has been shipped and delivered on time. The quality is superb! The price is quite reasonable. Told all my friends about your excellent service and the variety of choice. I think I’ll be your loyal customer in future as well. I wish your store many more years of prosperity."<br><i class="fa fa-quote-right" aria-hidden="true" style="float: right"></i></p>
                                    <p style="text-align: right;"><strong>Mary Taba</strong></p>
                                    <p style="padding: 5px 35px;"><i class="fa fa-quote-left" aria-hidden="true"></i><br>“Having the distressing experience with some online shops before decided to say ‘’THANK YOU” to all personnel of this store. You are not only friendly, but deliver really good products in the shortest possible terms. In a word, I am absolutely happy with my purchase and the service. Everything was perfect!”<br><i class="fa fa-quote-right" aria-hidden="true" style="float: right"></i></p>
                                    <p style="text-align: right;"><strong>Virginia Ubert</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!---END OF TITLE-->
                </div>
            </div>
        </div>
    </body>
</html>