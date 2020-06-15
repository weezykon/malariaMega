<?php
class HomeController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('patient')) {
            redirect("login");
        }
    }

    public function index()
    {
        $this->load->view('partials/header');
        $this->load->view('partials/sidebar');
        $this->load->view('home');
        $this->load->view('partials/footer');
    }
}