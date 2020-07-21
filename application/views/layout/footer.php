<!-- Contact Section -->

<!-- End Contact Section -->


<!--             Google Map 
            <div class="google-map">
                
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14766.265299096092!2d114.168786!3d22.2944119!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaa36f76b04a6a4a4!2sVogue+Tailors!5e0!3m2!1sen!2sin!4v1540021794499" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                
            </div>
             End Google Map -->


<!-- Foter -->
<footer class="page-section bg-gray-lighter footer " style="padding: 0px;border-top: 2px solid #bfa95c">
    <div class="container">

        <section class="page-section" id="contact" style="padding: 0px">
            <div class="container relative">

                <h2 class="section-title font-alt mb-70 mb-sm-40">
                    Contact
                </h2>

                <div class="row mb-10 mb-xs-40">

                    <div class="col-md-12">
                        <div class="row">

                            <!-- Phone -->
                            <div class="col-lg-3 pt-20 pb-20 pb-xs-0">
                                <div class="contact-item">

                                    <div class="ci-title font-alt" style="text-align: left;">
                                        <div class="ci-icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>  Email
                                    </div>
                                    <div class="ci-text" style="text-align: left;">
                                        <a href="mailto:vogue@voguetailor.com">vogue@voguetailor.com</a>
                                    </div>
                                </div>
                                <br/>
                                <br/>


                                <div class="contact-item">
                                    <div class="ci-icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="ci-title font-alt" style="text-align: left;">
                                        Call Us
                                    </div>
                                    <div class="ci-text" style="text-align: left;">
                                        +(852) 2314 8016
                                    </div>
                                </div>


                            </div>
                            <!-- End Phone -->

                            <!-- Address -->
                            <div class="col-lg-6 pt-20 pb-20 pb-xs-0 contactupper" style="">
                                <div class="contact-item">
                                    <div class="ci-icon">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="ci-title font-alt" style="text-align: left;">
                                        Shop Address
                                    </div>
                                    <div class="ci-text" style="text-align: left;">
                                        B6, Star House Plaza, Star House (Next to Starbucks), <br/>
                                        3 Salisbury Road, Tsim Sha Tsui, Kowloon, Hong Kong
                                    </div>
                                    <br/>
                                    <div class="ci-title font-alt" style="text-align: left;">
                                        Showroom
                                    </div>
                                    <div class="ci-text" style="text-align: left;">
                                        522A, 5/F, Star House, <br/>
                                        3 Salisbury Road, Tsim Sha Tsui, Kowloon, Hong Kong
                                    </div>
                                </div>
                            </div>
                            <!-- End Address -->

                            <!-- Email -->
                            <div class="col-lg-3 pt-20 pb-20 pb-xs-0">
                                <div class="local-scroll mb-30 wow fadeInUp" data-wow-duration="1.2s">
                                    <a href="#top"><img class="quantitylogo" src="<?php echo base_url(); ?>assets/images/qclogo.png" /></a>
                                </div>
                            </div>
                            <!-- End Email -->

                        </div>
                    </div>

                </div>



            </div>
        </section>

        <div class='keywordlist' style='text-transform: capitalize;
    font-size: 17px;
    font-weight: 300;
    border-top: 1px solid #e2d7d7;padding:20px 0px;
    border-bottom: 1px solid #e2d7d7;'>
            <?php echo seo_keywords;?>
         </div>

        <!-- Footer Logo -->


        <!--        <div class="local-scroll mb-30 wow fadeInUp" data-wow-duration="1.2s">
                    <a href="#top"><img src="<?php echo base_url(); ?>assets/images/logo21.png" width="78" height="36" alt="" /></a>
                </div>-->

        <!-- End Footer Logo -->
        <div class="local-scroll mb-30 wow fadeInUp" data-wow-duration="1.2s">
            <div class="newsletter-area">
                <h3>Newsletter Sign Up!</h3>
                <center>
                    <form class="" method="post" action='<?php echo site_url("Shop/subscribe") ?>'>

                        <div class="input-group" style="width: 300px;">
                            <input type="email" name="email" class="form-control" placeholder="E-mail . . ." required="">



                            <span class="input-group-addon">
                                <button type="submit" name="submit" value="submit" >
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </button>  
                            </span>


                        </div>
                        <div class="row" style="width: 200px;font-size: 17px;line-height: 37px;margin-top: 10px;">
                            <div class="col-md-2">
                                <?php echo $rand_1 = rand(0, 10); ?>
                                <input type="hidden" class="form-control" name="rand_1" value="<?php echo $rand_1; ?>" />
                            </div>
                            <div class="col-md-2">+</div>
                            <div class="col-md-2">
                                <?php echo $rand_2 = rand(0, 10); ?>
                                <input type="hidden" class="form-control" name="rand_2"  value="<?php echo $rand_2; ?>"/>
                            </div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="total"/>
                            </div>
                        </div>
                    </form>
                </center>
            </div>
        </div>
        <!-- Social Links -->
        <div class="footer-social-links mb-30 mb-xs-60">
            <a href="https://www.facebook.com/VogueTailors/" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/voguetailors" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>

        </div>
        <!-- End Social Links -->  

        <!-- Footer Text -->
        <div class="footer-text">

            <!-- Copyright -->
            <div class="footer-copy font-alt">
                <a href="http://www.voguetailors.com/" target="_blank">&copy; voguetailors.com <?php echo date("Y"); ?></a>.
            </div>
            <!-- End Copyright -->

            <div class="footer-made">
                TAILORING WITH THE BEST IN CUT, CLOTH, CREATION
            </div>

        </div>
        <!-- End Footer Text --> 

    </div>


    <!-- Top Link -->
    <div class="local-scroll">
        <a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a>
    </div>
    <!-- End Top Link -->

</footer>
<!-- End Foter -->


</div>
<!-- End Page Wrap -->


</body>

<script>
    var sitebaseurlcontact = "<?php echo site_url("Pages/contactustest"); ?>";
</script>

<!--Libs-->


<!-- JS -->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme/js/bootstrap.min.js"></script>        
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme/js/SmoothScroll.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme/js/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme/js/jquery.localScroll.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme/js/jquery.viewport.mini.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme/js/jquery.countTo.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme/js/jquery.appear.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme/js/jquery.sticky.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme/js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme/js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme/js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme/js/jquery.magnific-popup.min.js"></script>
<!-- Replace test API Key "AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg" with your own one below 
**** You can get API Key here - https://developers.google.com/maps/documentation/javascript/get-api-key -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme/js/gmap3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme/js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme/js/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme/js/jquery.simple-text-rotator.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme/js/all.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme/js/contact-form.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme/js/jquery.ajaxchimp.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme/js/rev-slider.js"></script>        
<!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->





<!-- type ahead-->
<script src="<?php echo base_url(); ?>assets/search/handlebars.js" type="text/javascript"></script>

<!-- type ahead-->
<script src="<?php echo base_url(); ?>assets/search/typeahead.bundle.js" type="text/javascript"></script>
<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/shopController.js"></script>

</html>