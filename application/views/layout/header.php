<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <?php
        meta_tags();
        ?>
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url() . 'assets/images/logof.png'; ?>" type="image/x-icon">
        <link rel="icon" href="<?php echo base_url() . 'assets/images/logof.png'; ?>" type="image/x-icon">

        <link rel="shortcut icon" href="<?php echo base_url() . 'assets/images/logof.png'; ?>"/>
        <link rel="apple-touch-icon image_src" href="<?php echo base_url() . 'assets/images/logof.png'; ?>"/>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->




        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/style-responsive.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/animate.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/vertical-rhythm.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/magnific-popup.css">        
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/rev-slider.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/rs-plugin/css/settings.css" media="screen" /> 




        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


        <!--theme css-->
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/theme/css/style.css">
        <!--head libs-->
<!--        <script src="<?php echo base_url(); ?>assets/theme/js/jquery-2.1.0.min.js"></script>
        -->


        <link href="<?php echo base_url(); ?>assets/theme/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">

        <link href="<?php echo base_url(); ?>assets/theme/css/customstyle.css" rel="stylesheet" type="text/css" media="all" />


        <!--sweet alert-->
        <script src="<?php echo base_url(); ?>assets/theme/sweetalert2/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/sweetalert2/sweetalert2.min.css">

        <!--angular js-->
        <script src="<?php echo base_url(); ?>assets/theme/angular/angular.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/theme/js/jquery-1.11.2.min.js"></script>


    </head>  
    <?php
    $menuitems = [
        array(
            "title" => "Home",
            "submenu" => "yes",
            "link" => '#',
            "submenuitems" => [
                array(
                    "title" => "About Us",
                    "link" => site_url("Shop/aboutus"),),
                array(
                    "title" => "FAQ's",
                    "link" => '#',),
            ]),
        array(
            "title" => "Customize Now",
            "submenu" => "yes",
            "link" => '#',
            "submenuitems" => [
                array(
                    "title" => "Suits",
                    "link" => '#',),
                array(
                    "title" => "Jackets",
                    "link" => '#',),
                array(
                    "title" => "Shirts",
                    "link" => '#',),
                array(
                    "title" => "Pants",
                    "link" => '#',)
            ]
        ),
        array(
            "title" => "Our Clients",
            "submenu" => "no",
            "link" => '#',
        ),
        array(
            "title" => "Blog",
            "submenu" => "no",
            "link" => site_url("Shop/blog"),
        ),
        array(
            "title" => "Look Book",
            "submenu" => "no",
            "link" => '#',
        ),
        array(
            "title" => "Contact Us",
            "submenu" => "no",
            "link" => site_url('Shop/contactus'),
        ),
    ];
    ?>
    <body ng-app="App">
        
        <!-- Page Loader -->        
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <!-- End Page Loader -->

        <div ng-controller="ShopController" class="page">
            <script>
                var App = angular.module('App', []).config(function ($interpolateProvider, $httpProvider) {
                //$interpolateProvider.startSymbol('{$');
                //$interpolateProvider.endSymbol('$}');
                $httpProvider.defaults.headers.common = {};
                        $httpProvider.defaults.headers.post = {};
                });
                        var baseurl = "<?php echo base_url(); ?>index.php/";
                        var imageurlg = "<?php echo imageserver; ?>";
                        var globlecurrency = "<?php echo globle_currency; ?>";
                        var avaiblecredits = 0;</script>
            <!--header-->

  
            <!-- Navigation panel -->
            <nav class="main-nav lightgrey  " style="    background-size: contain;">
                <div class="full-wrapper relative clearfix">
                    <!-- Logo ( * your text or image into link tag *) -->
                    <div class="nav-logo-wrap local-scroll">
                        <a href="/" class="logo">
                            <img src="<?php echo base_url(); ?>assets/images/logo21.png" alt="" />
                        </a>
                    </div>
                    <div class="mobile-nav">
                        <i class="fa fa-bars"></i>
                    </div>
                    
                    <!-- Main Menu -->
                    <div class="inner-nav desktop-nav">
                        <ul class="clearlist">
                            
                            <!-- Item With Sub -->
                            <li>
                                <a href="/" class="mn-has-sub "><i class="fa fa-home"></i> Home </a>
                            </li>
                            <!-- End Item With Sub -->
                            
                            <!-- Item With Sub -->
                            
                            <li>
                                <a href="#" class="mn-has-sub"><i class="fa fa-question-circle"></i> About Us </a>
                            </li>
                            
                             <li>
                                <a href="http://www.voguetailors.com" class="mn-has-sub"><i class="fa fa-shopping-bag"></i> Shop Now </a>
                            </li>
                            
                             <li>
                                 <a href="<?php echo site_url('Shop/contactus');?>" class="mn-has-sub"><i class="fa fa-phone"></i> Contact Us</a>
                            </li>
                           
                            
                        </ul>
                    </div>
                    <!-- End Main Menu -->
                    

                </div>
            </nav>
            <!-- End Navigation panel -->







