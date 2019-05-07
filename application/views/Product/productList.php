<?php
$this->load->view('layout/header');
?>
<?php
$linklist = [];
foreach ($categorie_parent as $key => $value) {
    $cattitle = $value['category_name'];
    $catid = $value['id'];
    $liobj = "<a href='" . site_url("Product/ProductList/" . $catid) . "'>$cattitle</a>";
    array_push($linklist, $liobj);
}



$image1 = "";
$image2 = "";
?>

<div style="opacity: 0;position: fixed;">
    {{gitem_price = <?php echo $item_price; ?>}}
    {{showmodel = 1}}
</div>


<style>
    .page_navigation a {
        padding: 5px 10px;
        border: 1px solid #000;
        margin: 5px;
        background: #000;
        color: white;
    }
    .page_navigation a.active_page {
        padding: 5px 10px;
        border: 1px solid #000;
        margin: 5px;
        background: #fff;
        color: black;
    }

    .colorblock{
        font-weight: 500;
        padding: 0px 10px;
        height: 8px;
        /* float: left; */
        width: 15px;
        position: absolute;
        /* float: left; */
        /* margin-top: -71px; */
        /* position: absolute; */
        margin: auto;
        /* border: 1px solid #0000005e; */
        /* border: 1px solid #0000005e; */
        text-shadow: 0px 1px 4px #000;
        /* margin-top: -71px; */
        margin-left: -7px;
    }

    .productmodel{
        border: 1px solid #dad5d5;
        padding: 10px;
    }

    .padding_5{
        padding: 5px;
    }

    .padding_10{
        padding: 10px;
    }

    .hoverproduct{
        position: absolute;
        top: 20px;
        left: 0px;
        /* height: 71px; */
        width: auto;
        margin: auto 19px;
        right: 0;
        opacity: 0;
    }
    .hoverproduct:hover{opacity: 1}


    .product-box1 .product-img-holder {



        <?php
        switch ($custom_id) {
            case "1":
                ?>
                min-height: 260px;
                <?php
                break;
            case "2":
                ?>
                min-height: 390px;
                <?php
                break;
            case "5":
                ?>
                min-height: 390px;
                <?php
                break;
            case "3":
                ?>
                min-height: 262px;
                <?php
                break;
            case "4":
                ?>
                min-height: 390px;
                <?php
                break;
            default:
                ?>
                min-height: 260px;<?php
        }
        ?>
    }



    .product-box1{



        <?php
        switch ($custom_id) {
            case "1":
                ?>
                min-height: 260px;
                <?php
                break;
            case "2":
                ?>
                min-height: 520px;
                <?php
                break;
            case "5":
                ?>
                min-height: 520px;
                <?php
                break;
            case "3":
                ?>
                min-height: 262px;
                <?php
                break;
            case "4":
                ?>
                min-height: 520px;
                <?php
                break;
            default:
                ?>
                min-height: 260px;<?php
        }
        ?>
    }

</style>



<section class="small-section bg-dark-lighter mb-20">
    <div class="relative container align-left">
        <div class="row">
            <div class="col-md-8">
                <h1 class="hs-line-11 font-alt mb-0 mb-xs-0" style="font-size: 15px;
                    margin-top: 10px;"><?php
                    echo $custom_item;
                    ?> Customization</h1>
            </div>
            <div class="col-md-4 mt-20">
                <div class="mod-breadcrumbs font-alt align-right">
                    <a href="<?php echo site_url("/"); ?>">Home&nbsp;/&nbsp;</a>
                    <?php
                    echo implode("&nbsp;/&nbsp;", $linklist)
                    ?></span>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- Content -->
<div id="content" ng-controller="ProductController"> 

    <!-- Shop Content -->
    <div class="shop-content pad-t-b-60">
        <div class="container">
            <div class="row"> 

                <!-- Shop Side Bar -->
                <div class="col-md-2">
                    <div class="side-bar">

                        <?php if (count($categories)) { ?>

                            <div class="widget">

                                <h5 class="widget-title font-alt">Shop Categories</h5>

                                <div class="widget-body">
                                    <ul class="clearlist widget-menu">
                                        <?php
                                        foreach ($categories as $key => $value) {
                                            $subcategories = $value['sub_category'];
                                            ?>  
                                            <li>
                                                <a href="<?php echo site_url("Product/ProductList/" . $custom_id . "/" . $value['id']); ?>" title=""><?php echo $value['category_name']; ?></a>

                                            </li>
                                            <?php
                                        }
                                        ?>   
                                    </ul>
                                </div>

                            </div>
                            <?php
                        }
                        ?>




                        <!-- HEADING -->
                        <div class="widget"  >
                            <div class="heading">
                                <h5 class="widget-title font-alt">Filter by price</h5>
                            </div>
                            <!-- PRICE -->
                            <div class="cost-price-content">
                                <div id="price-range" class="price-range"></div>
                                <div class='row' style="margin:0px;">
                                    <span id="price-min" class="price-min col-xs-4"></span>
                                    <span class="col-xs-1">-</span> 
                                    <span id="price-max" class="price-max col-xs-4"></span> 
                                    <a href="#." class="col-xs-3" ng-click="getProducts()" >FILTER</a> 
                                </div>
                            </div>
                        </div>



                        <!-- HEADING -->

                        <div class="product_attr" ng-repeat="(attrk, attrv) in productResults.attributes" >


                            <div class="widget" ng-if='attrv.widget == "color"'>

                                <h5 class="widget-title font-alt">Color</h5>
                                <!-- COLORE -->
                                <div class="cate" ng-if='attrv.widget == "color"'>
                                    <div ng-repeat="atv in attrv" ng-if='atv.product_count'>

                                        <label style="font-weight: 500;background: {{atv.additional_value}};padding: 0px 5px;float: left;
                                               margin-right: 5px;border: 1px solid #0000005e;border: 1px solid #0000005e;
                                               text-shadow: 0px 1px 4px #000;">
                                            <input type="checkbox"  ng-model="atv.checked" ng-click="attributeProductGet(atv)" style="opacity: 0;"> 

                                            <i class="fa fa-check" ng-if="atv.checked" style="    position: absolute;
                                               margin-top: -22px;
                                               color: #fff;"></i>
                                            <!--{{atv.attribute_value}} ({{atv.product_count}})-->
                                        </label>


                                    <!--<a href="#."><input type="checkbox">{{atv.attribute_value}} <span>(32) </span></a>-->
                                    </div>
                                </div>
                            </div>





                        </div>

                    </div>
                </div>

                <!-- Main Shop Itesm -->          
                <div class="col-md-10"> 

                    <div id="content1"  ng-if="productProcess.state == 1" style="padding: 100px 0px;"> 

                        <!-- Tesm Text -->
                        <section class="error-page text-center pad-t-b-130">
                            <div class="{{productResults.products.length?'container1':'container'}}"> 
                                <center>
                                    <img src="<?php echo base_url() . 'assets/theme2/img/loader.gif' ?>">
                                </center>
                                <!-- Heading -->
                                <h1 style="font-size: 40px;text-align: center">Loading...</h1>
                            </div>
                        </section>

                    </div>

                    <!-- SHOWING INFO -->
                    <!--                    <div class="showing-info">
                                            <p class="pull-left">Showing   1 - 12  of   30 results</p>
                                        </div>-->
                    <div class="" id="paging_container"> 

                        <div class="row " ng-if="productProcess.state == 2">
                            <!-- Item -->

                            <!-- Shop Item -->
                            <div class="col-md-4 col-lg-4 mb-0 mb-xs-0 padding_10"   ng-repeat="(k, product) in productResults.products">
                                <div class="productmodel">
                                    <div class="post-prev-img">
                                        <?php
                                        switch ($custom_id) {
                                            case "1":
                                                ?>
                                                <img class="img-responsive" src="<?php echo custome_image_server; ?>/coman/shirt/{{product.folder}}.jpg" alt="product">
                                                <!--<img class="img-responsive" src="<?php echo custome_image_server; ?>/shirt/output/{{product.folder}}/shirt_pos20001.png" alt="product">-->

                                                <?php
                                                break;
                                            case "2":
                                                ?>
                                                <img class="img-responsive" src="<?php echo custome_image_server; ?>/coman/output/{{product.folder}}/cutting20001.png" alt="product" style="height: 414px;">
                                                <?php
                                                break;
                                            case "5":
                                                ?>
                                                <img class="img-responsive" src="<?php echo custome_image_server; ?>/coman/output/{{product.folder}}/cutting20001.png" alt="product" style="height: 414px;">
                                                <?php
                                                break;
                                            case "6":
                                                ?>
                                                <img class="img-responsive" src="<?php echo custome_image_server; ?>/jacket/output/{{product.folder}}/s1_master_style60001.png" alt="product">
                                                <?php
                                                break;
                                            case "7":
                                                ?>
                                                <img class="img-responsive" src="<?php echo custome_image_server; ?>/jacket/output/{{product.folder}}/s1_master_style60001.png" alt="product">
                                                <?php
                                                break;
                                            case "3":
                                                ?>
                                                <img class="img-responsive" src="<?php echo custome_image_server; ?>/coman/output/{{product.folder}}/cutting20001.png" alt="product" >
                                                <?php
                                                break;
                                            case "4":
                                                ?>
                                                <img class="img-responsive" src="<?php echo custome_image_server; ?>/coman/output/{{product.folder}}/cutting20001.png" alt="product" style="height: 414px;">
                                                <?php
                                                break;
                                            default:
                                                echo $custom_item;
                                                ?>
                                                <div class="item-hover" style=""> 

                                                    <a href="<?php echo site_url("Product/customizationRedirect/") ?><?php echo $custom_id; ?>/{{product.product_id}}" class="btn" style="font-size: 9px;" title="Customize this fabric">Design Single
                                                    </a> 
                                                    <a href="#." class="btn by" style="    font-size: 9px;" ng-click="addToCart(product.product_id, 1, <?php echo $custom_id; ?>)" title="Choose fabric for multiple customization">Design Multiple</a> 
                                                </div>
                                            <?php
                                        }
                                        ?>

                                    </div>
                                    <div class="post-prev-img hoverproduct" style="background: #fff">

                                        <?php
                                        switch ($custom_id) {
                                            case "1":
                                                ?>
                                                <img class="img-responsive" src="<?php echo custome_image_server; ?>/shirt/output/{{product.folder}}/shirt_pos20001.png" alt="product">

                                                <!--<img class="img-responsive" src="<?php echo custome_image_server; ?>/coman/shirt/{{product.folder}}.jpg" alt="product">-->
                                                <?php
                                                break;
                                            case "2":
                                                ?>
                                                <!--<div class="suitbackground" style="background: url(<?php echo custome_image_server; ?>/jacket/output/{{product.folder}}/s1_master_style60001.png)"></div>-->
                                                <img class="img-responsive" src="<?php echo custome_image_server; ?>/jacket/output/{{product.folder}}/s1_master_style60001.png" alt="product" >
                                                <?php
                                                break;
                                            case "5":
                                                ?>
                                                <img class="img-responsive" src="<?php echo custome_image_server; ?>/jacket/output/{{product.folder}}/s1_master_style60001.png" alt="product" >
                                                <?php
                                                break;
                                            case "6":
                                                ?>
                                                <img class="img-responsive" src="<?php echo custome_image_server; ?>/suitfabrics/{{product.folder}}.jpg" alt="product">
                                                <?php
                                                break;
                                            case "7":
                                                ?>
                                                <img class="img-responsive" src="<?php echo custome_image_server; ?>/suitfabrics/{{product.folder}}.jpg" alt="product">
                                                <?php
                                                break;
                                            case "3":
                                                ?>
                                                <img class="img-responsive" src="<?php echo custome_image_server; ?>/jacket/output/{{product.folder}}/pant_style10001.png" alt="product">
                                                <?php
                                                break;
                                            case "4":
                                                ?>
                                                <img class="img-responsive" src="<?php echo custome_image_server; ?>/jacket/output/{{product.folder}}/s1_master_style60001.png" alt="product">
                                                <?php
                                                break;
                                            default:
                                                echo $custom_item;
                                                ?>
                                                <img class="img-responsive" src="<?php echo custome_image_server; ?>/coman/output/{{product.folder}}/cutting20001.png" alt="product">
                                            <?php
                                        }
                                        ?>



                                    </div>

                                    <div class="post-prev-title font-alt align-center">
                                        <a href="#.">
                                            {{product.title}}
                                            <br>
                                            <span style="font-size: 9px">{{product.short_description}} </span>
                                        </a> 
                                    </div>

                                    <div class="post-prev-text align-center">

                                        <strong>{{product.price|currency:"<?php echo globle_currency; ?> "}}</strong>
                                    </div>

                                    <div class="post-prev-more align-center">
                                        <a href="<?php echo site_url("Product/customizationRedirect/") ?><?php echo $custom_id; ?>/{{product.product_id}}" class="btn btn-mod btn-gray btn-round"><i class="fa fa-shopping-cart"></i> Design Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Shop Item -->



                        </div>


                    </div>



                    <div id="content"  ng-if="productProcess.state == 0"> 
                        <div ng-if="checkproduct == 0">
                            <!-- Tesm Text -->
                            <section class="error-page text-center pad-t-b-130">
                                <div class="1 "> 

                                    <!-- Heading -->
                                    <h1 style="font-size: 40px">No Product Found</h1>
                                    <p>Products Will Comming Soon</p>
                                    <hr class="dotted">
                                    <a href="<?php echo site_url(); ?>" class="woocommerce-Button button btn-shop-now-fill">BACK TO HOME</a>
                                </div>
                            </section>
                        </div>
                    </div>


                    <div class="col-md-12" id="paging_container1" style="margin-bottom:30px;">
                        <div class="showing-info">
                            <p class="text-center"><span class="info_text ">Showing {0}-{1} of {2} results</span></p>
                        </div>
                        <div class="row products-container content" ng-if="productProcess.state == 2">
                            <!-- Item -->
                            <div class="col-sm-4 animated zoomIn"  ng-repeat="(k, product) in productResults.productscounter">
                            </div>
                        </div>
                        <center>
                            <div class="page_navigation"></div>
                        </center>
                        <div style="clear: both"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End Content --> 


<!-- Modal -->
<div class="modal  fade" id="productcustome" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="    z-index: 20000000;">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel" style="font-size: 15px">
                    <?php
                    echo $custom_item;
                    ?>
                </h4>
            </div>

            <?php

            function createItemBlock($citem_id) {

                switch ($citem_id) {
                    case '1':
                        $item_array = array("title" => "Shirt(s)", "link" => site_url("Customization/customizationShirt"));
                        break;
                    case '2':
                        $item_array = array("title" => "Suit(s)", "link" => site_url("Customization/customizationSuitV2/2"));
                        break;
                    case '5':
                        $item_array = array("title" => "Tuxedo Suit(s)", "link" => site_url("Customization/customizationSuitV2/5"));
                        break;
                    case '6':
                        $item_array = array("title" => "Tuxedo Jackets(s)", "link" => site_url("Customization/customizationSuitV2/6"));
                        break;
                    case '7':
                        $item_array = array("title" => "Tuxedo Pants(s)", "link" => site_url("Customization/customizationSuitV2/7"));
                        break;
                    case '3':
                        $item_array = array("title" => "Pant(s)", "link" => site_url("Customization/customizationSuitV2/3"));
                        break;
                    case '4':
                        $item_array = array("title" => "Jacket(s)", "link" => site_url("Customization/customizationSuitV2/4"));
                        break;
                    default:
                        $item_array = array("title" => "Shirt(s)", "link" => site_url("Customization/customizationSuitV2"));
                }
                ?>

                <!-- Cart Details -->
                <div class="modal-body checkout-form">
                    <div class="custom_block_item">


                        <div class="row cart-details" >
                            <div class="col-sm-12 col-md-3" ng-repeat="product in globleCartDatanc.products" ng-if="product.item_id == '<?php echo $citem_id; ?>'">
                                <div class="thumbnail">
                                    <img src="{{product.file_name}}" alt="" style="width: auto;" alt="...">
                                    <div class="caption">
                                        <h5 style="font-size:15px;">{{product.title}}</h5>
                                        <p><span class="price">{{product.price|currency:" "}}</span> <a href="#." ng-click="removeCart(product.product_id)" class="pull-right"><i class="icon-close"></i></a> </p>
                                    </div>

                                </div>
                            </div>



                        </div>

                    </div>
                </div>
                <div class="modal-footer" ng-repeat="product in globleCartDatanc.products" ng-if="(product.item_id == '<?php echo $citem_id; ?>') && $index == 0">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Add More</button>
                    <a href="<?php echo $item_array['link']; ?>" class="btn btn-default pull-right">Customize Now <i class="fa fa-arrow-right"></i></a> 
                </div>

                <?php
            }

            createItemBlock($custom_id);
            ?>




        </div>
    </div>
</div>



<script>
    var category_id = <?php echo $category; ?>;
    var custom_id = <?php echo $custom_id; ?>;</script>
<!--angular controllers-->


<?php
$this->load->view('layout/footer');
?>

<script src="<?php echo base_url(); ?>assets/theme/js/jquery.pajinate.min.js"></script>


<script src="<?php echo base_url(); ?>assets/theme/angular/productController.js"></script>

<!--angular controllers-->


<script type="text/javascript">
    $(document).ready(function () {

    });</script>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/noslider/nouislider.min.css">
<script src="<?php echo base_url(); ?>assets/theme/noslider/nouislider.min.js" type="text/javascript"></script>
