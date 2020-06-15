<?php
class AdminController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->library(['form_validation', 'upload']);
    }

    public function index()
    {
        if (!$this->session->userdata('admindata')) {
            redirect("/admin/login");
        }
        $data['admin'] = $this->session->userdata('admindata');
        $data['transactions'] = $this->Transaction_model->get_all_orders();
        foreach ($data['transactions'] as $key => &$value) {
            $transaction = $this->Transaction_model->get_transaction_by_reference($value['t_l_reference']);
            $value['t_l_description'] = $transaction['description'];
            $value['t_l_amount_paid'] = $value['t_l_amount_paid'];
            $value['t_l_quantity'] = $transaction['quantity'];
            $value['customer'] = $this->Auth_model->getuserbyrand($value['t_l_user']);
        }
        $this->load->view('admin/partials/header', $data);
        $this->load->view('admin/partials/sidebar');
        $this->load->view('admin/home');
        $this->load->view('admin/partials/footer');
    }

    public function invoice($ref){
        $data['reference'] = $ref;
        $data['invoices'] = $this->Transaction_model->get_all_orders_by_reference($ref);
        $data['user'] = $this->Auth_model->getuserbyrand($data['invoices'][0]['t_l_user']);
        $data['transaction_date'] = $data['invoices'][0]['t_l_date'];
        $data['insurance'] = array('insured' => 0,'insured_type' => '', 'insured_price' => 0);
        $data['delivery'] = '';
        $data['subtotal'] = 0;
        $data['lifeinsured'] = 0;
        foreach ($data['invoices'] as $key => &$value) {
            $data['insurance']['insured'] = $value['t_l_insured'];
            $data['insurance']['insured_type'] = $value['t_l_insured_type'];
            $data['insurance']['insured_price'] = $value['t_l_insured_price'];
            $data['delivery'] = $value['t_l_delivery'];
            $data['subtotal'] += $value['t_l_amount'];
            $data['lifeinsured'] = $value['t_l_life_insured'] == 1 ? 1 : 0;
        }
        $data['deliveryprice'] = $data['invoices'][0]['t_l_amount_paid'] - $data['subtotal'] - $data['insurance']['insured_price'];
        // var_dump($data);
        $this->load->view('admin/invoice', $data);
    }

    public function transaction_status($status, $ref){
        $this->Transaction_model->updatestatus($status,$ref);
        $user_ref = $this->Transaction_model->getuserbyref($ref);
        if($user_ref){
            $user = $this->Auth_model->getuserbyrand($user_ref);
            $type = 'transaction_'.$status;
            $mail = $this->Admin_model->fetchmailtype($type);
            $msg = $mail['m_text'];
            if($status === 'dispatched'){$status = 'shipped';}
            $maildata = array(
                "user" => $user,
                "status" => $status,
                "msg" => $msg,
                'link' => base_url('feedback/'.$user['u_gentoken']),
                "reference" => $ref,
                "transaction_date" => $this->functions->longdate(),
                'contact' => $this->Admin_model->fetch_contact(),
            );
            $subject = "Your order ". $ref." has been ".$status;
            $send = $this->mailer->send($subject, 'Samsung Experience Store', $user['u_email'], $maildata, 'mail/status.php', 'Samsung Experience Store', 'support@samsungexperiencestores.com', 'orders@samsungexperiencestores.com');
        }
        redirect('/admin');
    }

    public function login()
    {
        if ($this->input->post()) {
            // Get POST data from login form...
            // Check if login validity
            $req = $this->input->post();
            $req['password'] = $this->functions->hashed_password($req['password']);
            $user = $this->Admin_model->checkadmin($req['email'], $req['password']);
            // ...save the user row as the session.
            if ($user) {
                $this->session->set_userdata(['admindata' => $user]);
                return redirect('/admin');
            }else{
                $this->session->set_flashdata('status', 'danger');
                $this->session->set_flashdata('message', "Invalid Email or Password");
                redirect($_SERVER['HTTP_REFERER']);
            }
        }else{
            $this->load->view('admin/partials/header');
            $this->load->view('admin/login');
            $this->load->view('admin/partials/footer');
        }
    }

    public function products(){
        if (!$this->session->userdata('admindata')) {
            redirect("/admin/login");
        }
        $data['admin'] = $this->session->userdata('admindata');
        $data['products'] = $this->Products_model->all_products();
        $data['categories'] = $this->Admin_model->categories();
        $data['brands'] = $this->Admin_model->brands();
        foreach ($data['products'] as $key => &$value) {
            $value['stock'] = $this->Products_model->get_last_stock_quantity($value['p_rand']);
            if($value['p_brand']){
                $value['brand'] = $this->Products_model->getbrandbyrand($value['p_brand']);
            }
            if($value['p_category']){
                $value['category'] = $this->Products_model->getcategoriesbyrand($value['p_category']);
            }
        }
        $this->load->view('admin/partials/header', $data);
        $this->load->view('admin/partials/sidebar');
        $this->load->view('admin/products');
        $this->load->view('admin/partials/footer');
    }

    public function trashedproducts(){
        if (!$this->session->userdata('admindata')) {
            redirect("/admin/login");
        }
        $data['admin'] = $this->session->userdata('admindata');
        $data['products'] = $this->Products_model->all_trashedproducts();
        $data['categories'] = $this->Admin_model->categories();
        $data['brands'] = $this->Admin_model->brands();
        foreach ($data['products'] as $key => &$value) {
            $value['stock'] = $this->Products_model->get_last_stock_quantity($value['p_rand']);
            if($value['p_brand']){
                $value['brand'] = $this->Products_model->getbrandbyrand($value['p_brand']);
            }
            if($value['p_category']){
                $value['category'] = $this->Products_model->getcategoriesbyrand($value['p_category']);
            }
        }
        $this->load->view('admin/partials/header', $data);
        $this->load->view('admin/partials/sidebar');
        $this->load->view('admin/trashedproducts');
        $this->load->view('admin/partials/footer');
    }

    public function create_product(){
        if($this->input->post()){
            $req = $this->input->post();
            $req['p_rand'] = $this->functions->generate(10);
            $req['p_date'] = $this->functions->longdate();
            $req['p_visible'] = 1;
            $newstock = (int)$req['p_stock'];
            $req['p_original_price'] = $req['p_price'];
            // if ($req['p_price'] <= 133340) {
            //     $paystack =  (1.5 / 100) * $req['p_price'];
            //     $req['p_price'] = $paystack + $req['p_price'];
            // }else{
            //     $req['p_price'] = $req['p_price'] + 2000;
            // }
            unset($req['p_stock'],$req['files']);
            $product = array(
                'p_s_product' => $req['p_rand'], 
                'p_s_stock' => $newstock, 
                'p_s_number' => $newstock,
                'p_s_reason' => 'New Stock',
                'p_s_rand' => $this->functions->generate(10),
                'p_s_date' =>  $this->functions->longdate()
            );
            $this->Products_model->create_stock($product);
            $this->Products_model->create_product($req);
            redirect('admin/product/'.$req['p_rand']);
        }
    }

    public function addimage($product){
        if (!$this->session->userdata('admindata')) {
            redirect("/admin/login");
        }
        $data['product'] = $product;
        $data['admin'] = $this->session->userdata('admindata');
        $this->load->view('admin/partials/header', $data);
        $this->load->view('admin/partials/sidebar');
        $this->load->view('admin/addimage');
        $this->load->view('admin/partials/footer');
    }

    public function product($product){
        if (!$this->session->userdata('admindata')) {
            redirect("/admin/login");
        }
        $data['product'] = $this->Products_model->getproductByrand($product);
        $data['categories'] = $this->Admin_model->categories();
        $data['stock'] = $this->Products_model->get_last_stock_quantity($product);
        $data['images'] = $this->Products_model->fetchproductimages($product);
        foreach ($data['images'] as $key => &$image) {
            if (strpos($image['p_i_image_url'], 'https://image') === false) {
                $image['p_i_image_url'] = base_url($image['p_i_image_url']);
            }else{
                $image['p_i_image_url'] = $image['p_i_image_url'];
            }
        }
        $data['admin'] = $this->session->userdata('admindata');
        $data['colors'] = explode(",", $data['product']['p_colors']);
        $this->load->view('admin/partials/header', $data);
        $this->load->view('admin/partials/sidebar');
        $this->load->view('admin/product');
        $this->load->view('admin/partials/footer');
    }

    public function imageupload($rand){
        $count = count($_FILES['userfile']['size']);
        foreach($_FILES as $key=>$value)
        for($s=0; $s<=$count-1; $s++) {
            $_FILES['userfile']['name']=$value['name'][$s];
            $_FILES['userfile']['type']    = $value['type'][$s];
            $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
            $_FILES['userfile']['error']       = $value['error'][$s];
            $_FILES['userfile']['size']    = $value['size'][$s];

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '957286';
            $config['encrypt_name'] = TRUE;
            
            $this->load->library('upload', $config);
            
            if ($this->upload->do_upload()) {
                $image_data = $this->upload->data();
                $req = $this->input->post();
                $image = "uploads/". $image_data['file_name'];
                $color = str_replace(' ', '', $req['p_i_color']);
                $data = array('p_i_product' => $rand, 'p_i_color' => $color, 'p_i_image_url' => $image, 'p_i_rand' => $this->functions->generate(10), 'p_i_visible' => 1 );
                $this->Products_model->add_image($data);
            }
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
    
    public function update_product(){
        if($this->input->post()){
            $req = $this->input->post();
            $rand = $req['p_rand'];
            $product = $this->Products_model->getproductByrand($rand);
            $req['p_old_price'] = $product['p_price'];
            // $req['p_original_price'] = $req['p_original_price'];
            // if ($req['p_original_price'] <= 133340) {
            //     $paystack =  (1.5 / 100) * $req['p_original_price'];
            //     $req['p_price'] = $paystack + $req['p_original_price'];
            // }else{
            //     $req['p_price'] = $req['p_original_price'] + 2000;
            // }
            unset($req['p_rand'],$req['files']);
            $this->Products_model->update_product($rand,$req);
            redirect('admin/product/'.$rand);
        }
    }
    
    public function update_stock(){
        if($this->input->post()){
            $req = $this->input->post();
            $product = $req['product'];
            $oldstock = $this->Products_model->get_last_stock_quantity($product);
            if ($req['action'] == 'add') {
                $newstock = $req['stock'] + $oldstock;
            } else {
                $newstock = $oldstock - $req['stock'];
            }
            
            $stockdata = array(
                'p_s_product' => $product, 
                'p_s_stock' => $newstock, 
                'p_s_number' => $req['stock'],
                'p_s_reason' => 'New Stock',
                'p_s_rand' => $this->functions->generate(10),
                'p_s_date' =>  $this->functions->longdate()
            );
            $this->Products_model->create_stock($stockdata);
            redirect('admin/product/'.$product);
        }
    }
    
    public function feature_product($rand){
        $this->Products_model->feature_product($rand);
        redirect('admin/product/'.$rand);
    }
    
    public function delete_product($rand){
        $this->Products_model->delete_product($rand);
        redirect('admin/products');
    }
    
    public function restore_product($rand){
        $this->Products_model->restore_product($rand);
        redirect('admin/trashedproducts');
    }
    
    public function brands(){
        if (!$this->session->userdata('admindata')) {
            redirect("/admin/login");
        }
        $data['admin'] = $this->session->userdata('admindata');
        $data['brands'] = $this->Admin_model->brands();
        $this->load->view('admin/partials/header', $data);
        $this->load->view('admin/partials/sidebar');
        $this->load->view('admin/brands');
        $this->load->view('admin/partials/footer');
    }

    public function create_brand(){
        if($this->input->post()){
            $req = $this->input->post();
            $req['b_rand'] = $this->functions->generate(10);
            $req['b_visible'] = 1;
            $this->Products_model->create_brand($req);
            redirect('admin/brands');
        }
    }

    public function update_brand(){
        if($this->input->post()){
            $req = $this->input->post();
            $rand = $req['b_rand'];
            unset($req['b_rand']);
            $this->Products_model->update_brand($rand,$req);
            redirect('admin/brands');
        }
    }

    public function delete_brand($rand){
        $this->Products_model->delete_brand($rand);
        redirect('admin/brands');
    }
    
    public function categories(){
        if (!$this->session->userdata('admindata')) {
            redirect("/admin/login");
        }
        $data['admin'] = $this->session->userdata('admindata');
        $data['categories'] = $this->Admin_model->categories();
        $this->load->view('admin/partials/header', $data);
        $this->load->view('admin/partials/sidebar');
        $this->load->view('admin/categories');
        $this->load->view('admin/partials/footer');
    }

    public function create_category(){
        if($this->input->post()){
            $req = $this->input->post();
            $req['p_c_rand'] = $this->functions->generate(10);
            $req['p_c_visible'] = 1;
            $req['p_c_default'] = 0;
            $alias = strtolower($req['p_c_name']);
            $req['p_c_alias'] = str_replace(' ', '', $alias);
            $this->Products_model->create_category($req);
            redirect('admin/categories');
        }
    }

    public function update_category(){
        if($this->input->post()){
            $req = $this->input->post();
            $rand = $req['p_c_rand'];
            unset($req['p_c_rand']);
            $this->Products_model->update_category($rand,$req);
            redirect('admin/categories');
        }
    }

    public function delete_category($rand){
        $this->Products_model->delete_category($rand);
        redirect('admin/categories');
    }

    public function users(){
        if (!$this->session->userdata('admindata')) {
            redirect("/admin/login");
        }
        $data['admin'] = $this->session->userdata('admindata');
        $data['users'] = $this->Admin_model->users();
        foreach ($data['users'] as $key => &$value) {
            $value['transaction'] = $this->Transaction_model->countusertransactions($value['u_rand']);
        }
        $this->load->view('admin/partials/header', $data);
        $this->load->view('admin/partials/sidebar');
        $this->load->view('admin/users');
        $this->load->view('admin/partials/footer');
    }

    public function transactions(){
        if (!$this->session->userdata('admindata')) {
            redirect("/admin/login");
        }
        $data['admin'] = $this->session->userdata('admindata');
        $data['transactions'] = $this->Transaction_model->all_transactions();
        foreach ($data['transactions'] as $key => &$value) {
            $transaction = $this->Transaction_model->get_transaction_by_reference($value['t_l_reference']);
            $value['t_l_description'] = $transaction['description'];
            $value['t_l_amount_paid'] = $value['t_l_amount_paid'];
            $value['t_l_quantity'] = $transaction['quantity'];
            $value['customer'] = $this->Auth_model->getuserbyrand($value['t_l_user']);;
        }
        $this->load->view('admin/partials/header', $data);
        $this->load->view('admin/partials/sidebar');
        $this->load->view('admin/transactions');
        $this->load->view('admin/partials/footer');
    }

    public function navs(){
        if (!$this->session->userdata('admindata')) {
            redirect("/admin/login");
        }
        $data['admin'] = $this->session->userdata('admindata');
        $data['navs'] = $this->Home_model->navs();
        $this->load->view('admin/partials/header', $data);
        $this->load->view('admin/partials/sidebar');
        $this->load->view('admin/navs');
        $this->load->view('admin/partials/footer');
    } 

    public function enablenav($rand){
        $this->Home_model->update_nav($rand, 1);
        redirect('admin/navs');
    } 

    public function disablenav($rand){
        $this->Home_model->update_nav($rand, 0);
        redirect('admin/navs');
    } 

    public function submenu(){
        if (!$this->session->userdata('admindata')) {
            redirect("/admin/login");
        }
        $data['admin'] = $this->session->userdata('admindata');
        $data['navs'] = $this->Home_model->submenu_navs();
        $data['subs'] = $this->Home_model->submenus();
        foreach ($data['subs'] as $key => &$value) {
            $value['parent'] = $this->Home_model->getnavbyrand($value['s_header']);;
        }
        $this->load->view('admin/partials/header', $data);
        $this->load->view('admin/partials/sidebar');
        $this->load->view('admin/submenu');
        $this->load->view('admin/partials/footer');
    }

    public function deletesubmenu($rand){
        $this->Home_model->deletesubmenu($rand);
        redirect('admin/sub-menu');
    } 

    public function addsubmenu(){
        if($this->input->post()){
            $req = $this->input->post();
            $req['s_rand'] = $this->functions->generate(10);
            $this->Home_model->addsubmenu($req);
            redirect('admin/sub-menu');
        }
    } 

    public function logout(){
        $this->session->unset_userdata('admindata');
        return redirect('/admin/login');
    }

    public function banners(){
        if (!$this->session->userdata('admindata')) {
            redirect("/admin/login");
        }
        $data['banners'] = $this->Home_model->banners();
        $data['admin'] = $this->session->userdata('admindata');
        $this->load->view('admin/partials/header', $data);
        $this->load->view('admin/partials/sidebar');
        $this->load->view('admin/banners');
        $this->load->view('admin/partials/footer');
    }

    public function create_banner(){
        if($this->input->post()){
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '1024';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);
            $req = $this->input->post();
            
            if ($this->upload->do_upload()) {
                $image_data = $this->upload->data();
                $image = "uploads/". $image_data['file_name'];
                $data = array('hb_title' => $req['hb_title'], 'hb_subtitle' => $req['hb_subtitle'], 'hb_button' => $req['hb_button'], 'hb_link' => $req['hb_link'], 'hb_rand' => $this->functions->generate(10), 'hb_image_url' => $image );
                $this->Home_model->create_banner($data);
                redirect('admin/banners');
            }else{
                $this->session->set_flashdata('status', 'danger');
                $this->session->set_flashdata('message', 'Image Upload Failed');
                redirect($_SERVER['HTTP_REFERER']);
            }
            // Create the banner...
        }
    }

    public function deletebanner($rand){
        $this->Home_model->deletebanner($rand);
        redirect('admin/banners');
    } 

    public function restorebanner($rand){
        $this->Home_model->restorebanner($rand);
        redirect('admin/banners');
    } 

    public function sliders(){
        if (!$this->session->userdata('admindata')) {
            redirect("/admin/login");
        }
        $data['sliders'] = $this->Home_model->sliders();
        $data['admin'] = $this->session->userdata('admindata');
        $this->load->view('admin/partials/header', $data);
        $this->load->view('admin/partials/sidebar');
        $this->load->view('admin/sliders');
        $this->load->view('admin/partials/footer');
    }

    public function addslider(){
        if($_FILES){
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '1024';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);
            
            if ($this->upload->do_upload()) {
                $image_data = $this->upload->data();
                $image = "uploads/". $image_data['file_name'];
                $req = $this->input->post();
                $data = array('sl_rand' => $this->functions->generate(10), 'sl_image_url' => $image, 'sl_link' => $req['sl_link'], 'sl_text' => $req['sl_text'] );
                $this->Home_model->create_slider($data);
                redirect('admin/sliders');
            }else{
                $this->session->set_flashdata('status', 'danger');
                $this->session->set_flashdata('message', 'Image Upload Failed');
                redirect($_SERVER['HTTP_REFERER']);
            }
        }
    }

    public function deleteslider($rand){
        $this->Home_model->deleteslider($rand);
        redirect('admin/sliders');
    } 

    public function deleteimage($rand,$product){
        $this->Products_model->deleteimage($rand);
        redirect('admin/product/'.$product);
    } 

    public function openings(){
        if (!$this->session->userdata('admindata')) {
            redirect("/admin/login");
        }
        $data['careers'] = $this->Admin_model->careers();
        $data['admin'] = $this->session->userdata('admindata');
        $this->load->view('admin/partials/header', $data);
        $this->load->view('admin/partials/sidebar');
        $this->load->view('admin/openings');
        $this->load->view('admin/partials/footer');
    }

    public function create_opening(){
        if($this->input->post()){
            $req = $this->input->post();
            $req['rc_rand'] = $this->functions->generate(10);
            $req['rc_date'] = $this->functions->longdate();
            $req['rc_visible'] = 1;
            unset($req['files']);
            $this->Admin_model->create_opening($req);
            redirect('admin/openings');
        }
    }

    public function deletecareer($rand){
        $this->Admin_model->deleteopening($rand);
        redirect('admin/openings');
    } 

    public function applications(){
        if (!$this->session->userdata('admindata')) {
            redirect("/admin/login");
        }
        $data['applications'] = $this->Admin_model->fetch_applications();
        $data['admin'] = $this->session->userdata('admindata');
        $this->load->view('admin/partials/header', $data);
        $this->load->view('admin/partials/sidebar');
        $this->load->view('admin/applications');
        $this->load->view('admin/partials/footer');
    }

    public function deleteapplication($rand){
        $this->Admin_model->deleteapplication($rand);
        redirect('admin/applications');
    } 

    public function popup(){
        if (!$this->session->userdata('admindata')) {
            redirect("/admin/login");
        }
        $data['pop'] = $this->Admin_model->fetch_popupmessage();
        $data['admin'] = $this->session->userdata('admindata');
        $this->load->view('admin/partials/header', $data);
        $this->load->view('admin/partials/sidebar');
        $this->load->view('admin/popup');
        $this->load->view('admin/partials/footer');
    }

    public function popupstatus($status){
        $new = $status == 'enable' ? 1 : 0;
        $data = array('pop_active' => $new );
        $this->Admin_model->updatepopup($data);
        redirect('admin/popup');
    } 

    public function editpopup(){
        if($_FILES){
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '1024';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);
            
            if ($this->upload->do_upload()) {
                $image_data = $this->upload->data();
                $image = "uploads/". $image_data['file_name'];
                $req = array('pop_image' => $image);
                $this->Admin_model->updatepopup($req);
                redirect($_SERVER['HTTP_REFERER']);
            }else{
                $this->session->set_flashdata('status', 'danger');
                $this->session->set_flashdata('message', "Image Upload Failed");
                redirect($_SERVER['HTTP_REFERER']);
            }
        }
    }

    public function mails(){
        if (!$this->session->userdata('admindata')) {
            redirect("/admin/login");
        }
        $data['mails'] = $this->Admin_model->fetch_mails();
        $data['admin'] = $this->session->userdata('admindata');
        $this->load->view('admin/partials/header', $data);
        $this->load->view('admin/partials/sidebar');
        $this->load->view('admin/mails');
        $this->load->view('admin/partials/footer');
    }

    public function create_mail(){
        if($this->input->post()){
            $req = $this->input->post();
            $check = $this->Admin_model->checkifmailexist($req['m_type']);
            if ($check) {
                $req['m_rand'] = $this->functions->generate(10);
                $req['m_active'] = 1;
                $this->Admin_model->create_mail($req);
                redirect('admin/mails');
            } else {
                redirect('admin/mails');
            }        
        }
    }

    public function deletemail($rand){
        $this->Admin_model->deletemail($rand);
        redirect('admin/mails');
    } 

    public function update_mail(){
        if($this->input->post()){
            $req = $this->input->post();
            $rand = $req['m_rand'];
            unset($req['m_rand']);
            $this->Admin_model->update_mail($rand, $req);
            redirect('admin/mails');       
        }
    }

    public function analytics(){
        if (!$this->session->userdata('admindata')) {
            redirect("/admin/login");
        }
        // Year
        // Top Visits
        $yeardate_from = strtotime(date('Y-1-01'));
        $yeardate_to = strtotime(date('Y-12-30'));
        $yeartop_visits = $this->Transaction_model->frequent_customers($yeardate_from, $yeardate_to);
        $yeartop_visits = array_slice($yeartop_visits, 0, 5);
        $data['yeartopfiveVisit']['name'] = [];
		$data['yeartopfiveVisit']['value'] = [];
        foreach ($yeartop_visits as $key => &$value) {
            $value['user'] =  $this->Auth_model->getuserbyrand($value['t_l_user']);
            array_push($data['yeartopfiveVisit']['name'],$value['user']['u_firstname'].' '. $value['user']['u_lastname']); 
			array_push($data['yeartopfiveVisit']['value'],$value['c']); 
        }

        // Top Buyers
        $yeartop_buyers = $this->Transaction_model->top_buyers($yeardate_from, $yeardate_to);
        $data['yeartopfiveSpent']['name'] = [];
		$data['yeartopfiveSpent']['value'] = [];
        foreach ($yeartop_buyers as $key => &$value) {
            $value['user'] =  $this->Auth_model->getuserbyrand($value['t_l_user']);
            array_push($data['yeartopfiveSpent']['name'],$value['user']['u_firstname'].' '. $value['user']['u_lastname']); 
			array_push($data['yeartopfiveSpent']['value'],$value['s']); 
        }

        // Top Product
        $yeartop_products = $this->Transaction_model->top_products_chart($yeardate_from, $yeardate_to);
        $data['yeartopfiveProducts']['name'] = [];
		$data['yeartopfiveProducts']['value'] = [];
        foreach ($yeartop_products as $key => &$value) {
            $value['product'] =  $this->Products_model->getproductByrand($value['t_l_product']);;
            array_push($data['yeartopfiveProducts']['name'],$value['product']['p_name']); 
			array_push($data['yeartopfiveProducts']['value'],$value['c']); 
        }

        $data['yeartransactioncount'] = $this->Transaction_model->totalTransactionmade($yeardate_from, $yeardate_to);
        $data['yeartransactionSum'] = $this->Transaction_model->transactionSum($yeardate_from, $yeardate_to);

        // Month
        // Top Visits
        $date_from = strtotime(date('Y-m-01'));
        $date_to = strtotime(date('Y-m-30'));
        $top_visits = $this->Transaction_model->frequent_customers($date_from, $date_to);
        $top_visits = array_slice($top_visits, 0, 5);
        $data['topfiveVisit']['name'] = [];
		$data['topfiveVisit']['value'] = [];
        foreach ($top_visits as $key => &$value) {
            $value['user'] =  $this->Auth_model->getuserbyrand($value['t_l_user']);
            array_push($data['topfiveVisit']['name'],$value['user']['u_firstname'].' '. $value['user']['u_lastname']); 
			array_push($data['topfiveVisit']['value'],$value['c']); 
        }

        // Top Buyers
        $top_buyers = $this->Transaction_model->top_buyers($date_from, $date_to);
        $data['topfiveSpent']['name'] = [];
		$data['topfiveSpent']['value'] = [];
        foreach ($top_buyers as $key => &$value) {
            $value['user'] =  $this->Auth_model->getuserbyrand($value['t_l_user']);
            array_push($data['topfiveSpent']['name'],$value['user']['u_firstname'].' '. $value['user']['u_lastname']); 
			array_push($data['topfiveSpent']['value'],$value['s']); 
        }

        // Top Product
        $top_products = $this->Transaction_model->top_products_chart($date_from, $date_to);
        $data['topfiveProducts']['name'] = [];
		$data['topfiveProducts']['value'] = [];
        foreach ($top_products as $key => &$value) {
            $value['product'] =  $this->Products_model->getproductByrand($value['t_l_product']);;
            array_push($data['topfiveProducts']['name'],$value['product']['p_name']); 
			array_push($data['topfiveProducts']['value'],$value['c']); 
        }

        $data['transactioncount'] = $this->Transaction_model->totalTransactionmade($date_from, $date_to);
        $data['transactionSum'] = $this->Transaction_model->transactionSum($date_from, $date_to);

        // $top_buyers = array_slice($top_buyers, 0, 5);
        // var_dump($top_buyers);die();
        $data['admin'] = $this->session->userdata('admindata');
        $this->load->view('admin/partials/header', $data);
        $this->load->view('admin/partials/sidebar');
        $this->load->view('admin/analytics');
        $this->load->view('admin/partials/footer');
    }

    public function contact(){
        if (!$this->session->userdata('admindata')) {
            redirect("/admin/login");
        }
        $data['contact'] = $this->Admin_model->fetch_contact();
        $data['admin'] = $this->session->userdata('admindata');
        $this->load->view('admin/partials/header', $data);
        $this->load->view('admin/partials/sidebar');
        $this->load->view('admin/contact');
        $this->load->view('admin/partials/footer');
    }

    public function updatecontact(){
        if($this->input->post()){
            $req = $this->input->post();
            $this->Admin_model->update_contact($req);
            redirect('admin/contact');      
        }
    }

    public function feedbacks(){
        if (!$this->session->userdata('admindata')) {
            redirect("/admin/login");
        }
        $data['feedbacks'] = $this->Admin_model->fetch_feedbacks();
        $data['admin'] = $this->session->userdata('admindata');
        $this->load->view('admin/partials/header', $data);
        $this->load->view('admin/partials/sidebar');
        $this->load->view('admin/feedbacks');
        $this->load->view('admin/partials/footer');
    }

    public function resizeimg(){
        $this->load->view('admin/resizeimg');
    }

    public function preorder(){
        if($this->input->post()){
            $req = $this->input->post();
            $data = $req['data'];
            $data['pre_price'] = $req['price'];
            $data['pre_order'] = $data['model'] .' -Color: '. $data['color'];
            $data['pre_reference'] = $req['paystacktrxref'];
            $data['pre_rand'] = $this->functions->generate(10);
            $data['pre_date'] = $this->functions->longdate();
            unset($data['model'],$data['color']);
            $this->Admin_model->preorder($data);

            $user = $this->Auth_model->getuserbyrand($req['user']);
            $maildata = array(
                "data" => $data,
                "reference" => $req['paystacktrxref'],
                "transaction_date" => $this->functions->longdate(),
                "subtotal" => $data['pre_price'],
                'contact' => $this->Admin_model->fetch_contact(),
            );
            $subject = "Pre Order No".$req['paystacktrxref'];
            $send = $this->mailer->send($subject, 'Samsung Experience Store', $data['pre_email'], $maildata, 'mail/order.php', 'Samsung Experience Store', 'support@samsungexperiencestores.com', 'orders@samsungexperiencestores.com');
        }
    }

    public function preorders(){
        if (!$this->session->userdata('admindata')) {
            redirect("/admin/login");
        }
        $data['preorders'] = $this->Admin_model->preorders();
        $data['admin'] = $this->session->userdata('admindata');
        $this->load->view('admin/partials/header', $data);
        $this->load->view('admin/partials/sidebar');
        $this->load->view('admin/preorders');
        $this->load->view('admin/partials/footer');
    }

    public function pages(){
        if (!$this->session->userdata('admindata')) {
            redirect("/admin/login");
        }
        $data['pages'] = $this->Admin_model->pages();
        $data['admin'] = $this->session->userdata('admindata');
        $this->load->view('admin/partials/header', $data);
        $this->load->view('admin/partials/sidebar');
        $this->load->view('admin/pages');
        $this->load->view('admin/partials/footer');
    }

    public function deletepage($rand){
        $this->Admin_model->deletepage($rand);
        redirect('admin/pages');
    } 
}