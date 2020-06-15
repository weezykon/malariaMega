<?php
class UserController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function updateaddress()
    {
        if($this->input->post()){
            $user = $this->session->userdata('logindata');
            $req = $this->input->post();
            $this->Auth_model->updateprofile($user['u_rand'],$req);
            $userdata = $this->Auth_model->getuserbyrand($user['u_rand']);
            if ($userdata) {
                $this->session->set_userdata(['logindata' => $userdata]);
            }
            redirect('checkout');
        }
    }

    public function password()
    {
        if (!$this->session->userdata('logindata')) {
            redirect('login');
        }
        if ($this->input->post()) {
            // Get POST data from login form...
            // Check if login validity
            $req = $this->input->post();
            $user = $this->session->userdata('logindata');
            if($req['password'] === $req['confirmpassword']){
                $old_password = $this->functions->hashed_password($req['oldpassword']);
                $_password = $this->functions->hashed_password($req['password']);
                $checkpassword = $this->Auth_model->checkpassword($user['u_rand'],$old_password);
                if ($checkpassword) {
                    $data = array('u_password' => $_password );
                    $this->Auth_model->updateprofile($user['u_rand'], $data);
                    $this->session->set_flashdata('status', 'success');
                    $this->session->set_flashdata('message', "Password Updated");
                    redirect($_SERVER['HTTP_REFERER']);
                }else{
                    $this->session->set_flashdata('status', 'danger');
                    $this->session->set_flashdata('message', "Old Password doesn't match");
                    redirect($_SERVER['HTTP_REFERER']);
                }
            }else{
                $this->session->set_flashdata('status', 'danger');
                $this->session->set_flashdata('message', "Password doesn't match");
                redirect($_SERVER['HTTP_REFERER']);
            }
        }else{
            $data['carts'] = $this->Products_model->fetchCart(session_id());
            $data['navs'] = $this->Home_model->navs();
            $data['contact'] = $this->Admin_model->fetch_contact();
            foreach ($data['navs'] as $key => &$value) {
                if($value['h_submenu'] == 1){
                    $value['subs'] = $this->Home_model->fetchsubmenubyparent($value['h_rand']);
                }
            }
            $this->load->view('partials/header', $data);
            $this->load->view('auth/password');
            $this->load->view('partials/footer');
        }
    }

    public function orders(){
        if (!$this->session->userdata('logindata')) {
            redirect('login');
        }
        $data['carts'] = $this->Products_model->fetchCart(session_id());
        $data['navs'] = $this->Home_model->navs();
        $data['contact'] = $this->Admin_model->fetch_contact();
        $data['user'] = $this->session->userdata('logindata');
        $user = $this->session->userdata('logindata');
        $data['orders'] = $this->Transaction_model->get_user_orders($user['u_rand']);
        foreach ($data['orders'] as $key => &$value) {
            $transaction = $this->Transaction_model->get_transaction_by_reference($value['t_l_reference']);
            $value['t_l_description'] = $transaction['description'];
            $value['t_l_amount_paid'] = $value['t_l_amount_paid'];
            $value['t_l_quantity'] = $transaction['quantity'];
            $value['customer'] = $this->Auth_model->getuserbyrand($value['t_l_user']);
        }
        $this->load->view('partials/header', $data);
        $this->load->view('auth/orders');
        $this->load->view('partials/footer');
    }

    public function profile()
    {
        if (!$this->session->userdata('logindata')) {
            redirect('login');
        }
        if ($this->input->post()) {
            // Get POST data from login form...
            // Check if login validity
            $req = $this->input->post();
            $user = $this->session->userdata('logindata');
            $this->Auth_model->updateprofile($user['u_rand'], $req);

            $userdata = $this->Auth_model->getuserbyrand($user['u_rand']);
            if ($userdata) {
                $this->session->set_userdata(['logindata' => $userdata]);
            }
            
            $this->session->set_flashdata('status', 'success');
            $this->session->set_flashdata('message', "Profile Updated");
            redirect($_SERVER['HTTP_REFERER']);
        }else{
            $data['carts'] = $this->Products_model->fetchCart(session_id());
            $data['navs'] = $this->Home_model->navs();
            $data['contact'] = $this->Admin_model->fetch_contact();
            $data['user'] = $this->session->userdata('logindata');
            foreach ($data['navs'] as $key => &$value) {
                if($value['h_submenu'] == 1){
                    $value['subs'] = $this->Home_model->fetchsubmenubyparent($value['h_rand']);
                }
            }
            $this->load->view('partials/header', $data);
            $this->load->view('auth/profile');
            $this->load->view('partials/footer');
        }
    }
}