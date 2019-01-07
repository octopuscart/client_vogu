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
            "title" => "Order Now",
            "submenu" => "yes",
            "link" => '#',
            "submenuitems" => [
                array(
                    "title" => "Suits",
                    "link" => site_url('Product/ProductList/2/0')),
                array(
                    "title" => "Jackets",
                    "link" => site_url('Product/ProductList/4/0'),),
                array(
                    "title" => "Shirts",
                    "link" => site_url('Product/ProductList/1/0'),),
                array(
                    "title" => "Pants",
                    "link" => site_url('Product/ProductList/3/0'),),
            ]
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

        <div ng-controller="ShopController" class="page"  id="top">
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
            <nav class="navbar navbar-default" style="margin-bottom: 0px;">
                <div class="">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-phone"></i>  +(852) 2314 8016</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> vogue@voguetailor.com</a></li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="m_right_8"><a href="#" class="color_light  facebook   circle icon_wrap_size_1 d_block"><i class="fa fa-facebook"></i></a></li>
                                <li class="m_right_8"><a href="#" class="color_light  twitter  circle icon_wrap_size_1 d_block"><i class="fa fa-twitter"></i></a></li>
                                <li class="m_right_8"><a href="#" class="color_light  googleplus  goo circle icon_wrap_size_1 d_block"><i class="fa fa-instagram"></i></a></li>
                                <li class="m_right_8"><a href="#" class="color_light  youtube  circle icon_wrap_size_1 d_block"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
             <!-- Navigation panel -->
            <nav class="main-nav lightgrey  " style="    background-size: contain;">
                <div class="full-wrapper relative clearfix">
                    <!-- Logo ( * your text or image into link tag *) -->
                    <center>
                    <div class="">
                        <a href="/" class="logo">
                            <img src="https://www.voguetailorhk.com/assets/images/logo21.png" alt="" style="    height: 100px;" />
                        </a>
                    </div>
                    </center>

                </div>
            </nav>
            <!-- End Navigation panel -->
            <nav class="main-nav js-stick">
                <div class="full-wrapper relative clearfix">
                    <!-- Logo ( * your text or image into link tag *) -->
<!--                    <div class="nav-logo-wrap local-scroll">
                        <a href="<?php echo site_url(); ?>" class="logo">
                            <img src="<?php echo base_url(); ?>assets/images/logodddd.png" alt="" />
                        </a>
                    </div>-->


                    <div class="mobile-nav">
                        <i class="fa fa-bars"></i>
                    </div>
<center>
                    <!-- Main Menu -->
                    <div class="inner-nav desktop-nav" style="float: none;">
                        <ul class="clearlist">

                            <!-- Item With Sub -->

                            <?php
                            foreach ($menuitems as $mkey => $mvalue) {
                                ?>   


                                <li>
                                    <a href="<?php echo $mvalue['link']; ?>" class="<?php echo $mvalue['submenu'] == 'yes' ? 'mn-has-sub' : '' ?>">
                                        <?php echo $mvalue['title']; ?> <?php echo $mvalue['submenu'] == 'yes' ? '<i class="fa fa-angle-down"></i>' : '' ?>
                                    </a>

                                    <?php
                                    if ($mvalue['submenu'] == 'yes') {
                                        ?>
                                        <!-- Sub Multilevel -->
                                        <ul class="mn-sub mn-has-multi">

                                            <!-- Sub Column -->
                                            <li class="mn-sub-multi">
                                                <ul>
                                                    <?php
                                                    foreach ($mvalue["submenuitems"] as $smkey => $smvalue) {
                                                        ?>   
                                                        <li>
                                                            <a href="<?php echo $smvalue['link']; ?>"><?php echo $smvalue['title']; ?></a>
                                                        </li>
                                                        <?php
                                                    }
                                                    ?>
                                                </ul>
                                            </li>
                                        </ul>
                                        <?php
                                    }
                                    ?>
                                </li>
                                <?php
                            }
                            ?>
                            <li>
                                <a href="#" style="height: 75px; line-height: 75px;"><i class="fa fa-shopping-cart"></i> Cart(0)</a>
                            </li>

                        </ul>
                    </div>
</center>
                </div>
            </nav>


            <!-- End Sub Column -->

            <!-- End Navigation panel -->







