<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends My_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library(array('pagination'));
		$this->load->helper(array());

		//$this->lang->load('clients');
		
		$this->_init();
	}

	private function _init()
	{
		$this->output->set_template('oliver_layout');
		$this->get_header_footer();
		$this->get_common_param();

		
	}

	public function index()
	{
		$page = 'Products';
		$this->set_activepage($page);
		$this->data['cid'] = 0;
		$this->data['parent'] = "Products";

		$this->data['products'] = $this->tfl_model->products_view_all();
		$this->data['category_intro']['categoryid'] = "0";
		$this->data['category_intro']['categoryname'] = "All Products"; 
		$this->data['category_intro']['imageurl1'] = "assets/tfl1/images/slider/objectiflune.jpg";
		$this->data['category_intro']['categoryinfo'] = "";
		//$this->data['clienticon'] = $this->tfl_model->frontpage_client_icon();
		//var_dump($this->data);
		$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'products_main.php', $this->data);
	}
	public function category($cid=NULL)
	{
		$page = 'Products';
		$this->set_activepage($page);
		$this->data['cid'] = $cid;
		$this->data['parent'] = "Category";

		$this->data['category_intro'] = $this->tfl_model->get_category_intro($cid);
		$this->data['products'] = $this->tfl_model->products_view_category($cid);
		//$this->data['clienticon'] = $this->tfl_model->frontpage_client_icon();
		//var_dump($this->data['category_intro']);
		$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'products_main.php', $this->data);
	}
	public function industry($cid=NULL)
	{
		$page = 'Products';
		$this->set_activepage($page);
		$this->data['cid'] = $cid;
		$this->data['parent'] = "Industry";
		
		$this->data['industry_intro'] = $this->tfl_model->get_industry_intro($cid);
		$this->data['products'] = $this->tfl_model->products_view_industry($cid);
		//$this->data['clienticon'] = $this->tfl_model->frontpage_client_icon();
		//var_dump($this->data);
		$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'products_main_industry.php', $this->data);
	}
	public function technology($cid=NULL)
	{
		$page = 'Products';
		$this->set_activepage($page);
		$this->data['cid'] = $cid;
		$this->data['parent'] = "Technology";
		
		$this->data['technology_intro'] = $this->tfl_model->get_technology_intro($cid);
		$this->data['products'] = $this->tfl_model->products_view_technology($cid);
		//$this->data['clienticon'] = $this->tfl_model->frontpage_client_icon();
		//print_r($this->data['technology_intro']);
		$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'products_main_technology.php', $this->data);
	}
	public function details($pid=NULL)
	{
		$page = 'Product';
		$this->set_activepage($page);
		
		$this->data['singleproduct'] = $this->tfl_model->products_view_single($pid);
		//$this->data['clienticon'] = $this->tfl_model->frontpage_client_icon();
		//var_dump($this->data['singleproduct']);
		$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'products_single.php', $this->data);
	}

}
