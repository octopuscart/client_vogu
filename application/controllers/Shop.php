<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->library('session');
        $this->user_id = $this->session->userdata('logged_in')['login_id'];
    }

    public function index() {
        $product_home_slider_bottom = $this->Product_model->product_home_slider_bottom();
        $categories = $this->Product_model->productListCategories(0);
        $data["categories"] = $categories;
        $data["product_home_slider_bottom"] = $product_home_slider_bottom;
        $customarray = [1, 2];
        $this->db->where_in('id', $customarray);
        $query = $this->db->get('custome_items');
        $customeitem = $query->result();

        $data['shirtcustome'] = $customeitem[0];
        $data['suitcustome'] = $customeitem[1];

        $query = $this->db->get('sliders');
        $data['sliders'] = $query->result();

        $this->load->view('home', $data);
    }

    public function contactus() {
        $data['rand_num1'] = rand(1, 9);
        $data['rand_num2'] = rand(1, 9);


        if (isset($_POST['sendmessage'])) {
            $web_enquiry = array(
                'last_name' => $this->input->post('last_name'),
                'first_name' => $this->input->post('first_name'),
                'email' => $this->input->post('email'),
                'contact' => $this->input->post('contact'),
                'subject' => $this->input->post('subject'),
                'message' => $this->input->post('message'),
                'datetime' => date("Y-m-d H:i:s a"),
            );

            $this->db->insert('web_enquiry', $web_enquiry);

            $emailsender = email_sender;
            $sendername = email_sender_name;
            $email_bcc = email_bcc;
            $sendernameeq = $this->input->post('last_name') . " " . $this->input->post('first_name');
            if ($this->input->post('email')) {
                $this->email->set_newline("\r\n");
                $this->email->from(email_sender, $sendername);
                $this->email->reply_to(email_bcc, $sendername);
                $this->email->to($this->input->post('email'));

                $this->email->bcc(email_bcc);
                $subjectt = $this->input->post('subject');
                $orderlog = array(
                    'log_type' => 'Enquiry',
                    'log_datetime' => date('Y-m-d H:i:s'),
                    'user_id' => 'ENQ',
                    'log_detail' => "Enquiry from website - " . $this->input->post('subject')
                );
                $this->db->insert('system_log', $orderlog);

                $subject = "Enquiry from website - " . $this->input->post('subject');
                $this->email->subject($subject);

                $web_enquiry['web_enquiry'] = $web_enquiry;

                $htmlsmessage = $this->load->view('Email/web_enquiry', $web_enquiry, true);
                $this->email->message($htmlsmessage);

                $this->email->print_debugger();
                $send = $this->email->send();
                if ($send) {
                    echo json_encode("send");
                } else {
                    $error = $this->email->print_debugger(array('headers'));
                    echo json_encode($error);
                }
            }

            redirect('Shop/contactus');
        }
        $this->load->view('pages/contactus', $data);
    }

    public function subscribe() {
        if (isset($_POST['submit'])) {
            $appointment = array(
                'email' => $this->input->post('email'),
            );
            // print_r($appointment);

            $emailsender = email_sender;
            $sendername = email_sender_name;
            $email_bcc = email_bcc;

            if ($this->input->post('email')) {

                $rand_1 = $this->input->post('rand_1');
                $rand_2 = $this->input->post('rand_2');
                $total = $this->input->post('total');
                $t_total = intval($rand_1) + intval($rand_2);
                if ($t_total == intval($total)) {
                    
                } else {
                    redirect(site_url("/"));
                }

                $this->email->set_newline("\r\n");
                $this->email->from(email_bcc, $sendername);
                $this->email->to($this->input->post('email'));
                $this->email->bcc(email_bcc);
                $subjectt = "Thank you for your subscription";
                $orderlog = array(
                    'log_type' => 'Thank You For Subscribing',
                    'log_datetime' => date('Y-m-d H:i:s'),
                    'user_id' => 'Subscribing User',
                    'log_detail' => $sendername . "  " . $subjectt
                );
                $this->db->insert('system_log', $orderlog);
                $subject = $subjectt;
                $this->email->subject($subject);
                $appointment['appointment'] = $appointment;
                $htmlsmessage = $this->load->view('Email/subscribing', $appointment, true);
                if (REPORT_MODE == 1) {
                    $this->email->message($htmlsmessage);
                    $this->email->print_debugger();
                    $send = $this->email->send();
                    if ($send) {
                        redirect(site_url("/"));
                    } else {
                        $error = $this->email->print_debugger(array('headers'));
                        redirect(site_url("/"));
                    }
                } else {
                    echo $htmlsmessage;
                }
            }
        }
        $this->load->view('pages/subscribe');
    }

    public function aboutus() {
        $this->load->view('pages/aboutus');
    }

    public function tnc() {
        $this->load->view('pages/tnc');
    }

    public function faq() {
        $this->load->view('pages/faq');
    }

    public function catalogue() {
        $this->load->view('pages/catalogue');
    }

    public function lookbook() {
        $this->load->view('pages/lookbook');
    }

    public function blog() {
        $this->load->view('pages/lookbook');
    }

    public function appointment() {
        if (isset($_POST['submit'])) {
            $appointment = array(
                'last_name' => $this->input->post('last_name'),
                'first_name' => $this->input->post('first_name'),
                'email' => $this->input->post('email'),
                'contact_no' => $this->input->post('contact_no'),
                'select_time' => $this->input->post('select_time'),
                'select_date' => $this->input->post('select_date'),
                'no_of_person' => $this->input->post('no_of_person'),
                'referral' => $this->input->post('referral'),
                'datetime' => date("Y-m-d H:i:s a"),
                'appointment_type' => "Local",
            );

            $this->db->insert('appointment_list', $appointment);

            $emailsender = email_sender;
            $sendername = email_sender_name;
            $email_bcc = email_bcc;
            $sendernameeq = $this->input->post('last_name') . " " . $this->input->post('first_name');
            if ($this->input->post('email')) {
                $this->email->set_newline("\r\n");
                $this->email->from(email_bcc, $sendername);
                $this->email->to($this->input->post('email'));
                $this->email->bcc(email_bcc);
                $subjectt = "Bespoke Tailors Appointment : " . $appointment['select_date'] . " (" . $appointment['select_time'] . ")";
                $orderlog = array(
                    'log_type' => 'Appointment',
                    'log_datetime' => date('Y-m-d H:i:s'),
                    'user_id' => 'Appointment User',
                    'log_detail' => $sendernameeq . "  " . $subjectt
                );
                $this->db->insert('system_log', $orderlog);

                $subject = $subjectt;
                $this->email->subject($subject);

                $appointment['appointment'] = $appointment;

                $checksend = 1;
                $htmlsmessage = $this->load->view('Email/appointment', $appointment, true);
                if ($checksend) {
                    $this->email->message($htmlsmessage);
                    $this->email->print_debugger();
                    $send = $this->email->send();
                    if ($send) {
                        echo json_encode("send");
                    } else {
                        $error = $this->email->print_debugger(array('headers'));
                        echo json_encode($error);
                    }
                } else {
                    echo $htmlsmessage;
                }
            }

            redirect('Shop/appointment');
        }
        $this->load->view('pages/appointment');
    }

    public function testinsert() {
        $foldersstrip = ['VT25.png', 'VT28.jpg', 'VT29.jpg', 'VT3005.png', 'VT3013.png', 'VT3069.jpg', 'VT3079.jpg', 'VT3093.jpg', 'VT3107.jpg', 'VT3223.jpg', 'VT3243.jpg'];
        foreach ($foldersstrip as $key => $value) {
            $folder = $value;
            $foldermain = str_replace(".jpg", "", $folder);
            //$titles = explode("_", $folder);


            $title = $foldermain;

            $products = array(
                "category_id" => 44,
                "sku" => $title,
                "category_items_id" => 1,
                "title" => $title,
                "short_description" => "2 Ply 100% Cotton",
                "description" => "2 Ply 100% Cotton",
                "video_link" => "",
                "regular_price" => "95",
                "sale_price" => "0",
                "credit_limit" => "",
                "price" => "95",
                "file_name" => $foldermain . "shirt_model20001.png",
                "file_name1" => $foldermain . "shirt_model10001.png",
                "file_name2" => $foldermain . "fabricx0001.png",
                "file_name3" => "",
                "user_id" => "10",
                "op_date_time" => "",
                "status" => "1",
                "home_slider" => "",
                "home_bottom" => "",
                "keywords" => "",
                "stock_status" => "In Stock",
                "variant_product_of" => "",
                "folder" => $foldermain);
            #$this->db->insert('products', $products);
        }
    }

    public function testinsertsuit() {
        $foldercheck = ['VT8634', 'VT8639', 'VT8627', 'VT8608', 'VT8619', 'VT8610', 'VT8632', 'VT8617'];
        $folderchek2 = ['12512.jpg', '12514.jpg', '12601.jpg', '12602.jpg', '12603.jpg', '12604.jpg', '12605.jpg', '12606.jpg', '12611.jpg', '12612.jpg', '12613.jpg', '12615.jpg', '12616.jpg', '12617.jpg', '12618.jpg', '12619.jpg', '12649.jpg', '12650.jpg', '12651.jpg', '12652.jpg', '12653.jpg', '12654.jpg', '12655.jpg', '12656.jpg'];

        $folderstrip = ['12546.jpg', '12548.jpg', '12549.jpg', '12550.jpg', '12551.jpg', '12552.jpg', '12553.jpg', '12554.jpg', '12562.jpg', '9733.jpg', '9734.jpg', '9735.jpg', '9736.jpg', '9737.jpg', '9744.jpg', '9749.jpg', '9750.jpg', '9751.jpg'];

        $foldersolid = ['9706.jpg', '9708.jpg', '9709.jpg', '9710.jpg', '9711.jpg', '9712.jpg', '9714.jpg', '9718.jpg', '9781.jpg', '9782.jpg', '9783.jpg', '9784.jpg'];

        $foldersolid2 = ['12529.jpg', '12530.jpg', '12531.jpg', '12536.jpg', '12539.jpg', '12540.jpg', '12541.jpg', '12542.jpg', '12543.jpg', '12544.jpg', '12545.jpg', '12596.jpg', '12599.jpg', '12600.jpg'];

        $foldertexture = ['12506.jpg', '12519.jpg', '12520.jpg', '12522.jpg', '12523.jpg', '12526.jpg', '12526_2.jpg', '12527.jpg', '12599.jpg', '12600.jpg', '12607.jpg', '12608.jpg', '12609.jpg', '12610.jpg', '9738.jpg', '9739.jpg', '9740.jpg'];

        foreach ($foldercheck as $key => $value) {
            $folder = $value;
            $foldermain = str_replace(".jpg", "", $folder);


            $title = $foldermain;





            $products = array(
                "category_id" => 52,
                "sku" => $title,
                "category_items_id" => 3,
                "title" => $title,
                "short_description" => "100% Wool",
                "description" => "100% Wool",
                "video_link" => "",
                "regular_price" => "800",
                "sale_price" => "0",
                "credit_limit" => "",
                "price" => "800",
                "file_name" => $foldermain . "s1_master_style60001.png",
                "file_name1" => $foldermain . "style_buttons.png",
                "file_name2" => $foldermain . "fabricx0001.png",
                "file_name3" => "",
                "user_id" => "10",
                "op_date_time" => "",
                "status" => "1",
                "home_slider" => "",
                "home_bottom" => "",
                "keywords" => "",
                "stock_status" => "In Stock",
                "variant_product_of" => "",
                "folder" => $foldermain);

            #$this->db->insert('products', $products);
        }
    }

    public function countrylist() {
        $countrylist = [['ALBANIA', 'AL'], ['ALGERIA', 'DZ'], ['ANDORRA', 'AD'], ['ANGOLA', 'AO'], ['ANGUILLA', 'AI'], ['ANTIGUA & BARBUDA', 'AG'], ['ARGENTINA', 'AR'], ['ARMENIA', 'AM'], ['ARUBA', 'AW'], ['AUSTRALIA', 'AU'], ['AUSTRIA', 'AT'], ['AZERBAIJAN', 'AZ'], ['BAHAMAS', 'BS'], ['BAHRAIN', 'BH'], ['BARBADOS', 'BB'], ['BELARUS', 'BY'], ['BELGIUM', 'BE'], ['BELIZE', 'BZ'], ['BENIN', 'BJ'], ['BERMUDA', 'BM'], ['BHUTAN', 'BT'], ['BOLIVIA', 'BO'], ['BOSNIA & HERZEGOVINA', 'BA'], ['BOTSWANA', 'BW'], ['BRAZIL', 'BR'], ['BRITISH VIRGIN ISLANDS', 'VG'], ['BRUNEI', 'BN'], ['BULGARIA', 'BG'], ['BURKINA FASO', 'BF'], ['BURUNDI', 'BI'], ['CAMBODIA', 'KH'], ['CAMEROON', 'CM'], ['CANADA', 'CA'], ['CAPE VERDE', 'CV'], ['CAYMAN ISLANDS', 'KY'], ['CHAD', 'TD'], ['CHILE', 'CL'], ['CHINA', 'C2'], ['COLOMBIA', 'CO'], ['COMOROS', 'KM'], ['CONGO - BRAZZAVILLE', 'CG'], ['CONGO - KINSHASA', 'CD'], ['COOK ISLANDS', 'CK'], ['COSTA RICA', 'CR'], ['COTE D IVOIRE', 'CI'], ['CROATIA', 'HR'], ['CYPRUS', 'CY'], ['CZECH REPUBLIC', 'CZ'], ['DENMARK', 'DK'], ['DJIBOUTI', 'DJ'], ['DOMINICA', 'DM'], ['DOMINICAN REPUBLIC', 'DO'], ['ECUADOR', 'EC'], ['EGYPT', 'EG'], ['EL SALVADOR', 'SV'], ['ERITREA', 'ER'], ['ESTONIA', 'EE'], ['ETHIOPIA', 'ET'], ['FALKLAND ISLANDS', 'FK'], ['FAROE ISLANDS', 'FO'], ['FIJI', 'FJ'], ['FINLAND', 'FI'], ['FRANCE', 'FR'], ['FRENCH GUIANA', 'GF'], ['FRENCH POLYNESIA', 'PF'], ['GABON', 'GA'], ['GAMBIA', 'GM'], ['GEORGIA', 'GE'], ['GERMANY', 'DE'], ['GIBRALTAR', 'GI'], ['GREECE', 'GR'], ['GREENLAND', 'GL'], ['GRENADA', 'GD'], ['GUADELOUPE', 'GP'], ['GUATEMALA', 'GT'], ['GUINEA', 'GN'], ['GUINEA-BISSAU', 'GW'], ['GUYANA', 'GY'], ['HONDURAS', 'HN'], ['HONG KONG', 'HK'], ['HUNGARY', 'HU'], ['ICELAND', 'IS'], ['INDIA', 'IN'], ['INDONESIA', 'ID'], ['IRELAND', 'IE'], ['ISRAEL', 'IL'], ['ITALY', 'IT'], ['JAMAICA', 'JM'], ['JAPAN', 'JP'], ['JORDAN', 'JO'], ['KAZAKHSTAN', 'KZ'], ['KENYA', 'KE'], ['KIRIBATI', 'KI'], ['KUWAIT', 'KW'], ['KYRGYZSTAN', 'KG'], ['LAOS', 'LA'], ['LATVIA', 'LV'], ['LESOTHO', 'LS'], ['LIECHTENSTEIN', 'LI'], ['LITHUANIA', 'LT'], ['LUXEMBOURG', 'LU'], ['MACEDONIA', 'MK'], ['MADAGASCAR', 'MG'], ['MALAWI', 'MW'], ['MALAYSIA', 'MY'], ['MALDIVES', 'MV'], ['MALI', 'ML'], ['MALTA', 'MT'], ['MARSHALL ISLANDS', 'MH'], ['MARTINIQUE', 'MQ'], ['MAURITANIA', 'MR'], ['MAURITIUS', 'MU'], ['MAYOTTE', 'YT'], ['MEXICO', 'MX'], ['MICRONESIA', 'FM'], ['MOLDOVA', 'MD'], ['MONACO', 'MC'], ['MONGOLIA', 'MN'], ['MONTENEGRO', 'ME'], ['MONTSERRAT', 'MS'], ['MOROCCO', 'MA'], ['MOZAMBIQUE', 'MZ'], ['NAMIBIA', 'NA'], ['NAURU', 'NR'], ['NEPAL', 'NP'], ['NETHERLANDS', 'NL'], ['NEW CALEDONIA', 'NC'], ['NEW ZEALAND', 'NZ'], ['NICARAGUA', 'NI'], ['NIGER', 'NE'], ['NIGERIA', 'NG'], ['NIUE', 'NU'], ['NORFOLK ISLAND', 'NF'], ['NORWAY', 'NO'], ['OMAN', 'OM'], ['PALAU', 'PW'], ['PANAMA', 'PA'], ['PAPUA NEW GUINEA', 'PG'], ['PARAGUAY', 'PY'], ['PERU', 'PE'], ['PHILIPPINES', 'PH'], ['PITCAIRN ISLANDS', 'PN'], ['POLAND', 'PL'], ['PORTUGAL', 'PT'], ['QATAR', 'QA'], ['R\xc3\x89UNION', 'RE'], ['ROMANIA', 'RO'], ['RUSSIA', 'RU'], ['RWANDA', 'RW'], ['SAMOA', 'WS'], ['SAN MARINO', 'SM'], ['SAO TOME & PRINCIPE', 'ST'], ['SAUDI ARABIA', 'SA'], ['SENEGAL', 'SN'], ['SERBIA', 'RS'], ['SEYCHELLES', 'SC'], ['SIERRA LEONE', 'SL'], ['SINGAPORE', 'SG'], ['SLOVAKIA', 'SK'], ['SLOVENIA', 'SI'], ['SOLOMON ISLANDS', 'SB'], ['SOMALIA', 'SO'], ['SOUTH AFRICA', 'ZA'], ['SOUTH KOREA', 'KR'], ['SPAIN', 'ES'], ['SRI LANKA', 'LK'], ['ST. HELENA', 'SH'], ['ST. KITTS & NEVIS', 'KN'], ['ST. LUCIA', 'LC'], ['ST. PIERRE & MIQUELON', 'PM'], ['ST. VINCENT & GRENADINES', 'VC'], ['SURINAME', 'SR'], ['SVALBARD & JAN MAYEN', 'SJ'], ['SWAZILAND', 'SZ'], ['SWEDEN', 'SE'], ['SWITZERLAND', 'CH'], ['TAIWAN', 'TW'], ['TAJIKISTAN', 'TJ'], ['TANZANIA', 'TZ'], ['THAILAND', 'TH'], ['TOGO', 'TG'], ['TONGA', 'TO'], ['TRINIDAD & TOBAGO', 'TT'], ['TUNISIA', 'TN'], ['TURKMENISTAN', 'TM'], ['TURKS & CAICOS ISLANDS', 'TC'], ['TUVALU', 'TV'], ['UGANDA', 'UG'], ['UKRAINE', 'UA'], ['UNITED ARAB EMIRATES', 'AE'], ['UNITED KINGDOM', 'GB'], ['UNITED STATES', 'US'], ['URUGUAY', 'UY'], ['VANUATU', 'VU'], ['VATICAN CITY', 'VA'], ['VENEZUELA', 'VE'], ['VIETNAM', 'VN'], ['WALLIS & FUTUNA', 'WF'], ['YEMEN', 'YE'], ['ZAMBIA', 'ZM'], ['ZIMBABWE', 'ZW']];
        foreach ($countrylist as $key => $value) {
            $cf = $value[0];
            $cc = $value[1];
            $products = array(
                "country_name" => $cf,
                "country_code" => $cc,
            );
            # $this->db->insert('country', $products);
        }
    }

    public function removedouble() {
        $query = "select id, title, count(title) as counter from products group by title";
        $query = $this->db->query($query);
        $data = $query->result_array();
        echo "<pre>";
        foreach ($data as $key => $value) {
            if ($value['counter'] > 1) {
                $ids = $value['id'];
                #  $this->db->where('id', $ids); //set column_name and value in which row need to update
                # $this->db->delete('products'); //
            }
        }
    }

    public function testmail() {
        setlocale(LC_MONETARY, 'en_US');

        

        $emailsender = email_sender;
        $sendername = email_sender_name;
        $email_bcc = email_bcc;

        $this->email->from(email_bcc, $sendername);

        $this->email->to("vogue@voguetailor.com");
        $this->email->bcc("octopuscartltd@gmail.com");
        $subject = "Vogue Tailors - 20% Discount On Online Order";
        $this->email->subject($subject);
//        $checkcode = REPORT_MODE;
//        if ($checkcode == 0) {
////                ob_clean();
//            echo $this->load->view('Email/general', array(), true);
//        } else {
//            $this->email->message($this->load->view('Email/general', array(), true));
//            $this->email->print_debugger();
//            echo $result = $this->email->send();
//            echo $this->load->view('Email/general', array(), true);
//        }
    }

}
