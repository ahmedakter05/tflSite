<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edutech extends My_Controller {

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
		$this->output->set_template('beetube_layout');
		$this->set_panel('beetube');
		$this->get_header_footer();
		$this->get_common_param();

		
	}

	public function index()
	{
		$page = 'EduTech';
		$this->set_activepage($page);

		$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'home', $this->data);
	}
	public function videos($eid=NULL)
	{
		$page = 'EduTech';
		$this->set_activepage($page);
		
		if (!empty($eid)){
			$this->data['videos'] = $this->tfl_model->get_edutech_videos($eid);
		} else {
			$this->data['videos'] = $this->tfl_model->get_edutech_videos_all();
		}

		
		var_dump($this->data['videos']);

		$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'videos', $this->data);
	}
	public function details($id=NULL)
	{
		$page = 'EduTech';
		$this->set_activepage($page);

		$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'video_single', $this->data);
	}
}
