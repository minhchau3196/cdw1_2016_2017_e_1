<!DOCTYPE html>
<html style="background-color: #f3f3f4;">
    <head>
        <meta charset="UTF-8" />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/384.less', 'css/384.css');
        ?>
        <link href="css/384.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="type-384">
            <div class="container">
                <div class="main_content">
                    <div class="row">
                        <h3>COLLECTIONS</h3>
                        <div role="tabpanel">
                            <div class="col-sm-3">
                                <ul class="nav nav-pills brand-pills nav-stacked" role="tablist">
                                    <li role="presentation" class="brand-nav active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Painting</a></li>
                                    <li role="presentation" class="brand-nav"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Drawing</a></li>
                                    <li role="presentation" class="brand-nav"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">PhotoGraphy</a></li>
                                    <li role="presentation" class="brand-nav"><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">Scupture</a></li>
                                    <li role="presentation" class="brand-nav"><a href="#tab5" aria-controls="tab5" role="tab" data-toggle="tab">Art Suppling</a></li>
                                    <li role="presentation" class="brand-nav"><a href="#tab6" aria-controls="tab6" role="tab" data-toggle="tab">Install</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-9">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="tab1">
                                        <h1 class="page_heading">Painting</h1>
                                        <ul class="tags clearfix">
                                            <li class="active">
                                                <a href="#">All</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Show products matching tag Impressionism">Impressionism</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Show products matching tag Minimalism">Minimalism</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Show products matching tag Realism">Realism</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Show products matching tag Romanticism">Romanticism</a>
                                            </li>
                                        </ul>
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3 col-xs-12 collection_img">
                                                <img src="image/pro1.png" alt=""/>
                                            </div>
                                            <div class="col-md-9 col-sm-9 col-xs-12 collection_desc">
                                                <div class="rte">
                                                    You'll have an opportunity to look through numerous artworks at any time without leaving your house. Are you eager to obtain a unique piece of art rather than something used in 9 out of 10 places? In this case, our services are what you need. This website boasts of a collection of original paintings, drawings, and photographs, with their styles ranging from impressionism to surrealism. People sometimes want to add a zest to their interior, but have no idea what would be the best option for the design of their house.
                                                </div>
                                            </div>
                                        </div>                                       
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="tab2">
                                        <h1 class="page_heading">Drawing</h1>
                                        <ul class="tags clearfix">
                                            <li class="active">
                                                <a href="#">All</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Show products matching tag Impressionism">Impressionism</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Show products matching tag Minimalism">Minimalism</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Show products matching tag Realism">Realism</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Show products matching tag Romanticism">Romanticism</a>
                                            </li>
                                        </ul>
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3 col-xs-12 collection_img">
                                                <img src="image/pro2.png" alt=""/>
                                            </div>
                                            <div class="col-md-9 col-sm-9 col-xs-12 collection_desc">
                                                <div class="rte">
                                                    You'll have an opportunity to look through numerous artworks at any time without leaving your house. Are you eager to obtain a unique piece of art rather than something used in 9 out of 10 places? In this case, our services are what you need. This website boasts of a collection of original paintings, drawings, and photographs, with their styles ranging from impressionism to surrealism. People sometimes want to add a zest to their interior, but have no idea what would be the best option for the design of their house.
                                                </div>
                                            </div>
                                        </div>      
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="tab3">
                                        <h1 class="page_heading">PhotoGraphy</h1>
                                        <ul class="tags clearfix">
                                            <li class="active">
                                                <a href="#">All</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Show products matching tag Impressionism">Impressionism</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Show products matching tag Minimalism">Minimalism</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Show products matching tag Realism">Realism</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Show products matching tag Romanticism">Romanticism</a>
                                            </li>
                                        </ul>
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3 col-xs-12 collection_img">
                                                <img src="image/pro3.png" alt=""/>
                                            </div>
                                            <div class="col-md-9 col-sm-9 col-xs-12 collection_desc">
                                                <div class="rte">
                                                    You'll have an opportunity to look through numerous artworks at any time without leaving your house. Are you eager to obtain a unique piece of art rather than something used in 9 out of 10 places? In this case, our services are what you need. This website boasts of a collection of original paintings, drawings, and photographs, with their styles ranging from impressionism to surrealism. People sometimes want to add a zest to their interior, but have no idea what would be the best option for the design of their house.
                                                </div>
                                            </div>
                                        </div>      
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="tab4">
                                       <h1 class="page_heading">Scupture</h1>
                                        <ul class="tags clearfix">
                                            <li class="active">
                                                <a href="#">All</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Show products matching tag Impressionism">Impressionism</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Show products matching tag Minimalism">Minimalism</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Show products matching tag Realism">Realism</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Show products matching tag Romanticism">Romanticism</a>
                                            </li>
                                        </ul>
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3 col-xs-12 collection_img">
                                                <img src="image/pro4.png" alt=""/>
                                            </div>
                                            <div class="col-md-9 col-sm-9 col-xs-12 collection_desc">
                                                <div class="rte">
                                                    You'll have an opportunity to look through numerous artworks at any time without leaving your house. Are you eager to obtain a unique piece of art rather than something used in 9 out of 10 places? In this case, our services are what you need. This website boasts of a collection of original paintings, drawings, and photographs, with their styles ranging from impressionism to surrealism. People sometimes want to add a zest to their interior, but have no idea what would be the best option for the design of their house.
                                                </div>
                                            </div>
                                        </div>      
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="tab5">
                                       <h1 class="page_heading">Art suppling</h1>
                                        <ul class="tags clearfix">
                                            <li class="active">
                                                <a href="#">All</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Show products matching tag Impressionism">Impressionism</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Show products matching tag Minimalism">Minimalism</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Show products matching tag Realism">Realism</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Show products matching tag Romanticism">Romanticism</a>
                                            </li>
                                        </ul>
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3 col-xs-12 collection_img">
                                                <img src="image/pro2.png" alt=""/>
                                            </div>
                                            <div class="col-md-9 col-sm-9 col-xs-12 collection_desc">
                                                <div class="rte">
                                                    You'll have an opportunity to look through numerous artworks at any time without leaving your house. Are you eager to obtain a unique piece of art rather than something used in 9 out of 10 places? In this case, our services are what you need. This website boasts of a collection of original paintings, drawings, and photographs, with their styles ranging from impressionism to surrealism. People sometimes want to add a zest to their interior, but have no idea what would be the best option for the design of their house.
                                                </div>
                                            </div>
                                        </div>      
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="tab6">
                                       <h1 class="page_heading">Install</h1>
                                        <ul class="tags clearfix">
                                            <li class="active">
                                                <a href="#">All</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Show products matching tag Impressionism">Impressionism</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Show products matching tag Minimalism">Minimalism</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Show products matching tag Realism">Realism</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Show products matching tag Romanticism">Romanticism</a>
                                            </li>
                                        </ul>
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3 col-xs-12 collection_img">
                                                <img src="image/pro3.png" alt=""/>
                                            </div>
                                            <div class="col-md-9 col-sm-9 col-xs-12 collection_desc">
                                                <div class="rte">
                                                    You'll have an opportunity to look through numerous artworks at any time without leaving your house. Are you eager to obtain a unique piece of art rather than something used in 9 out of 10 places? In this case, our services are what you need. This website boasts of a collection of original paintings, drawings, and photographs, with their styles ranging from impressionism to surrealism. People sometimes want to add a zest to their interior, but have no idea what would be the best option for the design of their house.
                                                </div>
                                            </div>
                                        </div>      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>