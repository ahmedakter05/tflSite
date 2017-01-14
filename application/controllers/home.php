<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends My_Controller {

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
		$page = 'Home';
		$this->set_activepage($page);

		$this->data['whatwedo'] = $this->tfl_model->frontpage_what_we_do();
		$this->data['whoweare'] = $this->tfl_model->frontpage_who_we_are();
		$this->data['whyus'] = $this->tfl_model->frontpage_why_us();
		$this->data['slider'] = $this->tfl_model->frontpage_slider();
		$this->data['clienticon'] = $this->tfl_model->frontpage_client_icon();
		//var_dump($this->data);
		$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'home', $this->data);
	}
	public function contact()
	{
		$page = 'Contacts';
		$this->set_activepage($page);

		//var_dump($this->data);
		$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'contacts', $this->data);
	}
	public function error()
	{
		$page = 'Error';
		$this->set_activepage($page);

		$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'error_404', $this->data);
	}
}
