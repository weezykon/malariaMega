<?php
class Transaction_model extends CI_Model
{
    public $transaction = "transaction_log";

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function save($data)
    {
        $this->db->insert($this->transaction, $data);
        return true;
    }

    public function deleteCart($ip)
    {
        $this->db->where('c_ip', $ip);
        $this->db->delete('cart');
    }

    public function removecart($id)
    {
        $this->db->where('c_id', $id);
        $this->db->delete('cart');
    }

    public function countusertransactions($rand)
    {
        $this->db->select('COUNT(t_l_id) AS count');
        $this->db->where(array('t_l_user' => $rand));
        $query = $this->db->get($this->transaction);
        $result = $query->row_array();
        return $result['count'];
    }

    public function all_transactions()
	{
        $this->db->select('*');
        $this->db->from($this->transaction);
        $this->db->order_by('t_l_id', 'DESC');
        $this->db->group_by('transaction_log.t_l_reference');
        $query = $this->db->get();
        $res = $query->result_array();
        if ($res) {
            return $res;
        }
        return [];
    }

    public function updatecart($id, $qty)
    {
        $data = array('c_quantity' => $qty );
        $this->db->where('c_id', $id);
		$this->db->update('cart', $data); 
		return true;
    }

    public function get_all_orders()
    {
        $this->db->select('*');
        $this->db->from($this->transaction);
        $this->db->where('t_l_status !=', 'delivered');
        $this->db->order_by('t_l_id', 'DESC');
        $this->db->group_by('transaction_log.t_l_reference');
        $query = $this->db->get();
        $res = $query->result_array();
        if ($res) {
            return $res;
        }
        return [];
    }

    public function get_user_orders($user)
    {
        $this->db->select('*');
        $this->db->from($this->transaction);
        $this->db->where('t_l_user', $user);
        $this->db->order_by('t_l_id', 'DESC');
        $this->db->group_by('transaction_log.t_l_reference');
        $query = $this->db->get();
        $res = $query->result_array();
        if ($res) {
            return $res;
        }
        return [];
    }

    public function get_transaction_by_reference($ref)
    {
        $this->db->select('*');
        $this->db->from($this->transaction);
        $this->db->where('t_l_reference', $ref);
        $query = $this->db->get();
        $res = $query->result_array();
        if ($res) {
            $des = [];
            $amount = 0; 
            $quantity = 0; 
            foreach ($res as $key => &$value) {
                array_push($des, $value['t_l_description']);
                $amount += $value['t_l_amount_paid'];
                $quantity += $value['t_l_quantity'];
            }
            $des = implode('<br>', $des);
            return $data = array('description' => $des, 'amount' => $amount, 'quantity' => $quantity);
        }
        return [];
    }

    public function get_all_orders_by_reference($ref)
    {
        $this->db->select('*');
        $this->db->from($this->transaction);
        $this->db->where('t_l_reference', $ref);
        $this->db->order_by('t_l_id', 'ASC');
        $query = $this->db->get();
        $res = $query->result_array();
        if ($res) {
            return $res;
        }
        return [];
    }
    
    public function updatestatus($status,$ref)
    {
        $data = array('t_l_status' => $status );
        $this->db->where('t_l_reference', $ref);
		$this->db->update($this->transaction, $data); 
		return true;
    }

    public function getuserbyref($ref){
        $this->db->select('*');
        $this->db->from($this->transaction);
        $this->db->where('t_l_reference ', $ref);
        $this->db->order_by('t_l_id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        $res = $query->row_array();
        if ($res) {
            return $res['t_l_user'];
        }
        return false;
    }

    public function frequent_customers($date_from, $date_to){
        $sql = "SELECT t_l_user, COUNT(*) c FROM transaction_log WHERE `t_l_date` >= $date_from AND `t_l_date` < $date_to GROUP BY t_l_user HAVING c > 0 ORDER BY c DESC ";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        if (!$result) {
            return [];
        }
        return $result;
    }

    public function top_buyers($date_from, $date_to){
        $sql = "SELECT t_l_user, SUM(t_l_amount_paid) s FROM transaction_log WHERE `t_l_date` >= $date_from AND `t_l_date` < $date_to GROUP BY t_l_user HAVING s > 0 ORDER BY s DESC ";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        if (!$result) {
            return [];
        }
        return $result;
    }

    public function top_products_chart($date_from, $date_to){
        $sql = "SELECT t_l_product, COUNT(*) c FROM transaction_log WHERE `t_l_date` >= $date_from AND `t_l_date` < $date_to GROUP BY t_l_product HAVING c > 0 ORDER BY c DESC ";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        if (!$result) {
            return [];
        }
        return $result;
    }

    public function totalTransactionmade($date_from, $date_to){
        $sql = "SELECT t_l_reference, COUNT(*) c FROM transaction_log WHERE `t_l_date` >= $date_from AND `t_l_date` < $date_to";
        $query = $this->db->query($sql);
        $result = $query->row_array();
        if (!$result) {
            return 0;
        }
        return $result['c'];
    }

    public function transactionSum($date_from, $date_to){
        $sql = "SELECT t_l_amount_paid, SUM(t_l_amount_paid) s FROM transaction_log WHERE `t_l_date` >= $date_from AND `t_l_date` < $date_to";
        $query = $this->db->query($sql);
        $result = $query->row_array();
        if (!$result) {
            return 0;
        }
        return $result['s'];
    }
}