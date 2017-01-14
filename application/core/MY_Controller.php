<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class MY_Controller extends CI_Controller
{	

public $template_dir = 'oliver/';
public $data = array();
//public $data['bc']=array();

	function __construct()
    {
        parent::__construct();
        
		$this->load->library(array('aa_lib', 'session', 'ion_auth'));
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
	function get_header_footer()
	{
		
		$this->data['socialshare'] = $this->tfl_model->footer_socialshare();
					
	}
	function get_common_param()
	{

		$this->data['products_category'] = $this->tfl_model->get_products_category();
		$this->data['products_industry'] = $this->tfl_model->get_products_industry();
		$this->data['products_technology'] = $this->tfl_model->get_products_technology();
					
	}
	
	function set_activepage($page=NULL)
	{

		$this->data['activepage'] = $page;
					
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