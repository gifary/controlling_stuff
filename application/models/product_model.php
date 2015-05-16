<?php 
	class Product_model extends CI_Model {

		function __construct(){
			parent::__construct();
		}

		function selectAll(){
			$this->db->select('*');
			$this->db->from(' product');
			$this->db->order_by(' product_id', 'ASC');

			return $this->db->get();
		}

		function add($data){
			$this->db->insert('product',$data);
		}

		function selectWarehouse(){
			$this->db->select('*');
			$this->db->from('product AS p');
			$this->db->join('company AS cm','p.company_id=cm.company_id');
			$this->db->join('color AS c','p.color_id=c.color_id');
			$this->db->join('type AS t','p.type_id=t.type_id');
			$this->db->join('merk m','p.merk_id=m.merk_id');
			$this->db->where('p.status',"0");
			$this->db->order_by(' p.product_id', 'ASC');

			return $this->db->get();
		}

		function selectOneRow($product_id){
			$this->db->select('*');
			$this->db->from(' product');
			$this->db->where('product_id',$product_id);
			return $this->db->get()->row();
		}		

		function updateStatus($product_id,$data){
			
			$this->db->where('product_id', $product_id);
			$this->db->update('product', $data);
		}
	}
?>