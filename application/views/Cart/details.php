<?php
$this->load->view('layout/header');
?>


<section class="small-section bg-gray-lighter">
    <div class="relative container align-left">

        <div class="row">

            <div class="col-md-8">
                <h1 class="hs-line-11 font-alt mb-0">Shopping Cart</h1>
            </div>

            <div class="col-md-4 mt-20">
                <div class="mod-breadcrumbs font-alt align-right">
                    <a href="#">Home</a>&nbsp;/&nbsp;<a href="#">Shop</a>&nbsp;/&nbsp;<span>Cart</span>
                </div>

            </div>
        </div>

    </div>
</section>


<!--content-->
<div class="section_offset counter" ng-if="globleCartData.total_quantity">
    <div class="container" style="margin-bottom: 20px">
        <div class="im_half_container m_bottom_10">
            <div class="half_column d_inline_m w_xs_full m_xs_bottom_10">
                <p class="fw_light">Your shopping cart contains {{product.total_quantity}} product(s)</p>
            </div>
          
        </div>
        <div class="r_corners wrapper border_grey m_bottom_10 m_xs_bottom_10">
            <table class="table table-striped shopping-cart-table">
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
                        <td data-title="Product Image" style='    width: 100px;'>
                            <a href="#" class="r_corners d_inline_b wrapper">
                                <img src="{{product.file_name}}" alt="" style='height: 80px'>
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

        </div>
        
        <a href="<?php echo site_url('Product/ProductList/2/0'); ?>" class="btn btn-mod btn-round btn-large pull-left">
            <i class="icon-basket d_inline_b m_right_5"></i> Continue Shopping
        </a>
        
        <a href="<?php echo site_url("Cart/checkoutInit"); ?>" class="btn btn-mod btn-round btn-large pull-right">
            Checkout Now <i class="icon-right d_inline_b m_right_5"></i>
        </a>


    </div>
</div>


<?php
$this->load->view('Cart/noproduct');
?>


<!-- Cart Page Area End Here -->
<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/productController.js"></script>


<?php
$this->load->view('layout/footer');
?>