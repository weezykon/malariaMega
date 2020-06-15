<?php
class Admin_model extends CI_Model
{
    public $admin = "rifugio_admin";
    public $brands = "brands";
    public $categories = "product_categories";
    public $users = "users";
    public $careers = "careers";
    public $feedback = "feedback";
    public $mails = "mails";
    public $applications = "applications";
    public $contact = "contact";
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function checkadmin($email, $password)
    {
        $this->db->select('*');
        $this->db->where('r_a_email', $email);
        $this->db->where('r_a_password', $password);
        $query = $this->db->get($this->admin);
        $res = $query->row_array();
        if ($res) {
            unset($res['r_a_password']);
            return $res;
        }

        return false;
    }

    public function getadminbyrand($rand)
    {
        $this->db->select('*');
        $this->db->where('r_a_rand', $rand);
        $query = $this->db->get($this->admin);
        $res = $query->row_array();
        if ($res) {
            unset($res['r_a_password']);
            return $res;
        }

        return false;
    }

    public function check_if_user_exist($email)
    {
        $this->db->select('*');
        $this->db->where('r_a_email', $email);
        $query = $this->db->get($this->admin);
        $res = $query->row_array();
        if ($res) {
            return $res;
        }
        return false;
    }

    public function create_user($data)
    {
        $this->db->insert($this->admin, $data);
        return true;
    }

    public function brands(){
        $this->db->select('*');
        $this->db->where('b_visible', 1);
        $query = $this->db->get($this->brands);
        $res = $query->result_array();
        if ($res) {
            return $res;
        }

        return [];
    }

    public function categories(){
        $this->db->select('*');
        $this->db->where('p_c_visible', 1);
        $query = $this->db->get($this->categories);
        $res = $query->result_array();
        if ($res) {
            return $res;
        }

        return [];
    }

    public function users(){
        $this->db->select('*');
        $this->db->where('u_active', 1);
        $query = $this->db->get($this->users);
        $res = $query->result_array();
        if ($res) {
            return $res;
        }

        return [];
    }

    public function careers(){
        $this->db->select('*');
        $this->db->where('rc_visible', 1);
        $query = $this->db->get($this->careers);
        $res = $query->result_array();
        if ($res) {
            return $res;
        }

        return [];
    }

    public function fetch_opening($rand){
        $this->db->select('*');
        $this->db->where('rc_rand', $rand);
        $query = $this->db->get($this->careers);
        $res = $query->row_array();
        if ($res) {
            return $res;
        }

        return '';
    }

    public function create_opening($data)
    {
        $this->db->insert($this->careers, $data);
        return true;
    }

    public function deleteopening($id)
    {
        $data = array('rc_visible' =>  0);
        $this->db->where('rc_rand', $id);
		$this->db->update($this->careers, $data); 
		return true;
    }

    public function applyjob($data)
    {
        $this->db->insert($this->applications, $data);
        return true;
    }

    public function fetch_applications(){
        $this->db->select('*');
        $this->db->where('applications.ra_visible', 1);
		$this->db->join('careers', 'applications.ra_job = careers.rc_rand');
        $query = $this->db->get($this->applications);
        $res = $query->result_array();
        if ($res) {
            return $res;
        }

        return [];
    }

    public function deleteapplication($id)
    {
        $data = array('ra_visible' =>  0);
        $this->db->where('ra_rand', $id);
		$this->db->update($this->applications, $data); 
		return true;
    }

    public function fetch_popupmessage(){
        $this->db->select('*');
        $this->db->limit(1);
        $query = $this->db->get('popup');
        $res = $query->row_array();
        if ($res) {
            return $res;
        }
        return '';
    }

    public function updatepopup($data)
    {
        $this->db->where('pop_id', 1);
		$this->db->update('popup', $data); 
		return true;
    }

    public function fetch_mails(){
        $this->db->select('*');
        $this->db->where('mails.m_active', 1);
        $query = $this->db->get($this->mails);
        $res = $query->result_array();
        if ($res) {
            return $res;
        }

        return [];
    }

    public function create_mail($data)
    {
        $this->db->insert($this->mails, $data);
        return true;
    }

    public function checkifmailexist($type){
        $this->db->select('*');
        $this->db->where('mails.m_active', 1);
        $this->db->where('mails.m_type', $type);
        $query = $this->db->get($this->mails);
        $res = $query->row_array();
        if ($res) {
            return false;
        }
        return true;
    }

    public function fetchmailtype($type){
        $this->db->select('*');
        $this->db->where('mails.m_active', 1);
        $this->db->where('mails.m_type', $type);
        $query = $this->db->get($this->mails);
        $res = $query->row_array();
        if ($res) {
            return $res;
        }
        return [];
    }

    public function deletemail($id)
    {
        $data = array('m_active' =>  0);
        $this->db->where('m_rand', $id);
		$this->db->update($this->mails, $data); 
		return true;
    }

    public function update_mail($id, $data)
    {
        $this->db->where('m_rand', $id);
		$this->db->update($this->mails, $data); 
		return true;
    }

    public function fetch_contact(){
        $this->db->select('*');
        $this->db->limit(1);
        $query = $this->db->get($this->contact);
        $res = $query->row_array();
        if ($res) {
            return $res;
        }
        return [];
    }

    public function update_contact($data)
    {
        $this->db->where('con_id', 1);
		$this->db->update($this->contact, $data); 
		return true;
    }

    public function fetch_feedbacks(){
        $this->db->select('*');
		$this->db->join('users', 'feedback.f_user = users.u_rand');
        $query = $this->db->get($this->feedback);
        $res = $query->result_array();
        if ($res) {
            return $res;
        }

        return [];
    }

    public function preorder($data)
    {
        $this->db->insert('preorders', $data);
        return true;
    }

    public function preorders()
    {
        $this->db->select('*');
        $this->db->order_by('pre_id', 'desc');
        $query = $this->db->get('preorders');
        $res = $query->result_array();
        if ($res) {
            return $res;
        }
        return [];
    }

    public function pages()
    {
        $this->db->select('*');
        $this->db->where('pg_active', 1);
        $this->db->order_by('pg_id', 'desc');
        $query = $this->db->get('pages');
        $res = $query->result_array();
        if ($res) {
            return $res;
        }
        return [];
    }

    public function deletepage($id)
    {
        $data = array('pg_active' => 0 );
        $this->db->where('pg_rand', $id);
		$this->db->update('pages', $data); 
		return true;
    }
}
