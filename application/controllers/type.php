<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Type extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		 parent::__construct();
		 $this->load->helper('url');
		 $this->load->model('type_model');	
		 $this->load->model('merk_model');	 
	 }
	public function index()
	{
		$data=array();
		if($this->type_model->selectAll()->result()!=null){
			$data['types']=$this->type_model->selectAll()->result();
		}else{
			$data['types']=null;
		}
		$data['merks']=$this->merk_model->selectAll()->result();
		$data['action_add']=site_url('type/add');
		$data['active']=2;
		$this->load->view('template/common/header',$data);
		$this->load->view('template/common/type',$data);
	}

	public function add(){	
		$data = array();
		$data['merk_id']=$this->input->post('merk_id');
		$data['type_name']=$this->input->post('type_name');
		$this->type_model->add($data);

		redirect(site_url('type'));

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */