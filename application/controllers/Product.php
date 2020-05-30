<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->library('session');
        $this->user_id = $this->session->userdata('logged_in')['login_id'];
    }

    public function index() {
        redirect('/');
    }

    //function for product list
    function ProductList($custom_id, $cat_id) {


        $this->db->where('id', $custom_id);
        $query = $this->db->get('custome_items');
        $customeitem = $query->row();

        if ($cat_id == 0) {
            $cat_id = $customeitem->category_id;
        }

        $categories = $this->Product_model->productListCategories($cat_id, $custom_id);

        $staticcat = $customeitem->category_id;
        if ($cat_id == 0) {
            $cat_id = $customeitem->category_id;
        }

        $categories = $this->Product_model->productListCategories($staticcat, $custom_id);


        $data["categorie_parent"] = $this->Product_model->getparent($cat_id);
        $data["categories"] = $categories;
        $data["category"] = $cat_id;
        $data["custom_item"] = $customeitem->item_name;
        $data["custom_id"] = $custom_id;
        $data["item_price"] = $customeitem->price;

        $this->load->view('Product/productList', $data);
    }

    function ProductSearch() {
        $data['keyword'] = $_GET['keyword'];
        $this->load->view('Product/productSearch', $data);
    }

    //function for details
    function ProductDetails($product_id) {
        $prodct_details = $this->Product_model->productDetails($product_id);
        if ($prodct_details) {
            $prodct_details_attrs = $this->Product_model->productDetailsVariants($product_id);

            $data['product_attr_variant'] = $prodct_details_attrs;

            $pquery = "SELECT pa.attribute, cav.attribute_value FROM product_attribute as pa
      join category_attribute_value as cav on cav.id = pa.attribute_value_id
      where pa.product_id = $product_id";
            $attr_products = $this->Product_model->query_exe($pquery);
            $data["product_attr"] = $attr_products;
            $categorie_parent = $this->Product_model->getparent($prodct_details['category_id']);
            $data["categorie_parent"] = $categorie_parent;
            $data["product_details"] = $prodct_details;


            $pquery = "SELECT pa.* FROM product_related as pr 
      join products as pa on pa.id = pr.related_product_id
      where pr.product_id = $product_id";
            $product_related = $this->Product_model->query_exe($pquery);

            $data["product_related"] = $product_related;

            $this->config->load('seo_config');
            $this->config->set_item('seo_title', $prodct_details['title']);
            $this->config->set_item('seo_desc', $prodct_details['short_description']);
            $this->config->set_item('seo_keywords', $prodct_details['keywords']);
            $this->config->set_item('seo_imgurl', imageserver . $prodct_details['file_name']);

            $this->load->view('Product/productDetails', $data);
        } else {
            $this->load->view('errors/html/error_404');
        }
    }

    function test() {
//        $this->session->unset_userdata('session_cart');
        //$session_cart = $this->Product_model->cartOperation(214, 1);
        $session_cart = $this->Product_model->cartData();
        echo "<pre>";
        print_r($session_cart);
    }

    function unsetData() {
        $this->session->unset_userdata('session_cart');
    }

    function customizationShirt1($productid) {
        $productdetails = $this->Product_model->productDetails($productid);

        $data['productdetails'] = $productdetails;
        $this->load->view('Product/customization_shirt', $data);
    }

    function customizationRedirect($custom_id, $product_id) {
        if ($custom_id == 1) {
            redirect('Product/customizationShirt/' . $product_id . "/" . $custom_id);
        }
        if ($custom_id == 2) {
            redirect('Product/customizationSuit/' . $product_id . "/" . $custom_id);
        }
        if ($custom_id == 4) {
            redirect('Product/customizationJacket/' . $product_id . "/" . $custom_id);
        }
        if ($custom_id == 3) {
            redirect('Product/customizationPant/' . $product_id . "/" . $custom_id);
        }

        if ($custom_id == 5) {
            redirect('Product/customizationTuxedoSuit/' . $product_id . "/" . $custom_id);
        }
        if ($custom_id == 6) {
            redirect('Product/customizationTuxedoJacket/' . $product_id . "/" . $custom_id);
        }
        if ($custom_id == 7) {
            redirect('Product/customizationTuxedoPant/' . $product_id . "/" . $custom_id);
        }
    }

    function customizationShirt($productid, $custom_id) {
        $productdetails = $this->Product_model->productDetails($productid, $custom_id);
        $data['productdetails'] = $productdetails;
        $data["custom_item"] = "Pant";
        $data['custom_id'] = $custom_id;
        $this->load->view('Product/customization_shirt', $data);
    }

    function customizationSuit($productid, $custom_id) {
        $productdetails = $this->Product_model->productDetails($productid, $custom_id);
        $data['productdetails'] = $productdetails;
        $data["custom_item"] = "Suit";
        $data['custom_id'] = $custom_id;
        $data['tuxedotype'] = "0";
        $this->load->view('Product/customization_suit_v2', $data);
    }

    function customizationTuxedoSuit($productid, $custom_id) {
        $productdetails = $this->Product_model->productDetails($productid, $custom_id);
        $data['productdetails'] = $productdetails;
        $data["custom_item"] = "TuxedoSuit";
        $data['custom_id'] = $custom_id;

        $data['tuxedotype'] = "1";

        $this->load->view('Product/customization_suit_v2', $data);
    }

    function customizationTuxedoJacket($productid, $custom_id) {
        $productdetails = $this->Product_model->productDetails($productid, $custom_id);
        $data['productdetails'] = $productdetails;
        $data["custom_item"] = "TuxedoJacket";
        $data['custom_id'] = $custom_id;
        $data['tuxedotype'] = "1";
        $this->load->view('Product/customization_suit_v2', $data);
    }

    function customizationTuxedoPant($productid, $custom_id) {
        $productdetails = $this->Product_model->productDetails($productid, $custom_id);
        $data['productdetails'] = $productdetails;
        $data["custom_item"] = "TuxedoPant";
        $data['custom_id'] = $custom_id;
        $data['tuxedotype'] = "1";
        $this->load->view('Product/customization_suit_v2', $data);
    }

    function customizationSuitV2($productid, $custom_id) {
        $productdetails = $this->Product_model->productDetails($productid, $custom_id);
        $data['productdetails'] = $productdetails;
        $data["custom_item"] = "Suit";
        $data['custom_id'] = $custom_id;
        $data['tuxedotype'] = "0";
        $this->load->view('Product/customization_suit_v3', $data);
    }

    function customizationPant($productid, $custom_id) {
        $productdetails = $this->Product_model->productDetails($productid, $custom_id);
        $data['productdetails'] = $productdetails;
        $data["custom_item"] = "Pant";
        $data['custom_id'] = $custom_id;
        $data['tuxedotype'] = "0";
        $this->load->view('Product/customization_suit_v2', $data);
    }

    function customizationPantV2($productid, $custom_id) {
        $productdetails = $this->Product_model->productDetails($productid, $custom_id);
        $data['productdetails'] = $productdetails;
        $data["custom_item"] = "Pant";
        $data['custom_id'] = $custom_id;
        $this->load->view('Product/customization_suit_v3', $data);
    }

    function customizationJacket($productid, $custom_id) {
        $productdetails = $this->Product_model->productDetails($productid, $custom_id);
        $data['productdetails'] = $productdetails;
        $data["custom_item"] = "Jacket";
        $data['custom_id'] = $custom_id;
        $data['tuxedotype'] = "0";
        $this->load->view('Product/customization_suit_v2', $data);
    }

    function selectLining($item_id, $product_id, $lining_type = "solid") {
        $data = array();
        $data['item_id'] = $item_id;
        $data['product_id'] = $product_id;
        $data['lining_type'] = $lining_type;
        $productdetails = $this->Product_model->productDetails($product_id, $item_id);
        $data['productdetails'] = $productdetails;
        $lining = array(
            "solid" => array(
                "folder" => "free_size",
                "price" => "0",
                "products" => ['VT111.jpg', 'VT112.jpg', 'VT119.jpg', 'VT12.jpg', 'VT120.jpg', 'VT123.jpg', 'VT124.jpg',
                    'VT125.jpg', 'VT127.jpg', 'VT128.jpg', 'VT129.jpg', 'VT13.jpg', 'VT17.jpg', 'VT19.jpg', 'VT211.jpg',
                    'VT212.jpg', 'VT216.jpg', 'VT217.jpg', 'VT218.jpg', 'VT220.jpg', 'VT313.jpg', 'VT314.jpg',
                    'VT316.jpg', 'VT319.jpg', 'VT322.jpg', 'VT323.jpg', 'VT325.jpg', 'VT326.jpg', 'VT411.jpg',
                    'VT413.jpg', 'VT414.jpg', 'VT420.jpg', 'VT422.jpg', 'VT426.jpg', 'VT428.jpg', 'VT431.jpg',
                    'VT512.jpg', 'VT513.jpg', 'VT514.jpg', 'VT516.jpg', 'VT520.jpg', 'VT521.jpg', 'VT522.jpg',
                    'VT523.jpg', 'VT525.jpg', 'VT526.jpg',  'VT712.jpg', 'VT717.jpg', 'VT718.jpg',
                    'VT721.jpg', 'VT726.jpg', 'VT811.jpg', 'VT812.jpg', 'VT813.jpg', 'VT818.jpg', 'VT819.jpg',
                    'VT820.jpg', 'VT821.jpg', 'VT822.jpg', 'VT826.jpg', 'VT912.jpg', 'VT917.jpg', 'VT918.jpg',
                    'VT919.jpg', 'VT923.jpg', 'VT926.jpg']
            ),
            "fancy" => array(
                "folder" => "fancy_size",
                "price" => "100",
                "products" => ['5373.jpg', '5678.jpg', '5685.jpg', '5704.jpg', '5706.jpg', '5709.jpg', '5713.jpg', '5714.jpg',
                    '5715.jpg', '5720.jpg', '5722.jpg', '5723.jpg', '5727.jpg', '5736.jpg', '5741.jpg', '5747.jpg',
                    '5775.jpg', '5778.jpg', '5781.jpg', '5811.jpg', '5814.jpg', '5815.jpg', '5818.jpg', '5821.jpg',
                    'LL302.jpg', 'LL303.jpg', 'LL304.jpg', 'LL305.jpg', 'LL306.jpg', 'LL307.jpg', 'LL308.jpg',
                    'LL309.jpg', 'LL310.jpg', 'LL311.jpg', 'LL312.jpg', 'LL313.jpg', 'LL314.jpg', 'LL315.jpg',
                    'LL316.jpg', 'LL317.jpg', 'LL318.jpg', 'LL319.jpg', 'LL320.jpg', 'LL321.jpg', 'LL322.jpg',
                    'LL323.jpg', 'LL324.jpg', 'LL325.jpg', 'LL326.jpg', 'LL327.jpg', 'LL328.jpg', 'LL329.jpg',
                    'LL330.jpg', 'LL331.jpg', 'LL332.jpg', 'LL333.jpg', 'LL334.jpg', 'LL335.jpg', 'LL336.jpg',
                    'LL337.jpg', 'LL338.jpg', 'LL340.jpg', 'LL341.jpg', 'LL342.jpg', 'LL343.jpg', 'LL344.jpg',
                    'LL345.jpg', 'LL346.jpg', 'LL347.jpg', 'LL348.jpg', 'LL349.jpg', 'LL350.jpg', 'LL351.jpg',
                    'LL352.jpg', 'LL353.jpg', 'LL354.jpg', 'LL355.jpg', 'LL356.jpg', 'LL357.jpg', 'LL358.jpg',
                    'LL359.jpg', 'LL360.jpg', 'LL361.jpg', 'LL362.jpg', 'LL363.jpg']
            )
        );

        $selectLining = $lining[$lining_type];
        $data['linings'] = $selectLining;
        $this->load->view('Product/productLining', $data);
    }

}
