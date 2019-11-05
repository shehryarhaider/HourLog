<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>HourLog | Managment System | Users</title>
    <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
    <meta name="description" content="Ubold - ThemeForest.com">
    <meta name="author" content="Ubold">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font CSS (Via CDN) -->

    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/skin/default_skin/css/theme.css">

    <!-- Admin Panels CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin-tools/admin-plugins/admin-panels/adminpanels.css">

    <!-- Datatables CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('')}}/vendor/plugins/datatables/media/css/dataTables.bootstrap.css">

    <!-- Dropzone CSS -->
    <link rel="stylesheet" href="{{url('')}}/vendor/plugins/dropzone/css/dropzone.css">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin-tools/admin-forms/css/admin-forms.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{url('')}}/assets/img/favicon.ico">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style>
        .dt-panelmenu.clearfix {
            border: none;
            background: none;
        }

        thead>tr>th {
            border-right: 1px solid #8080805c;
        }
    </style>
</head>

<body class="dashboard-page sb-l-o sb-r-c">

    <!-- Start: Main -->
    <div id="main">


        @include('layouts.header')
        @include('layouts.sidebar')
        @yield('content')

    </div>
    <!-- End: Main -->

    <!-- BEGIN: PAGE SCRIPTS -->

    <!-- jQuery -->
    <script type="text/javascript" src="{{url('')}}/vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="{{url('')}}/vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="{{url('')}}/assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Datatables -->
    <script type="text/javascript" src="{{url('')}}/vendor/plugins/datatables/media/js/jquery.dataTables.js"></script>

    <!-- Datatables Bootstrap Modifications  -->
    <script type="text/javascript" src="{{url('')}}/vendor/plugins/datatables/media/js/dataTables.bootstrap.js"></script>

    <!-- Theme Javascript -->
    <script type="text/javascript" src="{{url('')}}/assets/js/utility/utility.js"></script>
    <script type="text/javascript" src="{{url('')}}/assets/js/main.js"></script>
    <script type="text/javascript" src="{{url('')}}/assets/js/demo.js"></script>

     <!-- Dropzone JS -->
     <script type="text/javascript" src="{{url('')}}/vendor/plugins/dropzone/dropzone.min.js"></script>

    <!-- Admin Panels  -->
    <script type="text/javascript" src="{{url('')}}/assets/admin-tools/admin-plugins/admin-panels/json2.js"></script>
    <script type="text/javascript" src="{{url('')}}/assets/admin-tools/admin-plugins/admin-panels/jquery.ui.touch-punch.min.js">
    </script>
    <script type="text/javascript" src="{{url('')}}/assets/admin-tools/admin-plugins/admin-panels/adminpanels.js"></script>

    <!-- Page Javascript -->
    <script type="text/javascript" src="{{url('')}}/assets/js/pages/widgets.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {

            "use strict";

            // Init Theme Core
            Core.init({
                sbm: "sb-l-c",
            });


            $('#datatable2').dataTable();
            // Init Widget Demo JS
            // demoHighCharts.init();

            // Because we are using Admin Panels we use the OnFinish
            // callback to activate the demoWidgets. It's smoother if
            // we let the panels be moved and organized before
            // filling them with content from various plugins

            // Init plugins used on this page
            // HighCharts, JvectorMap, Admin Panels

            // Init Admin Panels on widgets inside the ".admin-panels" container
            $('.admin-panels').adminpanel({
                grid: '.admin-grid',
                draggable: true,
                preserveGrid: true,
                mobile: false,
                callback: function () {
                    bootbox.confirm('<h3>A Custom Callback!</h3>', function () {});
                },
                onFinish: function () {
                    $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onload');

                    // Init the rest of the plugins now that the panels
                    // have had a chance to be moved and organized.
                    // It's less taxing to organize empty panels
                    demoHighCharts.init();
                    runVectorMaps();

                    // We also refresh any "in-view" waypoints to ensure
                    // the correct position is being calculated after the
                    // Admin Panels plugin moved everything
                    Waypoint.refreshAll();

                },
                onSave: function () {
                    $(window).trigger('resize');
                }
            });

            // Dropzone autoattaches to "dropzone" class.
            // Configure Dropzone options
            Dropzone.options.dropZone = {
                paramName: "file", // The name that will be used to transfer the file
                maxFilesize: 0, // MB

                addRemoveLinks: true,
                dictDefaultMessage: '<i class="fa fa-cloud-upload"></i> \
         <span class="main-text"><b>Drop Files</b> to upload</span> <br /> \
         <span class="sub-text">(or click)</span> \
        ',
                dictResponseError: 'Server not Configured'
            };

            Dropzone.options.dropZone2 = {
                paramName: "file", // The name that will be used to transfer the file
                maxFilesize: 0, // MB

                addRemoveLinks: true,
                dictDefaultMessage: '<i class="fa fa-cloud-upload"></i> \
         <span class="main-text"><b>Drop Files</b> to upload</span> <br /> \
         <span class="sub-text">(or click)</span> \
        ',
                dictResponseError: 'Server not Configured'
            };


            // Widget VectorMap
            function runVectorMaps() {

                // Jvector Map Plugin
                var runJvectorMap = function () {
                    // Data set
                    var mapData = [900, 700, 350, 500];
                    // Init Jvector Map
                    $('#WidgetMap').vectorMap({
                        map: 'us_lcc_en',
                        //regionsSelectable: true,
                        backgroundColor: 'transparent',
                        series: {
                            markers: [{
                                attribute: 'r',
                                scale: [3, 7],
                                values: mapData
                            }]
                        },
                        regionStyle: {
                            initial: {
                                fill: '#E5E5E5'
                            },
                            hover: {
                                "fill-opacity": 0.3
                            }
                        },
                        markers: [{
                            latLng: [37.78, -122.41],
                            name: 'San Francisco,CA'
                        }, {
                            latLng: [36.73, -103.98],
                            name: 'Texas,TX'
                        }, {
                            latLng: [38.62, -90.19],
                            name: 'St. Louis,MO'
                        }, {
                            latLng: [40.67, -73.94],
                            name: 'New York City,NY'
                        }],
                        markerStyle: {
                            initial: {
                                fill: '#a288d5',
                                stroke: '#b49ae0',
                                "fill-opacity": 1,
                                "stroke-width": 10,
                                "stroke-opacity": 0.3,
                                r: 3
                            },
                            hover: {
                                stroke: 'black',
                                "stroke-width": 2
                            },
                            selected: {
                                fill: 'blue'
                            },
                            selectedHover: {}
                        },
                    });
                    // Manual code to alter the Vector map plugin to
                    // allow for individual coloring of countries
                    var states = ['US-CA', 'US-TX', 'US-MO',
                        'US-NY'
                    ];
                    var colors = [bgWarningLr, bgPrimaryLr, bgInfoLr, bgAlertLr];
                    var colors2 = [bgWarning, bgPrimary, bgInfo, bgAlert];
                    $.each(states, function (i, e) {
                        $("#WidgetMap path[data-code=" + e + "]").css({
                            fill: colors[i]
                        });
                    });
                    $('#WidgetMap').find('.jvectormap-marker')
                        .each(function (i, e) {
                            $(e).css({
                                fill: colors2[i],
                                stroke: colors2[i]
                            });
                        });
                }

                if ($('#WidgetMap').length) {
                    runJvectorMap();
                }
            }

        });
    </script>

    <!-- END: PAGE SCRIPTS -->

</body>

</html>
