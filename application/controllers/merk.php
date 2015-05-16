<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Merk extends CI_Controller {

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
		 $this->load->model('merk_model');	 
	 }
	public function index()
	{
		$data=array();
		if($this->merk_model->selectAll()->result()!=null){
			$data['products']=$this->merk_model->selectAll()->result();
		}else{
			$data['products']=null;
		}
		$data['active']=1;
		$data['action_add']=site_url('merk/add');
		$this->load->view('template/common/header',$data);
		$this->load->view('template/common/merk',$data);
	}

	public function add(){
		//$this->load->model('merk');	
		$merk_name=$this->input->post('merk_name');
		$data=array();
		$data['merk_name']=$merk_name;
		$this->merk_model->add($data);
		redirect(site_url('merk'));

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */