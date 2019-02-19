<?php
$this->load->view('layout/header');
?>

<style>
    .cartbutton{
        width: 100%;
        padding: 6px;
        color: #fff!important;
    }


    .noti-check1 span{
        color: red;
        color: red;
        width: 111px;
        float: left;
        text-align: right;
        padding-right: 13px;
    }

    .noti-check1 h6{
        font-size: 15px;
        font-weight: 600;
    }

    .address_block{
        background: #fff;
        border: 3px solid #d30603;
        padding: 5px 10px;
        margin-bottom: 20px;

    }
    .checkcart {
        border-radius: 50%;
        position: absolute;
        top: -28px;
        left: -8px;
        padding: 4px;
        background: #fff;
        border: 2px solid green;
    }


    .default{
        border: 2px solid green;
    }

    .default{
        border: 2px solid green;
    }

    .checkcart i{
        color: green;
    }

    .address_button{
        padding: 0px 10px;
        margin-top: 15px;
        font-size: 10px;
    }

    .cartdetail_small {
        float: left;
        width: 203px;
    }

</style>




<?php
$this->load->view('Cart/checkoutheader');
?>








<!-- Content -->


<div class="cart-page-area">
    <div class="container" ng-if="globleCartData.total_quantity">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span class="fa-stack">
                                    <i class="fa fa-shopping-cart fa-stack-1x"></i>
                                    <i class="ion-bag fa-stack-1x "></i>
                                </span>                          <span class="hideonmobile"> My Shopping Bag</span>

                                <span style="float: right; line-height: 29px;" class="ng-binding">Total: {{globleCartData.total_price|currency:"<?php echo globle_currency; ?>"}} ({{globleCartData.total_quantity}})</span> 
                            </a>
                        </h4>
                    </div>
                    <div class="panel-body">

                        <div class="shopping-cart text-center" >





                            <!-- Cart Details -->
                            <div class="custom_block_item">

                                <table class="table table-striped shopping-cart-table hideonmobile">
                <thead>
                    <tr class="bg_light_2 color_dark">

                        <th colspan="2">Product Description</th>

                        <th style='    width: 100px;'>Price</th>
                        <th style='    width: 140px;'>Quantity</th>
                        <th style='    width: 100px;'>Total</th>
                        <th style='    width: 100px;'></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="tr_delay" ng-repeat="product in globleCartData.products">
                        <td data-title="Product Image" style='    width: 150px;'>
                            <a href="#" class="r_corners d_inline_b wrapper">
                                <img src="{{product.file_name}}" alt="" style='height: 150px'>
                            </a>
                        </td>
                        <td data-title="Description">
                            <h6 class="m_bottom_5"><a href="#" class="color_dark tr_all">{{product.title}}</a></h6>
                            <p class="fw_light">{{product.item_name}}</p>
                        </td>
                        <td data-title="Price">{{product.price|currency:" "}}</td>
                        <td data-title="Quantity" >


                            <div class="btn-group" role="group" aria-label="...">
                                <button type="button" class="btn btn-default" ng-click="updateCart(product, 'sub')">-</button>
                                <button type="button" class="btn btn-default disabled">{{product.quantity}}</button>
                                <button type="button" class="btn btn-default"  ng-click="updateCart(product, 'add')">+</button>
                            </div>


                        </td>

                        <td data-title="Total" class="fw_ex_bold color_dark ">
                            {{product.total_price|currency:" "}}
                        </td>
                        <td>

                            <a href="#" ng-click="removeCart(product.product_id)"><i class="fa fa-times"></i> <span class="hidden-xs">Remove</span></a>

                        </td>
                    </tr>



                    <tr class="bg_light_2">
                        <td colspan="4" class="v_align_m">

                        </td>
                        <td colspan="2" class="fw_ex_bold color_pink v_align_m">{{globleCartData.total_price|currency:" "}}</td>
                    </tr>
                </tbody>
            </table>



            <!--//mobile view-->
            <table class="table table-striped shopping-cart-table showonmobile">
                <thead>
                    <tr class="bg_light_2 color_dark">

                        <th colspan="1">Product</th>

                        <th style='    width: 350px;'>Quantity</th>
                        <th colspan="2" style='    width: 100px;'>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="tr_delay" ng-repeat="product in globleCartData.products">
                        <td data-title="Product Image" style='    width: 250px;text-align: center'>
                            <b>{{product.title}}</b>

                            <a href="#" class="r_corners d_inline_b wrapper">
                                <img src="{{product.file_name}}" alt="" >
                            </a>

                            <p class="fw_light">
                                {{product.item_name}}<br/>
                                {{product.price|currency:" "}} X {{product.quantity}}
                            </p>
                        </td>

                        <td data-title="Quantity" >


                            <div class="btn-group btn-group-sm" role="group" aria-label="...">
                                <button type="button" class="btn btn-default" ng-click="updateCart(product, 'sub')">-</button>
                                <button type="button" class="btn btn-default disabled">{{product.quantity}}</button>
                                <button type="button" class="btn btn-default"  ng-click="updateCart(product, 'add')">+</button>
                            </div>


                        </td>

                        <td data-title="Total" class="fw_ex_bold color_dark ">
                            {{product.total_price|currency:" "}}
                            <a href="#" ng-click="removeCart(product.product_id)" class="btn btn-default btn-xs"><i class="fa fa-times"></i> Remove</a>



                        </td>
                    </tr>



                    <tr class="bg_light_2">
                        <td colspan="2" class="v_align_m">

                        </td>
                        <td colspan="1" class="fw_ex_bold color_pink v_align_m">{{globleCartData.total_price|currency:" "}}</td>
                    </tr>
                </tbody>
            </table>


                            </div>
                            <div class="proceed-button pull-left " >
                                <a href=" <?php echo site_url("Cart/details"); ?>" class="btn btn-default checkout_button_pre " ><i class="fa fa-arrow-left"></i> Back To Cart</a>
                            </div>
                            <div class="proceed-button pull-right ">
                                <a href=" <?php echo site_url("Cart/checkoutSize"); ?>" class="btn btn-default checkout_button_next " >Your Size <i class="fa fa-arrow-right"></i></a>
                            </div>





                        </div>

                    </div>

                </div>

            <?php
            $this->load->view('Cart/itemblock', array('vtype' => 'size'));
            ?>
            <?php
            $this->load->view('Cart/itemblock', array('vtype' => 'shipping'));
            ?>
            <?php
            $this->load->view('Cart/itemblock', array('vtype' => 'payment'));
            ?>

        </div>

    </div>


    <?php
    $this->load->view('Cart/noproduct');
    ?>

</div>






<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/productController.js"></script>
<script>
                                                var avaiblecredits = 0;
</script>

<?php
$this->load->view('layout/footer', array('custom_item' => 0, 'custom_id' => 0));
?>