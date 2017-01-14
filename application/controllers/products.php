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
		$this->data['side_menu_name'] = "Category";

		$this->data['products'] = $this->tfl_model->products_view_all();
		//$this->data['clienticon'] = $this->tfl_model->frontpage_client_icon();
		//var_dump($this->data);
		$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'products_main.php', $this->data);
	}
	public function category($cid=NULL)
	{
		$page = 'Products';
		$this->set_activepage($page);
		$this->data['side_menu_name'] = "Category";
		
		$this->data['products'] = $this->tfl_model->products_view_category($cid);
		//$this->data['clienticon'] = $this->tfl_model->frontpage_client_icon();
		//var_dump($this->data);
		$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'products_main.php', $this->data);
	}
	public function industry($cid=NULL)
	{
		$page = 'Products';
		$this->set_activepage($page);
		$this->data['side_menu_name'] = "Industry";
		
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
		$this->data['side_menu_name'] = "Technology";
		
		$this->data['products'] = $this->tfl_model->products_view_technology($cid);
		//$this->data['clienticon'] = $this->tfl_model->frontpage_client_icon();
		//print_r($this->data['products']);
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
