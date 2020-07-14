<?php
$this->load->view('layout/header');
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/8.7.1/lazyload.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Black+Ops+One|Bungee|Orbitron|Six+Caps|Wallpoet" rel="stylesheet">

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/bootstrap.vertical-tabs.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/style_custome.css">

<!-- Slider -->


<div class="" ng-controller="liningControllers">
    <!-- Content -->
    <div id="content"> 
        <!--======= PAGES INNER =========-->
        <section class="item-detail-page padding-top-30 ">
            <div class="col-md-2">
                <div class="thumbnail fabricobj">
                    <img src="https://files.costcokart.com/vouge/coman/output/<?php echo $productdetails['folder']; ?>/cutting20001.png" alt="...">
                    <div class="caption">
                        <h3><?php echo $productdetails['title']; ?></h3>
                        <p><?php echo $productdetails['short_description']; ?></p>
                        <p ng-if="selectLining.title">


                        <div class="media" ng-if="selectLining.title">
                            <div class="media-left" style="    width: 60px;
                                 float: left;">
                                <a href="#">
                                    <img class="media-object img-circle" src="{{selectLining.image}}" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"> {{selectLining.title}}</h4>
                                <p>Price: {{selectLining.price|currency}}</p>
                            </div>
                        </div>

                        <p style="font-size: 18px;">
                            <small style="font-size: 12px;"> {{<?php echo $productdetails['price']; ?>|currency}} + {{selectLining.price|currency}}</small>
                            <br/>Price: {{selectLining.product_price|currency}}
                        </p>


                        <p style="text-align: center" ng-if="selectLining.title">
                            <button class="btn btn-primary" ng-click="addToCartSuit()"><i class="fa fa-cart-plus"></i> Add To Cart</button>
                        </p>


                    </div>
                </div>




            </div>
            <div class="col-md-10">

                <div class="row" style="    background: #e0e0e0;">
                    <nav aria-label="...">
                        <ul class="pager liningurl">
                            <li><a href="<?php echo site_url('Product/selectLining/' . $item_id . '/' . $product_id . '/fancy'); ?>" class="<?php echo $lining_type == 'fancy' ? 'active' : ''; ?>">Fancy Lining <br/>(US$ 100.00)</a></li>

                            <li><a href="<?php echo site_url('Product/selectLining/' . $item_id . '/' . $product_id . '/solid'); ?>" class="<?php echo $lining_type == 'solid' ? 'active' : ''; ?>">Solid Lining<br/>(Free)</a></li>
                        </ul>
                    </nav>
                    <div class="liningcontainer">

                        <?php
                        $products = $linings['products'];
                        $folder = $linings['folder'];
                        $price = $linings['price'];
                        foreach ($products as $llk => $llv) {
                            $title = str_replace(".jpg", "", $llv);
                            ?>
                            <div class="linigimage">

                                <div class="thumbnail liningimage">
                                    <img src="<?php echo base_url(); ?>assets/lining/<?php echo $folder . '/' . $llv; ?>"  alt="...">
                                    <div class="caption">
                                        <h3><?php echo $title; ?></h3>

                                        <p>
                                            <button class="btn btn-primary btn-sm pull-left" role="button" ng-click="selectLiningObj('<?php echo $title; ?>', '<?php echo $price; ?>', '<?php echo base_url(); ?>assets/lining/<?php echo $folder . '/' . $llv; ?>')">Select</button> 
                                            <button class="btn btn-default btn-sm pull-right" role="button" data-toggle="modal" ng-click="zoomFabric('<?php echo $title; ?>', '<?php echo base_url(); ?>assets/lining/<?php echo $folder . '/' . $llv; ?>')" data-target="#zoomModal"><i class="glyphicon glyphicon-zoom-in"></i></button>
                                        </p>
                                    </div>
                                </div>

                            </div>

                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>



        </section>
    </div>
    <!-- End Content -->  




    <!-- Modal -->
    <div class="modal fade" id="zoomModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">{{liningobject.title}}</h4>
                </div>
                <div class="modal-body">
                    <img src="{{liningobject.image}}"> 
                </div>

            </div>
        </div>
    </div>

</div>

<script>
    var product_price = <?php echo $productdetails['price']; ?>;
    var item_id_li = <?php echo $item_id; ?>;
    var product_id_li = <?php echo $product_id; ?>;</script>
<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/ng-lining.js"></script>


<?php
$this->load->view('layout/footer');
?>