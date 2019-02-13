<?php
$this->load->view('layout/header');
?>



<!--page title-->
<section class="small-section bg-dark-lighter mb-20">
    <div class="relative container align-left">
        <div class="row">
            <div class="col-md-8">
                <h1 class="hs-line-11 font-alt mb-0 mb-xs-0">Look Book</h1>
            </div>
            <div class="col-md-4 mt-30">
                <div class="mod-breadcrumbs font-alt align-right">
                    <a href="#">Home</a>&nbsp;/&nbsp;<span>Look Book</span>
                </div>
            </div>
        </div>
    </div>
</section>


<!--content-->
<section class="section_offset" style="   padding: 30px 0px;">
    <main class="container t_align_c">
        <!--        <div class="local-scroll mb-30 wow fadeInUp" data-wow-duration="1.2s">
                    <center>
                        <a href="#top"><img src="<?php echo base_url(); ?>assets/images/logodddd.png"  alt="" style="height: 100px" /></a>
                    </center>       
                </div>-->
        <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!-- Portfolio Section -->
            <section class="">
                <div class="relative">
                    
                    <!-- Works Filter -->                    
                    <div class="works-filter font-alt align-center">
                        <a href="#" class="filter active" data-filter="*">All works</a>
                        <a href="#branding" class="filter" data-filter=".branding">Branding</a>
                        <a href="#design" class="filter" data-filter=".design">Design</a>
                        <a href="#photography" class="filter" data-filter=".photography">Photography</a>
                    </div>                    
                    <!-- End Works Filter -->
                    
                    <!-- Works Grid -->
                    <ul class="works-grid clearfix font-alt hover-white hide-titles masonry" id="work-grid">
                        
                        <!-- Work Item (Lightbox) -->
                        <?php
                        for($i=1;$i<=16;$i++){
                        ?>
                        <li class="work-item mix photography">
                            <a href="<?php echo base_url(); ?>assets/images/lookbook/st<?php echo $i;?>.JPG" class="work-lightbox-link mfp-image">
                                <div class="work-img" style="border: 2px solid #fff">
                                    <img src="<?php echo base_url(); ?>assets/images/lookbook/st<?php echo $i;?>.JPG" alt="Work" />
                                </div>
                                
                            </a>
                        </li>
                        <?php
                        }
                        ?>
                      
                        
                    </ul>
                    <!-- End Works Grid -->
                    
                </div>
            </section>
            <!-- End Portfolio Section -->

            </div>
        </div>

    </main>
</section>





<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/productController.js"></script>


<?php
$this->load->view('layout/footer');
?>