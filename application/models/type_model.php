<?php 
	class Type_model extends CI_Model {

		function __construct(){
			parent::__construct();
		}

		function selectAll(){
			$this->db->select('*');
			$this->db->from(' type');
			$this->db->order_by(' type_id', 'ASC');

			return $this->db->get();
		}

		function add($data){
			$this->db->insert('type',$data);
		}

		function getType($merk_id){
			$result = array();
	        $this->db->select('*');
	        $this->db->from(' type');
	        $this->db->where('merk_id',$merk_id);
	        $this->db->order_by('type_name','ASC');
	        
	 
	        return $this->db->get();
	    }

	    function getData($loadType,$loadId){
			if($loadType=="state"){
				$fieldList='id,state_name as name';
				$table='state';
				$fieldName='country_id';
				$orderByField='state_name';						
			}else{
				$fieldList='id,city_name as name';
				$table='city';
				$fieldName='state_id';
				$orderByField='city_name';	
			}
			
				$this->db->select($fieldList);
				$this->db->from($table);
				$this->db->where($fieldName, $loadId);
				$this->db->order_by($orderByField, 'asc');
				$query=$this->db->get();
				return $query; 
			}
		}
?>