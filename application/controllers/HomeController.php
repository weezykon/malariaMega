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
        $patient = $this->session->userdata('patient');
        $data['tests'] = $this->Doctor_model->fetchPatientTests($patient['m_p_id']);
        foreach ($data['tests'] as $key => &$value) {
            $value['doctor'] = $this->Auth_model->fetchDoctorById($value['m_t_doctor']);
        }
        $this->load->view('partials/header', $data);
        $this->load->view('partials/sidebar');
        $this->load->view('home');
        $this->load->view('partials/footer');
    }

    public function result($id) {
        $patient = $this->session->userdata('patient');
        $data['test'] = $this->Doctor_model->fetchPatientTestById($id);
        $data['doctor'] = $this->Auth_model->fetchDoctorById($data['test']['m_t_doctor']);
        $this->load->view('partials/header', $data);
        $this->load->view('partials/sidebar');
        $this->load->view('result');
        $this->load->view('partials/footer');
    }
}