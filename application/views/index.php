<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>PSU COOP</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Custom Css -->
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="assets/css/main.css" rel="stylesheet">
<link href="assets/css/authentication.css" rel="stylesheet">

<!-- adminX You can choose a theme from css/themes instead of get all themes -->
<link href="assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-blue" id="authentication">
    <div class="authentication">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-xl-9 col-lg-8 col-md-12 p-l-0">
                    <div class="l-detail">
                        <h4 class="position">Welcome</h4>
                        <h1 class="position">COOP</h1>
                        <h3 class="position">Application System</h3>
                        <p class="position"></p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-12 p-r-0">
                    <div class="card position">

                        <form method="POST" action="index.php/Authentication/authen_login">
                        <h4 class="l-login">Login</h4>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <?php echo form_input(['name'=>'txtUsername', 'class'=>'form-control','placeholder'=>'PSU Passport']);?>
                                 </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <?php echo form_password(['name'=>'txtPassword','class'=>'form-control','placeholder'=>'Password'])?>
                                </div>
                            </div>
                            <?php echo "<br>".$this->session->flashdata("error"); ?>
                            <?php echo form_submit(['name'=>'btnlogin','class'=>'btn btn-raised g-bg-blue waves-effect','value'=>'SING IN'])?>
                    </div>
                </div>
                </form>>
            </div>
        </div>
    </div>

<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="assets/js/pages/authentication/sketch.js"></script><!-- sketch Js -->
</body>
</html>
