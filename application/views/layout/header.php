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

            <nav class=" backblack  " style="    background-size: contain;">
                    <div class="row" style="margin: auto">
                        <!--contact info-->
                        <div class="col-lg-5 col-md-4 col-sm-5 t_xs_align_c">
                            <nav class="d_inline_m m_right_10 m_xs_right_0 pull-left">
                               <ul class="hr_list stripe_list fs_small">
                                    <!-- Item With Sub -->
                                    <li>
                                        <a href="#" class="mn-has-sub "><i class="fa fa-phone"></i>  +(852) 2314 8016  </a>
                                    </li>
                                    
                                    
                                     <li >
                                    <a href="#" ><i class="fa fa-envelope"></i> vogue@voguetailor.com </a>
                                </li>
                               </ul>
                            </nav>
                   
                        </div>
                        <div class="col-lg-7 col-md-8 col-sm-7 t_align_r t_xs_align_c m_top_0 ">
                            <!--mini nav-->
                            <nav class="d_inline_m m_right_10 m_xs_right_0 pull-right" style="    margin-right: 30px;">
                                <ul class="hr_list stripe_list fs_small">
                                    <!-- Item With Sub -->
                                    <li>
                                        <a href="/" class="mn-has-sub "><i class="fa fa-home"></i> Home </a>
                                    </li>
                                    <!-- End Item With Sub -->

                                    <!-- Item With Sub -->

                                    <li>
                                        <a href="<?php echo site_url('Shop/aboutus'); ?>" class="mn-has-sub"><i class="fa fa-question-circle"></i> About Us </a>
                                    </li>

                                    <li>
                                        <a href="http://www.voguetailors.com" class="mn-has-sub"><i class="fa fa-shopping-bag"></i> Shop Now </a>
                                    </li>

                                    <li>
                                        <a href="<?php echo site_url('Shop/contactus'); ?>" class="mn-has-sub"><i class="fa fa-phone"></i> Contact Us</a>
                                    </li></ul>
                            </nav>
                            <br class="d_none d_xs_block">
                            <ul class="hr_list d_inline_b social_icons">
                                <li class="m_right_8"><a href="#" class="color_light  facebook   circle icon_wrap_size_1 d_block"><i class="icon-facebook-1"></i></a></li>
                                <li class="m_right_8"><a href="#" class="color_light  twitter  circle icon_wrap_size_1 d_block"><i class="icon-twitter-1"></i></a></li>
                                <li class="m_right_8"><a href="#" class="color_light  googleplus  goo circle icon_wrap_size_1 d_block"><i class="icon-gplus-1"></i></a></li>
                                <li class="m_right_8"><a href="#" class="color_light  instagram  circle icon_wrap_size_1 d_block"><i class="icon-instagramm"></i></a></li>
                                <li class="m_right_8"><a href="#" class="color_light  youtube  circle icon_wrap_size_1 d_block"><i class="icon-youtube"></i></a></li>
                            </ul>


                        </div>
                    </div>
            </nav>
            <!-- Navigation panel -->
            <nav class="main-nav lightgrey  " style="    background-size: contain;">
                <div class="full-wrapper relative clearfix">
                    <!-- Logo ( * your text or image into link tag *) -->
                    <center>
                    <div class="">
                        <a href="/" class="logo">
                            <img src="<?php echo base_url(); ?>assets/images/logodddd.png" alt="" style="    height: 100px;" />
                        </a>
                    </div>
                    </center>

                </div>
            </nav>
            <!-- End Navigation panel -->







