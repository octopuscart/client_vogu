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
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/style-responsive.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/animate.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/vertical-rhythm.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/magnific-popup.css">        
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/rev-slider.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/rs-plugin/css/settings.css" media="screen" /> 




        <!-- Latest compiled and minified CSS -->


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
            "title" => "INSIGHTS",
            "submenu" => "yes",
            "link" => site_url("/"),
            "submenuitems" => [
                array(
                    "title" => "About Us",
                    "link" => site_url("Shop/aboutus"),
                ),
                array(
                    "title" => "FAQ's",
                    "link" => site_url("Shop/faq")
                ),
                array(
                    "title" => "Terms & Conditions",
                    "link" => site_url("Shop/tnc")
                ),
            ]),
        array(
            "title" => "Shop Online",
            "submenu" => "yes",
            "link" => site_url('Product/ProductList/2/0'),
            "submenuitems" => [
                array(
                    "title" => "Shirts",
                    "link" => site_url('Product/ProductList/1/0'),),
                array(
                    "title" => "Suits",
                    "link" => site_url('Product/ProductList/2/0')),
                array(
                    "title" => "Pants",
                    "link" => site_url('Product/ProductList/3/0'),),
                array(
                    "title" => "Jackets",
                    "link" => site_url('Product/ProductList/4/0'),),
                array(
                    "title" => "Tuxedo Suits",
                    "link" => site_url('Product/ProductList/5/0'),),
                array(
                    "title" => "Linings",
                    "link" => site_url('Product/ProductList/8/0'),),
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
            "link" => site_url("Shop/lookbook"),
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

<!--        <div class="header-top-inner-top">
            <div class="container">
                <h2>
                    <marquee>
                        SEASONAL 20% OFF ON ALL ONLINE ORDERS TILL 31ST AUGUST 2020
                    </marquee>
                </h2>
            </div>
        </div>-->


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
            <nav class="main-nav light js-stick">
                <div class="full-wrapper relative clearfix">
                    <!-- Logo ( * your text or image into link tag *) -->
                    <div class="nav-logo-wrap local-scroll">
                        <a href="<?php echo site_url("/"); ?>" class="logo">
                            <img src="<?php echo base_url(); ?>assets/images/logo21.png" alt="Company logo" />
                        </a>
                    </div>
                    <div class="mobile-nav" role="button" tabindex="0">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Menu</span>
                    </div>

                    <!-- Main Menu -->
                    <div class="inner-nav desktop-nav">
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
                                                <ul class=''>
                                                    <?php
                                                    foreach ($mvalue["submenuitems"] as $smkey => $smvalue) {
                                                        ?>   
                                                        <li>
                                                            <a class="" href="<?php echo $smvalue['link']; ?>">
                                                                <?php echo $smvalue['title']; ?>
                                                            </a>

                                                        </li>

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
                            <a href="<?php echo site_url('Cart/details'); ?>" style="height: 75px; line-height: 75px;"><i class="fa fa-shopping-cart"></i> Cart({{globleCartData.total_quantity}})</a>
                        </li>
                        </ul>
                    </div>
                    <!-- End Main Menu -->


                </div>
            </nav>
            <!-- End Navigation panel -->


            <!-- End Sub Column -->

            <!-- End Navigation panel -->







