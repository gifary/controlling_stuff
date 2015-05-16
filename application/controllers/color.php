<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Color extends CI_Controller {

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
		 $this->load->model('color_model');	 
	 }
	public function index()
	{
		$data=array();
		if($this->color_model->selectAll()->result()!=null){
			$data['colors']=$this->color_model->selectAll()->result();
		}else{
			$data['colors']=null;
		}
		$data['action_add']=site_url('color/add');
		$data['active']=3;
		$this->load->view('template/common/header',$data);
		$this->load->view('template/common/color',$data);
	}

	public function add(){	
		$data = array();
		$data['color_name']=$this->input->post('color_name');
		$this->color_model->add($data);
		redirect(site_url('color'));

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */