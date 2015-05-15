<?php 
	class Merk extends CI_Model {

		function __construct(){
			parent::__construct();
		}

		function selectAll(){
			$this->db->select('*');
			$this->db->from('merk m');
			$this->db->order_by('m.merk_id', 'desc');

			return $this->db->get();
		}
	}
?>