<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title> SIGI - Pemerintahan Kabupaten </title>

    <meta name="keywords" content="Sistem Informasi Rupa Bumi Indonesia || Badan Informasi Geospasial" />
    <meta name="description" content="Sistem Informasi Rupa Bumi Indonesia || Badan Informasi Geospasial">
    <meta name="author" content="Vitrua Internasional Pratama">

    <!-- Full Calender -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/temp/vendor/fullcalendar/dist/fullcalendar.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/temp/vendor/fullcalendar/dist/fullcalendar.print.min.css"
        media="print">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/temp/img/ms-icon-70x70.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/temp/images/fav.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet"
        type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/temp/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/temp/vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/temp/vendor/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/temp/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/temp/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/temp/vendor/magnific-popup/magnific-popup.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/temp/css/theme.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/temp/css/theme-elements.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/temp/css/theme-blog.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/temp/css/theme-shop.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/temp/css/theme-animate.css">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/temp/vendor/rs-plugin/css/settings.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/temp/vendor/rs-plugin/css/layers.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/temp/vendor/rs-plugin/css/navigation.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/temp/vendor/circle-flip-slideshow/css/component.css"
        media="screen">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/temp/css/skins/default.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/temp/css/custom.css">

    <!-- Head Libs -->
    <script src="<?php echo base_url(); ?>assets/temp/vendor/modernizr/modernizr.js"></script>

    <!-- Jquery -->
    <script src="<?php echo base_url(); ?>assets/temp/vendor/jquery/jquery.js"></script>

    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/temp/assets/vendor/bootstrap-datepicker/css/datepicker.css">

    <!-- celender -->
    <link href="<?php echo base_url(); ?>assets/temp/css/Calendar.css" rel="stylesheet">
    <style>
        html {
            box-sizing: border-box;
            font-size: 10px;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            color: #333;
            font-size: 1.6rem;
            background-color: #FAFAFA;
            -webkit-font-smoothing: antialiased;
        }

        .logo {
            margin: 1.6rem auto;
            text-align: center;
        }

        a,
        a:visited {
            color: #0A9297;
        }

        footer {
            /*text-align: center;*/
            margin: 1.6rem 0;
        }

        h1 {
            text-align: center;
        }



        .demo-picked {
            font-size: 1.2rem;
            text-align: center;
        }

        .demo-picked span {
            font-weight: bold;
        }
    </style>

</head>

<body>

    <div class="body">
        <header id="header" class="header-no-border-bottom" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 148, "stickySetTop": "-148px", "stickyChangeLogo": false}'>
            <div class="header-body">
                <div class="header-container container">
                    <div class="header-row">
                        <div class="header-column">
                            <div class="header-logo">
                                <a href="<?php echo site_url(); ?>">
                                    <img alt="Badan Informasi Geospasial" width="500" height="82" data-sticky-width="82"
                                        data-sticky-height="40" data-sticky-top="33" src="<?php echo base_url(); ?>assets/temp/img/sigi-logo.png">
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="header-container header-nav header-nav-bar header-nav-bar-primary">
                    <div class="container">
                        <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
                            <i class="fa fa-bars"></i>
                        </button>
                        <div class="header-nav-main header-nav-main-light header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
                            <nav>
                                <ul class="nav nav-pills" id="mainNav">
                                    <li> <a href="<?php echo site_url(); ?>"> Home </a> </li>
                                    <li> <a href="<?php echo site_url('Data'); ?>"> Data </a> </li>
                                    <li> <a href="<?php echo site_url('Data/stats'); ?>"> Stats </a> </li>
                                    <li> <a href="<?php echo site_url('Data/about'); ?>"> About Us</a> </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div role="main" class="main">
            <?php echo $contents; ?>
        </div>
        <footer id="footer">
            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p align="center">Created and maintained by: SIGI 2018</p>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
    </div>
    </div>
    <!-- baru -->
    <script src="<?php echo base_url(); ?>assets/temp/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

    <!-- Vendor -->
    <script src="<?php echo base_url(); ?>assets/temp/vendor/jquery.appear/jquery.appear.js"></script>
    <script src="<?php echo base_url(); ?>assets/temp/vendor/jquery.easing/jquery.easing.js"></script>
    <script src="<?php echo base_url(); ?>assets/temp/vendor/jquery-cookie/jquery-cookie.js"></script>
    <script src="<?php echo base_url(); ?>assets/temp/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/temp/vendor/common/common.js"></script>
    <script src="<?php echo base_url(); ?>assets/temp/vendor/jquery.validation/jquery.validation.js"></script>
    <script src="<?php echo base_url(); ?>assets/temp/vendor/jquery.stellar/jquery.stellar.js"></script>
    <script src="<?php echo base_url(); ?>assets/temp/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="<?php echo base_url(); ?>assets/temp/vendor/jquery.gmap/jquery.gmap.js"></script>
    <script src="<?php echo base_url(); ?>assets/temp/vendor/jquery.lazyload/jquery.lazyload.js"></script>
    <script src="<?php echo base_url(); ?>assets/temp/vendor/isotope/jquery.isotope.js"></script>
    <script src="<?php echo base_url(); ?>assets/temp/vendor/owl.carousel/owl.carousel.js"></script>
    <script src="<?php echo base_url(); ?>assets/temp/vendor/magnific-popup/jquery.magnific-popup.js"></script>
    <script src="<?php echo base_url(); ?>assets/temp/vendor/vide/vide.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="<?php echo base_url(); ?>assets/temp/js/theme.js"></script>

    <!-- Current Page Vendor and Views -->
    <script src="<?php echo base_url(); ?>assets/temp/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/temp/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/temp/vendor/circle-flip-slideshow/js/jquery.flipshow.js"></script>
    <script src="<?php echo base_url(); ?>assets/temp/js/views/view.home.js"></script>

    <!-- Theme Custom -->
    <script src="<?php echo base_url(); ?>assets/temp/js/custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="<?php echo base_url(); ?>assets/temp/js/theme.init.js"></script>

    <!-- fullCalendar -->
    <script src="<?php echo base_url(); ?>assets/temp/vendor/moment/moment.js"></script>
    <script src="<?php echo base_url(); ?>assets/temp/vendor/fullcalendar/dist/fullcalendar.min.js"></script>

    <!-- Data table -->

    <!-- Specific Page Vendor -->
    <script src="<?php echo base_url(); ?>assets/temp/assets/vendor/select2/select2.js"></script>
    <script src="<?php echo base_url(); ?>assets/temp/assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets/temp/assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/temp/assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>

    <!-- Examples -->
    <script src="<?php echo base_url(); ?>assets/temp/assets/javascripts/tables/examples.datatables.default.js"></script>
    <script src="<?php echo base_url(); ?>assets/temp/assets/javascripts/tables/examples.datatables.row.with.details.js"></script>
    <script src="<?php echo base_url(); ?>assets/temp/assets/javascripts/tables/examples.datatables.tabletools.js"></script>

    <script type="text/javascript">
    var base_url = '<?php echo base_url(); ?>';
    var site_url = '<?php echo site_url(); ?>';
    </script>


</body>

</html>