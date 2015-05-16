<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {

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
		 $this->load->model('product_model');
		 $this->load->model('merk_model');
		 $this->load->model('color_model');	 
		 $this->load->model('company_model');
	 }
	public function index()
	{	
		$data['merks']=$this->merk_model->selectAll()->result();
		$data['colors']=$this->color_model->selectAll()->result();
		$data['companies']=$this->company_model->selectAll()->result();
		$data['action_add']=site_url('product/add');
		$data['active']=5;
		$this->load->view('template/common/header',$data);
		$this->load->view('template/common/product',$data);
	}

	public function add(){	
		$data = array();
		$data['merk_id']=$this->input->post('merk_id');
		$data['type_id']=$this->input->post('type_id');
		$data['company_id']=$this->input->post('company_id');
		$data['color_id']=$this->input->post('color_id');
		$data['imei']=$this->input->post('imei');
		$data['box_code']=$this->input->post('box_code');
		$data['buy_date']=$this->input->post('buy_date');
		$data['price']=$this->input->post('price');
		$data['status']=0;
		$this->product_model->add($data);
		redirect(site_url('product'));

	}

	public function loadData()
	{
		$loadType=$_POST['loadType'];
		$loadId=$_POST['loadId'];

		$this->load->model('type_model');
		$result=$this->type_model->getType($loadId);
		$HTML="";
		
		if($result->num_rows() > 0){
			foreach($result->result() as $list){
				$HTML.="<option value='".$list->TYPE_ID."'>".$list->TYPE_NAME."</option>";
			}
		}
		echo $HTML;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */