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
		 $this->load->model('merk');	 
	 }
	public function index()
	{
		$data=array();
		$data['products']=true;
		
		$this->load->view('template/common/header',$data);
		$this->load->view('template/common/merkView',$data);
	}

	public function add(){
		$merk_name=$this->input->post('merk_name');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */