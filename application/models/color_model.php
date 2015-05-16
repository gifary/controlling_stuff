<?php 
	class Color_model extends CI_Model {

		function __construct(){
			parent::__construct();
		}

		function selectAll(){
			$this->db->select('*');
			$this->db->from(' color');
			$this->db->order_by(' color_id', 'ASC');

			return $this->db->get();
		}

		function add($data){
			$this->db->insert('color',$data);
		}
	}
?>