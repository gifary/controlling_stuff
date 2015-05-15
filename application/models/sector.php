<?php 
	class Sector extends CI_Model {

		function __construct(){
			parent::__construct();
		}

		function selectAll(){
			$this->db->select('*');
			$this->db->from('company_sector');
			//$this->db->where('c.sector_id=s.sector_id');
			$this->db->order_by('sector_id', 'desc');

			return $this->db->get();
		}
	}
?>