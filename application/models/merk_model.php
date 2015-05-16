<?php 
	class Merk_model extends CI_Model {

		function __construct(){
			parent::__construct();
		}

		function selectAll(){
			$this->db->select('*');
			$this->db->from(' merk');
			$this->db->order_by(' merk_id', 'ASC');

			return $this->db->get();
		}

		function add($data){
			$this->db->insert('merk',$data);
		}
	}
?>