<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Company extends CI_Controller {

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
		 $this->load->model('company_model');	 
	 }
	public function index()
	{
		$data=array();
		if($this->company_model->selectAll()->result()!=null){
			$data['companies']=$this->company_model->selectAll()->result();
		}else{
			$data['companies']=null;
		}
		$data['action_add']=site_url('company/add');
		$data['active']=4;
		$this->load->view('template/common/header',$data);
		$this->load->view('template/common/company',$data);
	}

	public function add(){	
		$data = array();
		$data['company_name']=$this->input->post('company_name');
		$this->company_model->add($data);
		redirect(site_url('company'));

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */