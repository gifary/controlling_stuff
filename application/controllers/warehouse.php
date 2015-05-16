<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Warehouse extends CI_Controller {

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
	 }
	public function index()
	{
		$data=array();
		if($this->product_model->selectWarehouse()->result()!=null){
			$data['products']=$this->product_model->selectWarehouse()->result();
		}else{
			$data['products']=null;
		}
		$data['active']=6;
		$data['action']=site_url('warehouse/sell');
		$this->load->view('template/common/header',$data);
		$this->load->view('template/common/warehouse',$data);
	}

	public function add(){
		//$this->load->model('product');	
		$product_name=$this->input->post('product_name');
		$data=array();
		$data['product_name']=$product_name;
		$this->product_model->add($data);
		redirect(site_url('product'));

	}

	public function sell($product_id){
		$data2=$this->product_model->selectOneRow();
		echo $data2->MERK_ID;
		/*
		$data['merk_id']=$data2->MERK_ID;
		$data['type_id']=$data2->TYPE_ID;
		$data['company_id']=$data2->COMPANY_ID;
		$data['color_id']=$data2->COLOR_ID;
		$data['imei']=$data2->IMEI;
		$data['box_code']=$data2->BOX_CODE;
		$data['buy_date']=$data2->BUY_DATE;
		$data['price']=$data2->PRICE;
		$data['status']=1;
		*/
		//$this->product_model->updateStatus($product_id,$data);
		//redirect(site_url('product'));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */