<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services extends My_Controller {

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
		$this->get_service_param();

		
	}

	public function index()
	{
		$page = 'Services';
		$this->set_activepage($page);

		

		$this->data['serviceinfo'] = $this->tfl_model->get_service_info('0');
		//var_dump($this->data['serviceinfo']);

		$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'services_main', $this->data);
	}
	public function page($cid=NULL)
	{
		$page = 'Services';
		$this->set_activepage($page);

		$this->data['serviceinfo'] = $this->tfl_model->get_service_info($cid);
		$this->data['servicetitle'] = $this->tfl_model->get_service_title($cid);
		//var_dump($this->data['servicetitle']);

		$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'services_single_1', $this->data);
	}
	/*
	public function installation()
	{
		$page = 'Services';
		$this->set_activepage($page);

		

		//$this->data['contacts'] = $this->tfl_model->get_contact_page();
		//var_dump($this->data['contacts']);

		$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'services_single_1', $this->data);
	}
	public function maintenance()
	{
		$page = 'Services';
		$this->set_activepage($page);

		

		//$this->data['contacts'] = $this->tfl_model->get_contact_page();
		//var_dump($this->data['contacts']);

		$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'services_main', $this->data);
	}
	*/
}