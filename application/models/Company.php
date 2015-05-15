<?php 
	class Company extends CI_Model {

		function __construct(){
			parent::__construct();
		}

		function selectAll(){
			$this->db->select('*');
			$this->db->from('company c,company_sector s');
			$this->db->where('c.sector_id=s.sector_id');
			$this->db->order_by('c.company_id', 'desc');

			return $this->db->get();
		}

		function selectBySector($sector_id){
			$this->db->select('*');
			$this->db->from('company');
			$this->db->where('sector_id',$sector_id);
			$this->db->order_by('company_id', 'desc');

			return $this->db->get();
		}
	}
?>