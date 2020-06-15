<?php
class DoctorController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('doctor')) {
            redirect("doctor/login");
        }
    }

    public function index()
    {
        $this->load->view('doctor/partials/header');
        $this->load->view('doctor/partials/sidebar');
        $this->load->view('doctor/home');
        $this->load->view('doctor/partials/footer');
    }

    public function drugs()
    {
        $data['drugs'] = $this->Doctor_model->fetchDrugs();
        $this->load->view('doctor/partials/header', $data);
        $this->load->view('doctor/partials/sidebar');
        $this->load->view('doctor/drugs');
        $this->load->view('doctor/partials/footer');
    }

    public function createdrug()
    {
        if ($this->input->post()) {
            // Get POST data from login form...
            $req = $this->input->post();
            $this->Doctor_model->createDrug($req);
            return redirect('doctor/drugs');
        }
    }

    public function deletedrug($id)
    {
        if ($this->Doctor_model->deleteDrug($id)) {
            return redirect('doctor/drugs');
        }
    }

    public function patients()
    {
        $data['patients'] = $this->Doctor_model->fetchPatients();
        $this->load->view('doctor/partials/header', $data);
        $this->load->view('doctor/partials/sidebar');
        $this->load->view('doctor/patients');
        $this->load->view('doctor/partials/footer');
    }

    public function drug()
    {
        if (!$this->session->userdata('activeTest')) {
            redirect("doctor");
        }
        $data['test'] = $this->session->userdata('activeTest');
        $data['drugs'] = $this->Doctor_model->fetchDrugs();
        $data['patients'] = $this->Doctor_model->fetchPatients();
        $this->load->view('doctor/partials/header', $data);
        $this->load->view('doctor/partials/sidebar');
        $this->load->view('doctor/drug');
        $this->load->view('doctor/partials/footer');

        if ($this->input->post()) {
            // Get POST data from login form...
            $req = $this->input->post();
            $drugs = implode(", ",$req['m_t_drugs']);
            $savedata = $this->session->userdata('activeTest');
            $savedata['m_t_drugs'] = $drugs;
            $this->Doctor_model->saveTest($savedata);
            $this->session->unset_userdata('activeTest');
            return redirect('doctor/tests');
        };
    }

    public function test()
    {
        $data['patients'] = $this->Doctor_model->fetchPatients();
        $doctor = $this->session->userdata('doctor');
        $this->load->view('doctor/partials/header', $data);
        $this->load->view('doctor/partials/sidebar');
        $this->load->view('doctor/test');
        $this->load->view('doctor/partials/footer');
        if ($this->input->post()) {
            // Get POST data from login form...
            $req = $this->input->post();
            $malaria = $this->checkMalaria($req['m_t_fever'], $req['m_t_headache'], $req['m_t_weakness'],$req['m_t_vomitting'],$req['m_t_nausea'],$req['m_t_pain'] );
            $req['m_t_fever'] = $this->checkRange($req['m_t_fever']);
            $req['m_t_headache'] = $this->checkRange($req['m_t_headache']);
            $req['m_t_nausea'] = $this->checkRange($req['m_t_nausea']);
            $req['m_t_weakness'] = $this->checkRange($req['m_t_weakness']);
            $req['m_t_vomitting'] = $this->checkRange($req['m_t_vomitting']);
            $req['m_t_appetite'] = $this->checkRange($req['m_t_appetite']);
            $req['m_t_dizzyness'] = $this->checkRange($req['m_t_dizzyness']);
            $req['m_t_pain'] = $this->checkRange($req['m_t_pain']);
            $req['m_t_malaria'] = 0;
            $req['m_t_doctor'] = $doctor['m_d_id'];
            if($malaria) {
                $req['m_t_result'] = 'Malaria is '.$malaria;
                $req['m_t_malaria'] = 1;
                $this->session->set_userdata(['activeTest' => $req]);
                return redirect('doctor/drug');
            }
            $this->Doctor_model->saveTest($req);
            return redirect('doctor/tests');
        }
    }

    public function tests()
    {
        $data['patients'] = $this->Doctor_model->fetchPatients();
        $data['tests'] = $this->Doctor_model->fetchTests();
        foreach ($data['tests'] as $key => &$value) {
            $value['patient'] = $this->Auth_model->fetchUserById($value['m_t_patient']);
            $value['doctor'] = $this->Auth_model->fetchDoctorById($value['m_t_doctor']);
        }
        $this->load->view('doctor/partials/header', $data);
        $this->load->view('doctor/partials/sidebar');
        $this->load->view('doctor/tests');
        $this->load->view('doctor/partials/footer');
    }

    public function checkRange($value) {
        switch ($value) {
            case $value <= 4:
                return 'Low';
                break;
            case $value > 4 && $value <= 7:
                return 'Mid';
                break;
            default:
                return 'High';
                break;
        }
    }

    public function checkMalaria($fever, $headache, $weakness, $vomiting, $nausea, $pain) {
        if ($fever > 4 && ($headache > 4) && ($weakness > 4) && ($vomiting > 4) && ($pain > 4) && ($nausea > 4)) {
            return 'High';
        } elseif ($fever > 4 && ($headache > 4) && ($weakness > 4) && ($vomiting > 4) && ($nausea > 4)) {
            return 'High';
        } elseif ($fever > 4 && ($headache > 4) && ($weakness > 4)) {
            return 'High';
        } elseif ($fever > 4 && ($headache > 4) && ($weakness > 4)) {
            return 'Mid';
        } elseif ($fever > 4) {
            return 'Low';
        } else {
            return false;
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('doctor');
        return redirect('doctor');
    }
}
