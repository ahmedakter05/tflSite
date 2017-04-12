<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Games extends My_Controller {

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
		$this->output->set_template('gameforest_layout');
		$this->set_panel('gameforest');
		$this->get_header_footer();
		//$this->get_common_param();
		//$this->get_edutech_sidebar();
		$this->get_gameshop_common_param();

		
	}

	public function index()
	{
		$page = 'Games Forest';
		$this->set_activepage($page);

		
		$this->data['slider'] = $this->tfl_model->gameshop_slider();
		//$this->data['gameshop_tags_menu'] = $this->tfl_model->gameshop_tags_menu();
		//$this->data['products'] = $this->tfl_model->gameshop_products_latest('2');
		//var_dump($this->data['products']);

		$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'home', $this->data);
	}
	public function videos($eid=NULL)
	{
		$page = 'EduTech Videos';
		$this->set_activepage($page);
		
		if (!empty($eid)){
			$this->data['videos'] = $this->tfl_model->get_edutech_videos($eid);
		} else {
			$this->data['videos'] = $this->tfl_model->get_edutech_videos_all();
		}

		//var_dump($this->data['videos']);

		$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'videos', $this->data);
	}
	public function details($vid=NULL)
	{
		$page = 'EduTech Videos';
		$this->set_activepage($page);

		$this->data['details'] = $this->tfl_model->get_edutech_video_single($vid);

		$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'video_single', $this->data);
	}
}