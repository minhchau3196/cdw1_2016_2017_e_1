
<!DOCTYPE html>

<html>

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
        $less->compileFile('less/365.less', 'css/365.css');
        ?>
        <link href="css/365.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type-365">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 footer_block footer_block__1">
                            <h3>Information</h3>
                            <ul class="footer_links">

                                <li class="active"><a href="/" title="">Home</a></li>

                                <li><a href="/collections" title="">Collection</a></li>

                                <li><a href="/search" title="">Search</a></li>

                                <li><a href="/blogs/blog" title="">Blog</a></li>

                                <li><a href="/pages/about-us" title="">About us</a></li>

                                <li><a href="/pages/contact-us" title="">Contact us</a></li>

                                <li><a href="/pages/sitemap" title="">Sitemap</a></li>

                            </ul>
                        </div>

                        <div class="col-sm-3 footer_block footer_block__2">
                            <h3>Why buy from us</h3>
                            <ul class="footer_links">

                                <li><a href="/blogs/blog" title="">Shipping &amp; Returns</a></li>

                                <li><a href="/pages/about-us" title="">Secure Shopping</a></li>

                                <li><a href="/pages/contact-us" title="">International Shipping</a></li>

                                <li><a href="/pages/sitemap" title="">Affiliates</a></li>

                                <li><a href="/collections" title="">Group Sales</a></li>

                            </ul>
                        </div>

                        <div class="col-sm-3 footer_block footer_block__3">
                            <h3>My account</h3>
                            <ul class="footer_links">

                                <li><a href="/account" title="">My Account</a></li>

                                <li><a href="/account/addresses" title="">My Addresses</a></li>

                                <li><a href="/cart" title="">My Cart</a></li>

                            </ul>
                        </div>          

                        <div class="col-sm-3 footer_block footer_block__4">
                            <h3>Contacts</h3>
                            <ul class="footer_contacts">
                                <li class="contacts_company">My Company</li>
                                <li class="contacts_address">Glasgow D04 89GR</li>
                                <li class="contacts_phone"><div>Tel:</div> <a href="tel:1-800-1234-567">1-800-1234-567</a></li>
                                <li class="contacts_email"><a href="mailto:info@demolink.org">info@demolink.org</a></li>
                            </ul>
                            <h3>Follow us</h3>

                            <ul class="footer_social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href=#><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <div class="container">
                        <p role="contentinfo">© 2017 Raphael. All rights reserved.<a href="#">Powered by Shopify</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>