
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>APK | <?=$title?></title>

    <!-- Fontfaces CSS-->
    <link href="<?=base_url('assets/theme/CoolAdmin/css/font-face.css')?>" rel="stylesheet" media="all">
    <link href="<?=base_url('assets/theme/CoolAdmin/vendor/font-awesome-4.7/css/font-awesome.min.css')?>" rel="stylesheet" media="all">
    <link href="<?=base_url('assets/theme/CoolAdmin/vendor/font-awesome-5/css/fontawesome-all.min.css')?>" rel="stylesheet" media="all">
    <link href="<?=base_url('assets/theme/CoolAdmin/vendor/mdi-font/css/material-design-iconic-font.min.css')?>" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?=base_url('assets/theme/CoolAdmin/vendor/bootstrap-4.1/bootstrap.min.css')?>" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?=base_url('assets/theme/CoolAdmin/vendor/animsition/animsition.min.css')?>" rel="stylesheet" media="all">
    <link href="<?=base_url('assets/theme/CoolAdmin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')?>" rel="stylesheet" media="all">
    <link href="<?=base_url('assets/theme/CoolAdmin/vendor/wow/animate.css')?>" rel="stylesheet" media="all">
    <link href="<?=base_url('assets/theme/CoolAdmin/vendor/css-hamburgers/hamburgers.min.css')?>" rel="stylesheet" media="all">
    <link href="<?=base_url('assets/theme/CoolAdmin/vendor/slick/slick.css')?>" rel="stylesheet" media="all">
    <link href="<?=base_url('assets/theme/CoolAdmin/vendor/select2/select2.min.css')?>" rel="stylesheet" media="all">
    <link href="<?=base_url('assets/theme/CoolAdmin/vendor/perfect-scrollbar/perfect-scrollbar.css')?>" rel="stylesheet" media="all">
    <!-- Extra CSS -->
	<?php $this->load->view($css)?>
    <!-- Main CSS-->
    <link href="<?=base_url('assets/theme/CoolAdmin/css/theme.css')?>" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        

        <!-- MENU SIDEBAR-->
        <?php $this->load->view('sidebar'); ?>
        <!-- END MENU SIDEBAR-->

        <!-- HEADER MOBILE-->
        <?php $this->load->view('header-mobile'); ?>
        <!-- END HEADER MOBILE-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php $this->load->view('header-desktop'); ?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                        <?php $this->load->view($content); ?>

                        <?php $this->load->view('footer'); ?>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!--Modal-->
	<?php $this->load->view($modal)?>

    <!-- Jquery JS-->
    <script src="<?=base_url('assets/theme/CoolAdmin/vendor/jquery-3.2.1.min.js')?>"></script>
    <!-- Bootstrap JS-->
    <script src="<?=base_url('assets/theme/CoolAdmin/vendor/bootstrap-4.1/popper.min.js')?>"></script>
    <script src="<?=base_url('assets/theme/CoolAdmin/vendor/bootstrap-4.1/bootstrap.min.js')?>"></script>
    <!-- Vendor JS       -->
    <script src="<?=base_url('assets/theme/CoolAdmin/vendor/slick/slick.min.js')?>">
    </script>
    <script src="<?=base_url('assets/theme/CoolAdmin/vendor/wow/wow.min.js')?>"></script>
    <script src="<?=base_url('assets/theme/CoolAdmin/vendor/animsition/animsition.min.js')?>"></script>
    <script src="<?=base_url('assets/theme/CoolAdmin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')?>">
    </script>
    <script src="<?=base_url('assets/theme/CoolAdmin/vendor/counter-up/jquery.waypoints.min.js')?>"></script>
    <script src="<?=base_url('assets/theme/CoolAdmin/vendor/counter-up/jquery.counterup.min.js')?>">
    </script>
    <script src="<?=base_url('assets/theme/CoolAdmin/vendor/circle-progress/circle-progress.min.js')?>"></script>
    <script src="<?=base_url('assets/theme/CoolAdmin/vendor/perfect-scrollbar/perfect-scrollbar.js')?>"></script>
    <script src="<?=base_url('assets/theme/CoolAdmin/vendor/chartjs/Chart.bundle.min.js')?>"></script>
    <script src="<?=base_url('assets/theme/CoolAdmin/vendor/select2/select2.min.js')?>">
    </script>
    <!-- Extra Javascript -->
	<?php $this->load->view($javascript)?>
    <!-- Main JS-->
    <script src="<?=base_url('assets/theme/CoolAdmin/js/main.js')?>"></script>

</body>

</html>
<!-- end document-->
