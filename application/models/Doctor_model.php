<?php
class Doctor_model extends CI_Model
{
    public $patients= "patients";
    public $doctors= "doctors";
    public $drugs= "drugs";
    public $tests= "tests";
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function createDrug($data)
    {
        $this->db->insert($this->drugs, $data);
        return true;
    }

    public function fetchDrugs()
    {
        $this->db->select('*');
        $this->db->where('m_dg_active', 1);
        $query = $this->db->get($this->drugs);
        $res = $query->result_array();
        if ($res) {
            return $res;
        }

        return [];
    }

    public function deleteDrug($id)
    {
        $data = array('m_dg_active' => 0 );
        $this->db->where('m_dg_id', $id);
		$this->db->update($this->drugs, $data); 
		return true;
    }

    public function fetchPatients()
    {
        $this->db->select('*');
        $this->db->where('m_p_active', 1);
        $query = $this->db->get($this->patients);
        $res = $query->result_array();
        if ($res) {
            return $res;
        }

        return [];
    }

    public function saveTest($data)
    {
        $this->db->insert($this->tests, $data);
        return true;
    }

    public function fetchTests()
    {
        $this->db->select('*');
        $query = $this->db->get($this->tests);
        $res = $query->result_array();
        if ($res) {
            return $res;
        }

        return [];
    }
}
