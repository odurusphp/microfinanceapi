<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kuchentratsch Admin</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="<?php echo URLROOT  ?>crm/assets/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo URLROOT  ?>crm/assets/css/vendor-styles.css" rel="stylesheet">
    <link href="<?php echo URLROOT  ?>crm/assets/uploadify/uploadifive.css" rel="stylesheet">
    <link href="<?php echo URLROOT  ?>crm/assets/css/styles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        ::-webkit-scrollbar {
            width: 10px;
        }
        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }
        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
        .notifyjs-bootstrap-error {
            color: #B94A48;
            background-color: #F2DEDE;
            border-color: #EED3D7;
            font-weight: lighter !important;
            font-size: small !important;
             }
    </style>

    <script>
        function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
            return true;
        }
    </script>

</head>
<body>
<div class="main-wrapper">
    <div class="an-loader-container">
        <img src="assets/img/loader.png" alt="">
    </div>
    <header class="an-header">
        <div class="an-topbar-left-part">
            <h3 class="an-logo-heading">
                <a class="an-logo-link" href="#"><img src="<?php echo URLROOT  ?>crm/assets/img/Logo.png" style="width: 17%"/>
                    <span style="font-size: x-small;color:#333333">Management System</span>
                </a>
            </h3>
        </div> <!-- end .AN-TOPBAR-LEFT-PART -->
        <button class="an-btn an-btn-icon toggle-button js-toggle-sidebar">
            <i class="icon-list"></i>
        </button>
        <div class="an-topbar-right-part">
            <div class="an-profile-settings">
                <div class="btn-group an-notifications-dropown  profile">
                    <button type="button" class="an-btn an-btn-icon dropdown-toggle"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="an-profile-img"
                              style="background-image: url('assets/img/users/user5.jpg');"></span>
                        <span class="an-user-name">John Smith</span>
                        <span class="an-arrow-nav"><i class="icon-arrow-down"></i></span>
                    </button>
                    <div class="dropdown-menu">
                        <p class="an-info-count">Profile Settings</p>
                        <ul class="an-profile-list">
                            <li><a href="#" style="color:#333333"><i class="icon-user"></i>My profile</a></li>
                            <li><a href="#" style="color:#333333"><i class="icon-envelop"></i>My inbox</a></li>
                            <li><a href="#" style="color:#333333"><i class="icon-calendar-check"></i>Calendar</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#" style="color:#333333"><i class="icon-lock"></i>Lock screen</a></li>
                            <li><a href="#" style="color:#333333"><i class="icon-download-left"></i>Log out</a></li>
                        </ul>
                    </div>
                </div>
            </div> <!-- end .AN-PROFILE-SETTINGS -->
        </div> <!-- end .AN-TOPBAR-RIGHT-PART -->
    </header> <!-- end .AN-HEADER -->