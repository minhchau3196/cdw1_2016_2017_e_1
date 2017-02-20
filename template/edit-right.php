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
    $less->compileFile('less/type-E-3.less', 'css/type-E-3.css');
    ?>
    <link href="css/type-E-3.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>       
</head>

<body>
    <div class="type-E-3">
        <div class="container">                    
                <div class="pannel-info">
                    <h3> Edit Profile </h3>
                    <div class="form-edit">
                        <div class="col-md-3">
                            <h5 class="form-left"> First name :  </h5>
                        </div>
                        <div class="col-md-9">                      
                            <input id="textinput" name="textinput" type="text" placeholder="Van A"
                                   class="form-control input-md">
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="form-edit">
                        <div class="col-md-3">
                            <h5 class="form-left"> Last name :  </h5>
                        </div>
                        <div class="col-md-9">                      
                            <input id="textinput" name="textinput" type="text" placeholder="Nguyen"
                                   class="form-control input-md">
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="form-edit">
                        <div class="col-md-3">
                            <h5 class="form-left"> Email :  </h5>
                        </div>
                        <div class="col-md-9">                      
                            <input id="textinput" name="textinput" type="text" placeholder="nguyenvana@gmail.com"
                                   class="form-control input-md">
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="form-edit">
                        <div class="col-md-3">
                            <h5 class="form-left"> Home Address :  </h5>
                        </div>
                        <div class="col-md-9">                      
                            <input id="textinput" name="textinput" type="text" placeholder="35 vo van ngan, thu duc, tp.HCM"
                                   class="form-control input-md">
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="form-edit">
                        <div class="col-md-3">
                            <h5 class="form-left"> Phone Number :  </h5>
                        </div>
                        <div class="col-md-9">                      
                            <input id="textinput" name="textinput" type="text" placeholder="0123456789"
                                   class="form-control input-md">
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="form-edit">
                        <div class="col-md-3">
                            <h5 class="form-left"> Password :  </h5>
                        </div>
                        <div class="col-md-9">                      
                            <input name="textinput" type="password" placeholder="*********"
                                   class="form-control input-md">
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="form-edit">
                        <div class="col-md-3">
                            <h5 class="form-left"> Confirm Password :  </h5>
                        </div>
                        <div class="col-md-9">                      
                            <input name="textinput" type="password" placeholder="*********"
                                   class="form-control input-md">
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="form-edit">                   
                        <div class="col-md-3">
                            <h5 class="form-left"> Upload Avatar :  </h5>
                        </div>
                        <div class="col-md-9">                      
                            <input type="file" class="btn btn-primary">
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="form-edit">                   
                        <div class="col-md-3">

                        </div>
                        <div class="col-md-9">                      
                            <button class="btn btn-primary"> Save Changes </button>
                            <button class="btn"> Cancel </button>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>

        </div>
    </div>
</body>