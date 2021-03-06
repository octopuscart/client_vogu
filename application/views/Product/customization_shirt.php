<?php
$this->load->view('layout/header');
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/8.7.1/lazyload.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Black+Ops+One|Bungee|Orbitron|Six+Caps|Wallpoet" rel="stylesheet">

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
    .frame {

        font-family: sans-serif;
        overflow: hidden;
        /*width: 25vw;*/
        /*margin: 3vw;*/
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

            margin : 1.2% auto;    
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
                margin : 1.2% auto;
                padding: .5vw .8vw;
                font-size: 1.3vw;

            }
        }
    }
</style>
<!-- Slider -->


<div class="" ng-controller="customizationShirt">


    <!-- Content -->
    <div id="content"> 

        <!--======= PAGES INNER =========-->
        <section class="item-detail-page padding-top-30 ">
            <div class="container" style="width: 100%">

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
                                $this->load->view('customization/shirtBlock');
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="showonmobile">
                    <?php
                    $this->load->view('Product/custom_select_left_mobile');
                    ?>

                    <?php
                    $this->load->view('Product/custome_support_mobile');
                    ?> 
                    <div style="clear: both"></div>

                </div>



                <div style="clear: both"></div>



                <div class="hideonmobile">

                    <div class="row"> 

                        <?php
                        $this->load->view('Product/custom_select_left');
                        ?>
                        <div class="col-sm-6 col-xs-12">
                            <!--shirt customization-->
                            <div class="row" style="margin-top: 10px;">
                                <?php
                                $this->load->view('Product/custome_support');
                                ?> 
                            </div>
                        </div>


                        <div class="col-sm-6 large-detail shirtcontainer  " style="    height: 530px;" >

                            <div class="col-sm-12 col-xs-12"  style="padding: 0">
                                <div class="">
                                    <div class=" " ng-repeat="fab in [cartFabrics[0]]" id="fabric_{{fab.product_id}}">
                                        <button class="btn btn-default btn-lg custom_rotate_button" ng-click="rotateModel()">
                                            <i class="icon ion-refresh"></i>
                                        </button>
                                        <div class="col-md-3"></div>
                                        <div class="col-md-8 frame">
                                            <?php
                                            $this->load->view('customization/shirtBlock');
                                            ?>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

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
    var gcustome_id = <?php echo $custom_id; ?>;</script>
<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/ng-shirtcustomization.js"></script>


<?php
$this->load->view('layout/footer');
?>