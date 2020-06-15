<?php
class Auth_model extends CI_Model
{
    public $patients= "patients";
    public $doctors= "doctors";
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function createPatient($data)
    {
        $this->db->insert($this->patients, $data);
        return true;
    }

    public function checkuser($email, $password)
    {
        $this->db->select('*');
        $this->db->where('m_p_email', $email);
        $this->db->where('m_p_password', $password);
        $query = $this->db->get($this->patients);
        $res = $query->row_array();
        if ($res) {
            unset($res['m_p_password']);
            return $res;
        }

        return false;
    }

    public function checkDoctor($email, $password)
    {
        $this->db->select('*');
        $this->db->where('m_d_email', $email);
        $this->db->where('m_d_password', $password);
        $query = $this->db->get($this->doctors);
        $res = $query->row_array();
        if ($res) {
            unset($res['m_d_password']);
            return $res;
        }

        return false;
    }

    public function checkUserEmail($email)
    {
        $this->db->select('*');
        $this->db->where('m_p_email', $email);
        $query = $this->db->get($this->patients);
        $res = $query->row_array();
        if ($res) {
            unset($res['m_p_password']);
            return $res;
        }

        return false;
    }

    public function fetchUserById($id)
    {
        $this->db->select('*');
        $this->db->where('m_p_id', $id);
        $query = $this->db->get($this->patients);
        $res = $query->row_array();
        if ($res) {
            unset($res['m_p_password']);
            return $res;
        }

        return false;
    }

    public function fetchDoctorById($id)
    {
        $this->db->select('*');
        $this->db->where('m_d_id', $id);
        $query = $this->db->get($this->doctors);
        $res = $query->row_array();
        if ($res) {
            unset($res['m_p_password']);
            return $res;
        }

        return false;
    }
}
