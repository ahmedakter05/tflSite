<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class MY_Controller extends CI_Controller
{	

	public $template_dir = 'oliver/';

	public $data = array();

	//public $data['bc']=array();

	function __construct()
    {
        parent::__construct();
        
		$this->load->library(array('aa_lib', 'session', 'ion_auth', 'MY_Session'));
		$this->load->helper(array('cookie', 'url', 'language', 'date'));
		$this->load->database();
		//$this->lang->load('aa');
		$this->load->model('tfl_model');

		$this->_loaddata();
    }
	
	function _loaddata()
	{
		$this->data['side_nav'] = array(
			'About Us' => base_url().'about',
			'Contact Us' => base_url().'contact', 
			);
	}

	function unset_template()
	{

		$this->output->unset_template('oliver');
					
	}
	function set_panel($pname)
	{
		$this->template_dir = $pname . '/';	
	}
	function get_header_footer()
	{		
		$this->data['metainfo'] = $this->tfl_model->header_query();
		//var_dump($this->data['metainfo'] );
		$this->data['socialshare'] = $this->tfl_model->footer_socialshare();
		$this->data['footerinfo'] = $this->tfl_model->footer_query();		
		$this->data['contacts'] = $this->tfl_model->get_contact_page();					
	}

	function get_common_param()
	{

		/*$this->data['products_category'] = $this->tfl_model->get_products_category();
		$this->data['products_industry'] = $this->tfl_model->get_products_industry();
		$this->data['products_technology'] = $this->tfl_model->get_products_technology(); */
		
		$this->data['products_category'] = $this->tfl_model->getCategoryTreeForParentId(1);
		$this->data['products_industry'] = $this->tfl_model->getCategoryTreeForParentId(2);
		$this->data['products_technology'] = $this->tfl_model->getCategoryTreeForParentId(3);	
		$this->data['featured_products'] = $this->tfl_model->products_view_featured();	
		$this->data['recent_products'] = $this->tfl_model->products_view_recent();			
	}
	function get_service_param()
	{
		$this->data['serviceothers'] = $this->tfl_model->get_service_others();
		//var_dump($this->data['serviceothers']);			
	}
	
	
	function set_activepage($page=NULL)
	{

		$this->data['activepage'] = $page;
					
	}

	function get_edutech_common_param()
	{		
		$this->data['metainfo'] = $this->tfl_model->edutech_header_query();
					
	}

	function get_edutech_sidebar()
	{
		
		$this->data['edutech_side_category'] = $this->tfl_model->edutech_get_side_category();
		$this->data['edutech_slide_videos'] = $this->tfl_model->edutech_get_slide_video();
		$this->data['edutech_recent_videos'] = $this->tfl_model->edutech_get_recent_video();
		$this->data['edutech_video_count'] = $this->tfl_model->edutech_count_video();
	}
	
	function set_bc($pgname=NULL, $pgdir=NULL)
	{
		
		$loops = explode('/', $pgdir);
		$val = '/'; $id = '1';
		foreach ($loops as $loop){
		$val = "$val" . "$loop" . '/';
		$page = explode('/', $val);
		$this->breadcrumbs->push(ucfirst($page[$id]), $val);
		$id = $id + 1;
		};
		//$this->breadcrumbs->push('Home', '/home');
		//$this->breadcrumbs->push('Blog', '/home/blog');
		$this->data['bc'] = $this->breadcrumbs->show();
					
	}
	
	public function get_array_data($get_data)
	{
		if(isset($get_data))
		{
			foreach ($get_data as $key=>$values)
				{
				  $clientdata[$key] = $values;  // better methodology to retrieve and store multiple records in arrays in loop
				}
				return $clientdata;
		} else { 
			return $clientdata = NULL; 
		}
	}

	
	
	
	
}