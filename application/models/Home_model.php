<?php
class Home_model extends CI_Model
{
    public $navs = "headers";
    public $submenus = "submenu";
    public $sliders = "sliders";
    public $banners = "homepage_banners";
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function navs(){
        $this->db->select('*');
        $query = $this->db->get($this->navs);
        $res = $query->result_array();
        if ($res) {
            return $res;
        }

        return [];
    }
    
    public function submenu_navs(){
        $this->db->select('*');
        $this->db->where('h_submenu', 1);
        $query = $this->db->get($this->navs);
        $res = $query->result_array();
        if ($res) {
            return $res;
        }

        return [];
    }
    
    public function getnavbyrand($rand){
        $this->db->select('*');
        $this->db->where('h_rand', $rand);
        $query = $this->db->get($this->navs);
        $res = $query->row_array();
        if ($res) {
            return $res;
        }

        return '';
    }
    
    public function fetchsubmenubyparent($rand){
        $this->db->select('*');
        $this->db->where('s_header', $rand);
        $this->db->order_by('s_id', 'desc');
        $query = $this->db->get($this->submenus);
        $res = $query->result_array();
        if ($res) {
            return $res;
        }

        return [];
    }

    public function update_nav($id, $num)
    {
        $data = array('h_submenu' =>  $num);
        $this->db->where('h_rand', $id);
		$this->db->update($this->navs, $data); 
		return true;
    }

    public function submenus(){
        $this->db->select('*');
        $query = $this->db->get($this->submenus);
        $res = $query->result_array();
        if ($res) {
            return $res;
        }

        return [];
    }

    public function addsubmenu($data)
    {
        $this->db->insert($this->submenus, $data);
        return true;
    }

    public function deletesubmenu($id)
    {
        $this->db->where('s_rand', $id)->delete($this->submenus);
        return true;
    }

    public function banners(){
        $this->db->select('*');
        $query = $this->db->get($this->banners);
        $res = $query->result_array();
        if ($res) {
            return $res;
        }

        return [];
    }

    public function activebanners(){
        $this->db->select('*');
        $this->db->where('hb_active', 1);
        $query = $this->db->get($this->banners);
        $res = $query->result_array();
        if ($res) {
            return $res;
        }

        return [];
    }
    
    public function create_banner($data){
        $this->db->insert($this->banners, $data);
        return true;
    }

    public function deletebanner($id)
    {
        $data = array('hb_active' =>  0);
        $this->db->where('hb_rand', $id);
		$this->db->update($this->banners, $data); 
		return true;
    }

    public function restorebanner($id)
    {
        $data = array('hb_active' =>  1);
        $this->db->where('hb_rand', $id);
		$this->db->update($this->banners, $data); 
		return true;
    }

    public function sliders(){
        $this->db->select('*');
        $this->db->where('sl_active', 1);
        $query = $this->db->get($this->sliders);
        $res = $query->result_array();
        if ($res) {
            return $res;
        }

        return [];
    }
    
    public function create_slider($data){
        $this->db->insert($this->sliders, $data);
        return true;
    }
    
    public function deleteslider($id)
    {
        $data = array('sl_active' =>  0);
        $this->db->where('sl_rand', $id);
		$this->db->update($this->sliders, $data); 
		return true;
    }
}