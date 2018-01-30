<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: adminX Admin ::</title>
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
                        <!--<ul class="list-unstyled l-social position">
                            <li><a href="#"><i class="zmdi zmdi-facebook-box"></i></a></li>                                
                            <li><a href="#"><i class="zmdi zmdi-linkedin-box"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-pinterest-box"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>                            
                            <li><a href="#"><i class="zmdi zmdi-google-plus-box"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-behance"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-dribbble"></i></a></li>                            
                        </ul>
                        <ul class="list-unstyled l-menu">
                            <li><a href="#">Contact Us</a></li>                                
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul> -->
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-12 p-r-0">
                    <div class="card position">
                        <h4 class="l-login">Login</h4>
                        <form class="col-md-12" id="sign_in" method="POST">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                    <label class="form-label">PSU Passport</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                    <label class="form-label">Password</label>
                                </div>
                            </div>
                            <div>
                                <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-cyan">
                                <label for="rememberme">Remember Me</label>
                            </div>
                            <a href="index.html" class="btn btn-raised g-bg-blue waves-effect" title="">SIGN IN </a>
                            <a href="sign-up.html" class="btn btn-raised waves-effect" title="">SIGN UP</a>
                            <div class="text-left"> <a href="forgot-password.html">Forgot Password?</a> </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/plugins/sketch/sketch.min.js"></script><!-- sketch Animation Js --> 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="assets/js/pages/authentication/sketch.js"></script><!-- sketch Js -->
</body>
</html>
