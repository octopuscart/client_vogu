<?php
$this->load->view('layout/header');
?>



<!--page title-->
<section class="small-section bg-dark-lighter mb-20">
    <div class="relative container align-left">
        <div class="row">
            <div class="col-md-8">
                <h1 class="hs-line-11 font-alt mb-0 mb-xs-0">FAQ'S</h1>
            </div>
            <div class="col-md-4 mt-30">
                <div class="mod-breadcrumbs font-alt align-right">
                    <a href="#">Home</a>&nbsp;/&nbsp;<span>FAQ'S</span>
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
                <div class="single-blog-details-content">
                    <?php
                    $temp = array(
                        "DO you keep a record of my order? " => "Yes, we will keep a record of your online order with all the details. You can access it by login on our website.",
                        "What is your return and refund policy?" => "Due to the fact that our each product is 100% custom made,  we have <b>NO REFUND</b> policy. We will do everything to correct the error/problem in the garment and replace it. ",
                        "What if I made a mistake in my order, can I fix it? " => "Yes, send us an email (vogue@voguetailor.com) immediately and we will rectify the error.",
                        "What if my order doesn’t fit to my satisfaction?" => "Please contact us and we will do everything possible to handle the case and make you happy with your purchase.",
                    );
                    ?>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                        <?php
                        $index = 1;
                        foreach ($temp as $x => $x_value) {
                            ?>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne<?php echo "accord_" . $index; ?>" style="    background: #fff;color: #000;">
                                    <h4 class="panel-title" >
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne<?php echo "accord_" . $index; ?>" aria-expanded="true" aria-controls="collapseOne<?php echo "accord_" . $index; ?>" style="font-size: 15px">
                                          Q:  <?php echo $x; ?>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne<?php echo "accord_" . $index; ?>" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne<?php echo "accord_" . $index; ?>">
                                    <div class="panel-body">
                                      A:  <?php echo $x_value; ?>
                                    </div>
                                </div>
                            </div>


                            <?php
                            $index = $index + 1;
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>

    </main>
</section>





<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/productController.js"></script>


<?php
$this->load->view('layout/footer');
?>