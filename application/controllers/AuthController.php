<?php

class AuthController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login()
    {
        if ($this->session->userdata('patient')) {
            redirect("/");
        }
        if ($this->input->post()) {
            // Get POST data from login form...
            // Check if login validity
            $req = $this->input->post();
            $req['m_p_password'] = $this->functions->hashed_password($req['m_p_password']);
            $user = $this->Auth_model->checkuser($req['m_p_email'], $req['m_p_password']);
            // ...save the user row as the session.
            if ($user) {
                $this->session->set_userdata(['patient' => $user]);
                return redirect('/');
            }else{
                $this->session->set_flashdata('status', 'danger');
                $this->session->set_flashdata('message', "Invalid Email or Password");
                redirect($_SERVER['HTTP_REFERER']);
            }
        }else{
            $this->load->view('partials/header');
            $this->load->view('login');
            $this->load->view('partials/footer');
        }
    }

    public function register()
    {
        if ($this->session->userdata('patient')) {
            redirect("/");
        }
        if ($this->input->post()) {
            // Get POST data from login form...
            // Check if login validity
            $req = $this->input->post();
            $req['m_p_password'] = $this->functions->hashed_password($req['m_p_password']);
            $user = $this->Auth_model->checkUserEmail($req['m_p_email']);
            // ...save the user row as the session.
            if ($user) {
                $this->session->set_flashdata('status', 'danger');
                $this->session->set_flashdata('message', "This Account exist");
                redirect($_SERVER['HTTP_REFERER']); 
            }
            $patient = $this->Auth_model->createPatient($req);
            $this->session->set_userdata(['patient' => $patient]);
            return redirect('/');
        }else{
            $this->load->view('partials/header');
            $this->load->view('register');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('patient');
        return redirect('/');
    }

    public function doctorLogin()
    {
        if ($this->session->userdata('doctor')) {
            redirect("doctor");
        }
        if ($this->input->post()) {
            // Get POST data from login form...
            // Check if login validity
            $req = $this->input->post();
            $req['m_d_password'] = $this->functions->hashed_password($req['m_d_password']);
            $user = $this->Auth_model->checkDoctor($req['m_d_email'], $req['m_d_password']);
            // ...save the user row as the session.
            if ($user) {
                $this->session->set_userdata(['doctor' => $user]);
                return redirect('doctor');
            }else{
                $this->session->set_flashdata('status', 'danger');
                $this->session->set_flashdata('message', "Invalid Email or Password");
                redirect($_SERVER['HTTP_REFERER']);
            }
        }else{
            $this->load->view('doctor/partials/header');
            $this->load->view('doctor/login');
            $this->load->view('doctor/partials/footer');
        }
    }

    public function password($pass){
        $pass = md5(sha1($pass));
        var_dump($pass);
    }
}