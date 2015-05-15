<?php

class Welcome extends CI_Controller {

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
		 
	 }

	 public function index(){
	 	$data=array();
	 	$data['logged']=true;

	 	$data['header_login']=$this->load->view('template/common/header_login');
	 	$data['action']=site_url('home/index');
	 	$this->load->view('template/login',$data);

	 }

	 public function validasiLogin(){
	 	//echo "hello";
	 	$this->load->view('template/common/header');
	 }
	

	
}
