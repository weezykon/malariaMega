<?php
class Products_model extends CI_Model
{
    public $products = "products";
    public $brand = "brands";
    public $categories = "product_categories";
    public $images = "product_images";
    public $productStock = "product_stock";

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function create_product($data)
    {
        $this->db->insert($this->products, $data);
        return true;
    }

    public function update_product($id, $data)
    {
        $this->db->where('p_rand', $id);
		$this->db->update($this->products, $data); 
		return true;
    }

    public function delete_product($id)
    {
        $data = array('p_visible' => 0 );
        $this->db->where('p_rand', $id);
		$this->db->update($this->products, $data); 
		return true;
    }

    public function restore_product($id)
    {
        $data = array('p_visible' => 1 );
        $this->db->where('p_rand', $id);
		$this->db->update($this->products, $data); 
		return true;
    }

    public function feature_product($id)
    {

		$this->db->where('p_rand',$id);
		$this->db->where('p_visible',1);
        $query = $this->db->get($this->products);
        $res = $query->row_array();
        if ($res['p_featured'] == 1) {
            $data = array('p_featured' => 0 );
        } else {
            $data = array('p_featured' => 1 );
        }
        $this->db->where('p_rand', $id);
		$this->db->update($this->products, $data); 
		return true;
    }

    public function create_brand($data)
    {
        $this->db->insert($this->brand, $data);
        return true;
    }

    public function update_brand($id, $data)
    {
        $this->db->where('b_rand', $id);
		$this->db->update($this->brand, $data); 
		return true;
    }

    public function delete_brand($id)
    {
        $data = array('b_visible' => 0 );
        $this->db->where('b_rand', $id);
		$this->db->update($this->brand, $data); 
		return true;
    }

    public function create_category($data)
    {
        $this->db->insert($this->categories, $data);
        return true;
    }

    public function update_category($id, $data)
    {
        $this->db->where('p_c_rand', $id);
		$this->db->update($this->categories, $data); 
		return true;
    }

    public function delete_category($id)
    {
        $data = array('p_c_visible' => 0 );
        $this->db->where('p_c_rand', $id);
		$this->db->update($this->categories, $data); 
		return true;
    }

    public function create_stock($data)
    {
        $this->db->insert($this->productStock, $data);
        return true;
    }

    public function add_image($data)
    {
        $this->db->insert($this->images, $data);
        return true;
    }

    public function fetch_categories_by_alias($alias){
        $this->db->select('*');
        $this->db->where('p_c_visible', 1);
        $this->db->where('p_c_alias', $alias);
        $query = $this->db->get($this->categories);
        $res = $query->row_array();
        if ($res) {
            return $res;
        }

        return false;
    }

    public function fetch_products_by_category($category){
        $this->db->select('*');
        $this->db->where('p_visible', 1);
        $this->db->where('p_category', $category);
        $this->db->order_by('p_price', 'desc');
        $query = $this->db->get($this->products);
        $res = $query->result_array();
        if ($res) {
            return $res;
        }

        return [];
    }

    public function fetch_home_phones(){
        $cate = $this->fetch_categories_by_alias('smartphones');
        if ($cate) {
            $this->db->select('*');
            $this->db->where('p_visible', 1);
            $this->db->where('p_featured', 1);
            $this->db->where('p_category', $cate['p_c_rand']);
            $this->db->order_by('p_id', 'desc');
            $this->db->limit(10);
            $query = $this->db->get($this->products);
            $res = $query->result_array();
            if ($res) {
                return $res;
            }
    
            return [];
        }
    }

    public function fetch_home_wearables(){
        $cate = $this->fetch_categories_by_alias('wearables');
        if ($cate) {
            $this->db->select('*');
            $this->db->where('p_visible', 1);
            $this->db->where('p_featured', 1);
            $this->db->where('p_category', $cate['p_c_rand']);
            $this->db->order_by('p_id', 'desc');
            $this->db->limit(6);
            $query = $this->db->get($this->products);
            $res = $query->result_array();
            if ($res) {
                return $res;
            }
    
            return [];
        }
    }

    public function fetch_galaxya_phones(){
        $this->db->select('*');
        $this->db->where('p_visible', 1);
        $this->db->where('p_a_series', 1);
        $this->db->order_by('p_id', 'desc');
        $this->db->limit(6);
        $query = $this->db->get($this->products);
        $res = $query->result_array();
        if ($res) {
            return $res;
        }

        return [];
    }

    public function fetch_two_images($product){
        $this->db->select('*');
        $this->db->where('p_i_visible', 1);
        $this->db->where('p_i_product', $product);
        $this->db->limit(2);
        $query = $this->db->get($this->images);
        $res = $query->result_array();
        if ($res) {
            return $res;
        }

        return false;
    }

    public function forcegetproductByname($product)
	{
		$this->db->where('p_name',$product);
		$this->db->join('product_categories', 'products.p_category = product_categories.p_c_rand');
		$this->db->join('brands', 'products.p_brand = brands.b_rand');
		$query = $this->db->get($this->products);
		if(!$query){
			return false;
		}
		return $query->row_array();
	}

    public function forcegetproductByrand($product)
	{
		$this->db->where('p_rand',$product);
		$this->db->join('product_categories', 'products.p_category = product_categories.p_c_rand');
		$this->db->join('brands', 'products.p_brand = brands.b_rand');
		$query = $this->db->get($this->products);
		if(!$query){
			return false;
		}
		return $query->row_array();
	}

    public function getproductByname($product)
	{
		$this->db->where('p_name',$product);
		$this->db->where('p_visible',1);
		$this->db->join('product_categories', 'products.p_category = product_categories.p_c_rand');
		$this->db->join('brands', 'products.p_brand = brands.b_rand');
		$query = $this->db->get($this->products);
		if(!$query){
			return false;
		}
		return $query->row_array();
	}

    public function getproductByrand($product)
	{
		$this->db->where('p_rand',$product);
		$this->db->where('p_visible',1);
		$this->db->join('product_categories', 'products.p_category = product_categories.p_c_rand');
		$this->db->join('brands', 'products.p_brand = brands.b_rand');
		$query = $this->db->get($this->products);
		if(!$query){
			return false;
		}
		return $query->row_array();
	}

    public function fetchproductimages($product){
        $this->db->select('*');
        $this->db->where('p_i_visible', 1);
        $this->db->where('p_i_product', $product);
        $query = $this->db->get($this->images);
        $res = $query->result_array();
        if ($res) {
            return $res;
        }

        return [];
    }

    public function fetchproductimagesbycolor($product, $color){
        $this->db->select('*');
        $this->db->where('p_i_visible', 1);
        $this->db->where('p_i_product', $product);
        $this->db->where('p_i_color', $color);
        $query = $this->db->get($this->images);
        $res = $query->result_array();
        if ($res) {
            return $res;
        }

        return [];
    }

    public function get_last_stock_quantity($product){
		$this->db->where('p_s_product',$product);
		$this->db->order_by('p_s_id','desc');
		$query = $this->db->get($this->productStock);
		if(!$query){
			return 0;
		}
		return (int)$query->row_array()['p_s_stock'];
    }
    
    public function addCart($data)
    {
        $this->db->where('c_ip', $data['c_ip']);
        $this->db->where('c_product', $data['c_product']);
        $this->db->where('c_color', $data['c_color']);
        $query = $this->db->get('cart');
        $res = $query->row_array();
        if ($res) {
            $new = array('c_quantity' => $data['c_quantity'] + $res['c_quantity']);
            $this->db->set($new)
                ->where('c_id', $res['c_id'])
                ->update('cart');
        } else {
            $this->db->insert('cart', $data);
            return true;
        }
    }

    public function fetchCart($ip)
    {
        $res = $this->db->where('c_ip', $ip)
            ->join('products', 'products.p_rand= cart.c_product')
            ->get('cart')
            ->result_array();
        if (!$res) {
            return [];
        }
        return array_reverse($res);
    }

    public function fetchImage($product)
    {
        $this->db->select('*');
        $this->db->where('p_i_visible', 1);
        $this->db->where('p_i_product', $product);
        $this->db->limit(1);
        $query = $this->db->get($this->images);
        $res = $query->row_array();
        if ($res) {
            return $res;
        }

        return 'assets/image/products/default.jpg';
    }

    public function search($search){
        $this->db->select('*');
        $this->db->where('p_visible', 1);
        $this->db->like('p_name', $search);
        $query = $this->db->get($this->products);
        $res = $query->result_array();
        if ($res) {
            return $res;
        }

        return [];
    }

    public function all_products(){
        $this->db->select('*');
        $this->db->where('p_visible', 1);
        $query = $this->db->get($this->products);
        $res = $query->result_array();
        if ($res) {
            return $res;
        }

        return [];
    }

    public function all_trashedproducts(){
        $this->db->select('*');
        $this->db->where('p_visible', 0);
        $query = $this->db->get($this->products);
        $res = $query->result_array();
        if ($res) {
            return $res;
        }

        return [];
    }

    public function getbrandbyrand($rand){
        $this->db->select('*');
        $this->db->where('b_rand', $rand);
        $query = $this->db->get($this->brand);
        $res = $query->row_array();
        if ($res) {
            return $res['b_name'];
        }

        return '';
    }

    public function getcategoriesbyrand($rand){
        $this->db->select('*');
        $this->db->where('p_c_rand', $rand);
        $query = $this->db->get($this->categories);
        $res = $query->row_array();
        if ($res) {
            return $res['p_c_name'];
        }

        return '';
    }

    public function deleteimage($id)
    {
        $data = array('p_i_visible' => 0 );
        $this->db->where('p_i_rand', $id);
		$this->db->update($this->images, $data); 
		return true;
    }
}