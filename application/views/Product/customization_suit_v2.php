<?php
$this->load->view('layout/header');
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/8.7.1/lazyload.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Black+Ops+One|Bungee|Orbitron|Six+Caps|Wallpoet" rel="stylesheet">

<!-- get jQuery from the google apis or use your own -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- CSS STYLE-->
<link rel="stylesheet" type="text/css" href="https://unpkg.com/xzoom@1.0.14/dist/xzoom.css" media="all" />

<!-- XZOOM JQUERY PLUGIN  -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme/js/jquery.zoom.js"></script>



<link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/bootstrap.vertical-tabs.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/style_custome.css">
<style>
    .product_image_back {
        background-size: contain!important;
        background-repeat: no-repeat!important;
        height: 300px!important;
        background-position-x: center!important;
        background-position-y: center!important;
    }

    .productblock{
        padding: 10px;
        border: 1px solid rgba(0, 0, 0, 0.07);
        margin-bottom: 30px;
        box-shadow: 0px 0px 5px #00000017;
    }


    .shirtmodel1{
        margin-top: 7px;
        margin-left: 152px;
        width: 139px;
        height: auto;
    }


    .shirt11_model{
        z-index: 200;
        margin-top: 1px;
        margin-left: -0.5px;
    }

    .shirt_model{
        /*margin-top: 1.50px*/
    }

    .show_shirt_image{
        height: 50px;
    }



    .show_shirt_button{
        right: -30px;
    }

    .pant_model{
        height: 190px;
        width: 596px;
        position: absolute;
        margin-top: 251px;
        left: -160px;
    }



    .frame {

        font-family: sans-serif;
        overflow: hidden;
        width: 25vw;
        margin: 3vw;
        display: inline-block;

        .zoom {

            font-size: 1.3vw;
            transition: transform 0.2s linear;

        }


        img {

            max-width: 25vw;

        }


        .lorem {

            padding: 2% 2%;

        }


        form {

            margin : 2% auto;    
            text-align: center;

            button {

                font-size: inherit;
                margin: inherit;

            }

            input {

                border {
                    radius : 5px;
                    style: 1px solid;
                }    

                width :20vw;
                margin : 2% auto;
                padding: .5vw .8vw;
                font-size: 1.3vw;

            }
        }
    }

    .pantoverlay{
        top: 294px;
        width: 702px;
        left: -149px;
        height: auto;
    }


</style>
<!-- Slider -->


<div class="" ng-controller="customizationShirt">
    <!-- Slider -->
<!--    <section class="sub-bnr" data-stellar-background-ratio="0.5" style="font-weight: 300;
             font-size: 20px;">
        <div class="position-center-center">
            <div class="container">
                <div  class="row">

                </div>
            </div>
        </div>
    </section>-->

    <!-- Content -->
    <div id="content"> 

        <!--======= PAGES INNER =========-->
        <section class="item-detail-page padding-top-30 ">
            <div class="container" style="width: 100%">
                <div class="row"> 


                    <!--======= IMAGES SLIDER =========-->

                    <div class="col-sm-12 large-detail shirtcontainer showonmobile  " style="    height: 530px;">

                        <div class="media selected-fabric-block-mobile"  style="cursor:pointer;    padding: 0px 10px;"> 
                            <div class="media-left  mobile_view_element_tab">
                                <p class="selected-fabric-block-image" style="margin: 12px;background: url('<?php echo custome_image_server; ?>/coman/output/{{screencustom.productobj.folder}}/cutting20001.png');    float: left;"></p>
                            </div>
                            <div class="media-body">
                                <h4 class="selected-element-title media-heading">{{screencustom.productobj.title}} - {{screencustom.productobj.item_name}}</h4>
                                <p class="selected-element-title_text">
                                    {{screencustom.productobj.short_description}}
                                </p>
                                <p class="selected-element-title_text_price">
                                    <span ng-if="selecteElements[screencustom.fabric].totalextracost == 0">
                                        {{screencustom.productobj.price|currency:"<?php echo globle_currency_type; ?>"}}
                                    </span>
                                    <span ng-if="selecteElements[screencustom.fabric].totalextracost">
                                        {{(tonumber(screencustom.productobj.price) + tonumber(selecteElements[screencustom.fabric].totalextracost)) | currency:"<?php echo globle_currency_type; ?>"}}
                                    </span>        </p>
                            </div>

                        </div>
                        <div style="clear: both"></div>
                        <div class="col-sm-12 col-xs-12"  style="padding: 0">
                            <div class="tab-content" style="height: 400px;">

                                <div class="{{$index === 0?'active':''}} frame" ng-repeat="fab in cartFabrics" id="fabric_{{fab.product_id}}">

                                    <?php
                                    $this->load->view('customization/suitBlock');
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="clear: both"></div>
                    <!--======= ITEM DETAILS =========-->
                    <div class="hideonmobile">
                        <?php
                        $this->load->view('Product/custom_select_left');
                        ?>
                        <div class="col-sm-8 col-xs-10">
                            <!--shirt customization-->
                            <div class="row hideonmobile" style="margin-top: 10px;">
                                <?php
                                $this->load->view('Product/custome_support_suit2');
                                ?> 
                            </div>

                        </div>
                        <div class="col-sm-4 large-detail shirtcontainer hideonmobile  " style="    height: 530px;">

                            <div class="col-sm-12 col-xs-12"  style="padding: 0">
                                <div class="tab-content">

                                    <div class="{{$index === 0?'active':''}} frame" ng-repeat="fab in cartFabrics" id="fabric_{{fab.product_id}}">

                                        <?php
                                        $this->load->view('customization/suitBlock');
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="showonmobile">
                        <?php
                        $this->load->view('Product/custom_select_left_mobile');
                        ?>

                        <?php
                        $this->load->view('Product/custome_support_suit2_mobile');
                        ?> 

                    </div>
                    <div style="clear: both"></div>





                </div>

                <div class="row customization_order_block">

                    <?php
                    $this->load->view('Product/custom_bottom');
                    ?>

                </div>

            </div>
        </section>


    </div>
    <!-- End Content --> 

</div>

<script>
    var product_id = <?php echo $productdetails['id']; ?>;
    var defaut_view = "<?php echo $custom_item; ?>";
    var gcustome_id = <?php echo $custom_id; ?>;
</script>

<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/ng-suitcustomization2.js"></script>


<?php
$this->load->view('layout/footer');
?>
