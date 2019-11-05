<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>Ubold-Theme | Themeforest.com</title>
    <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
    <meta name="description" content="Ubold-Theme |  Themeforest.com">
    <meta name="author" content="Ubold-Theme">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

</head>

<body class="admin-layout-page">

    <!-- Start: Main -->
    <div id="main">

<!-- Start: Content-Wrapper -->
  <section id="content_wrapper">

    <!-- Begin: Content -->
    <section id="content" class="table-layout animated fadeIn">
        <!-- begin: .tray-center -->
        <div class="tray tray-center p30 va-t posr animated-delay animated-long" data-animate='["800","fadeIn"]'>
            <div class="col-md-12">
                <hr>
            </div>

            <!-- Login 2 -->
            <div class="admin-form tab-pane active" id="login2" role="tabpanel">
                <div class="col-md-2"></div>
                <div class="panel panel-primary heading-border col-md-6">
                    <div class="panel-heading">
                        <span class="panel-title"><i class="fa fa-sign-in"></i>Login</span>
                    </div>
                    <!-- end .form-header section -->

                    <form method="post" action="/" id="form-login2">
                        <div class="panel-body p25 pt10">
                            <div class="section row">
                                <div class="col-md-12 pl30">
                                    <div class="section-divider mv40">
                                        <span>User Login</span>
                                    </div>
                                    <!-- .tagline -->

                                    <div class="section">
                                        <label for="email" class="field prepend-icon">
                                            <input type="text" name="email" id="email" class="gui-input" placeholder="Enter Email">
                                            <label for="email" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                    <div class="section">
                                        <label for="password" class="field prepend-icon">
                                            <input type="text" name="password" id="password" class="gui-input" placeholder="Enter password">
                                            <label for="password" class="field-icon"><i class="fa fa-lock"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                </div>
                                <!-- end .colm section -->

                            </div>
                            <!-- end .section row section -->
                            <!-- end .form-body section -->
                            <div class="panel-footer">
                                <button type="submit" class="button btn-primary text-right">Sign in</button>
                            </div>
                            <!-- end .form-footer section -->
                        </div>
                    </form>
                </div>
                <!-- end .admin-form section -->
            </div>
            <!-- end: .admin-form -->
        </div>
        </div>
    </section>
  </section>

    <!-- Google Map API -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

    <!-- jQuery -->
    <script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Theme Javascript -->
    <script type="text/javascript" src="assets/js/utility/utility.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/demo.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core
            Core.init();

            // Init Theme Core
            Demo.init();

            // Custom page animation
            setTimeout(function() {
                $('.custom-nav-animation li').each(function(i, e) {
                    var This = $(this);
                    var timer = setTimeout(function() {
                        This.addClass('animated animated-short zoomIn');
                    }, 50 * i);
                });
            }, 500);


            $('.animation-nav').click(function() {
                $('.animation-nav').removeClass('btn-primary').addClass('btn-default');
                $(this).addClass('btn-primary');
            });

            // Form switcher nav
            var formSwitches = $('.admin-form-list a');

            formSwitches.on('click', function() {
                formSwitches.removeClass('item-active');
                $(this).addClass('item-active')

                if ($(this).attr('href') === "#contact3") {
                    setTimeout(function() {
                        initialize();
                    },100);
                }

            });

            // Contact form - Gmap
            function initialize() {
                var mapOptions = {
                    zoom: 10,
                    center: new google.maps.LatLng(29.760193, -95.369390),
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };

                var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
                var marker = new google.maps.Marker({
                    map: map,
                    draggable: false,
                    position: new google.maps.LatLng(29.760193, -95.369390)
                });
            }
            google.maps.event.addDomListener(window, 'resize', initialize);
            google.maps.event.addDomListener(window, 'load', initialize);


        });
    </script>
    <!-- END: PAGE SCRIPTS -->

</body>

</html>
