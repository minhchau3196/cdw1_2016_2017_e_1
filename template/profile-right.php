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
                    <h3> Profile </h3>
                    <div class="profile">
                        <table class="table table-user-information">
                            <tbody>
                          <tr>
                            <td>Department:</td>
                            <td>Programming</td>
                          </tr>
                          <tr>
                            <td>Begin date:</td>
                            <td>06/23/2013</td>
                          </tr>
                          <tr>
                            <td>Date of Birth</td>
                            <td>01/24/1996</td>
                          </tr>

                             <tr>
                                 </tr><tr>
                            <td>Gender</td>
                            <td>Female</td>
                          </tr>
                            <tr>
                            <td>Home Address</td>
                            <td>Kathmandu,Nepal</td>
                          </tr>
                          <tr>
                            <td>Email</td>
                            <td><a href="mailto:info@support.com">info@support.com</a></td>
                          </tr>
                            <tr><td>Phone Number</td>
                            <td>123-4567-890(Landline)<br><br>555-4567-890(Mobile)
                            </td>

                          </tr>

                        </tbody>
                    </table>
                    </div>
                    <div class="btn-profile">
                        <button class="btn btn-primary"> Edit Profile </button>
                        <button class="btn btn-primary"> Cancel </button>
                    </div>                   
                </div>               
     
        </div>
    </div>
    </div>
</body>