<?php 
	class Company_model extends CI_Model {

		function __construct(){
			parent::__construct();
		}

		function selectAll(){
			$this->db->select('*');
			$this->db->from(' company');
			$this->db->order_by(' company_id', 'ASC');

			return $this->db->get();
		}

		function add($data){
			$this->db->insert('company',$data);
		}
	}
?>