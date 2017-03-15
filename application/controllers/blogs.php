<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blogs extends My_Controller {

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
		$this->get_blogs_param();

		
	}

	public function index()
	{
		$page = 'Products';
		$this->set_activepage($page);

		

		$this->data['blogpost'] = $this->tfl_model->get_blog_post();

		//var_dump($this->data['blogpost']);

		$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'blogs_main', $this->data);
	}
	public function detail($tname=NULL)
	{
		$page = 'Products';
		$this->set_activepage($page);

		$tname = ($this->tfl_model->blogs_post_check($tname) ? $tname : NULL);
		
		if (empty($tname)) 
		{
			$this->session->set_flashdata('message', 'No Tags Found');
			redirect('blogs/index', 'refresh');
		}

		$this->data['blog_post_single'] = $this->tfl_model->get_blog_post_single($tname);
		$this->data['blog_related_products'] = $this->tfl_model->get_related_products($this->data['blog_post_single']['tagsid']);
		//var_dump($this->data['blog_related_products']);

		$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'blogs_single', $this->data);
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