<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page login</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <link href="assets/css/vendor-styles.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="main-wrapper">
    <div class="an-loader-container">
        <img src="assets/img/loader.png" alt="">
    </div>
    <div class="an-page-content" style="margin-top: -70px !important;">
        <div class="an-flex-center-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="an-login-container">
                            <div class="an-single-component with-shadow">
                                <div class="an-component-header">
                                    <h6>Login</h6>
                                    <div class="component-header-right">
                                        <p class="sign-up-link">Don't have account? <a href="#">Sign Up</a></p>
                                    </div>
                                </div>
                                <div class="an-component-body">
                                    <div class="back-to-home">
                                        <h3 class="an-logo-heading text-center wow fadeInDown">
                                            <a class="an-logo-link" href="#">
                                                <img src="assets/img/Logo.png" style="width: 50%"/>
                                            </a>
                                        </h3>
                                    </div>


                                    <form action="#">
                                        <label>Email</label>
                                        <div class="an-input-group">
                                            <div class="an-input-group-addon"><i class="ion-ios-email-outline"></i>
                                            </div>
                                            <input type="email" class="an-form-control"
                                                   placeholder="Please enter Email Address">
                                        </div>

                                        <label>Password</label>
                                        <div class="an-input-group">
                                            <div class="an-input-group-addon"><i class="ion-key"></i></div>
                                            <input type="password" class="an-form-control"
                                                   placeholder="Please enter Address">
                                        </div>

                                        <div class="remembered-section">
                          <span class="an-custom-checkbox">
                            <input type="checkbox" id="check-1">
                            <label for="check-1">Remember me</label>
                          </span>
                                            <a href="#">Forgot password?</a>
                                        </div>

                                        <button class="an-btn an-btn-default fluid">Log In</button>
                                    </form>

                                </div> <!-- end .AN-COMPONENT-BODY -->
                            </div> <!-- end .AN-SINGLE-COMPONENT -->
                        </div> <!-- end an-login-container -->
                    </div>
                </div> <!-- end row -->
            </div>
        </div> <!-- end an-flex-center-center -->
    </div> <!-- end .AN-PAGE-CONTENT -->
    <footer class="an-footer" style="margin-top: -30px !important;">
        <p>COPYRIGHT 2019 © KUCHENTRATSCH. ALL RIGHTS RESERVED</p>
    </footer> <!-- end an-footer -->

</div> <!-- end .MAIN-WRAPPER -->
<script src="assets/js-plugins/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="assets/js-plugins/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js-plugins/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<script src="assets/js-plugins/wow.min.js" type="text/javascript"></script>

<!--  MAIN SCRIPTS START FROM HERE  above scripts from plugin   -->
<script src="assets/js/scripts.js" type="text/javascript"></script>
</body>

</html>