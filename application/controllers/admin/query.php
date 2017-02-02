<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Query extends My_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library(array('pagination', 'form_validation', 'grocery_CRUD'));
		$this->load->helper(array());

		$this->lang->load('auth');
		
		$this->_init();
	}

	private function _init()
	{
		$this->output->set_template('aries_layout');
		$this->set_panel('aries_admin');
		$this->get_header_footer();
		$this->get_common_param();
	}

	public function _example_output($output = null)
	{
		$this->load->view('example.php',$output);
	}

	public function index()
	{
		$page = 'Products';
		$this->set_activepage($page);
		$this->data['title'] = "TechFocus Ltd - Focusing on Technology" ;
		$this->data['activepage'] = "Products" ;

		redirect('admin/req/category', 'refresh');

		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			$this->session->set_userdata('last_page', current_url()); redirect('admin/cp/login', 'refresh');
			//echo "Redirect to Login";
		}
		
	}

	public function socialshare()
	{
		$page = 'Categories';
		$this->set_activepage($page);
		$this->data['title'] = "TechFocus Ltd - Focusing on Technology" ;
		$this->data['activepage'] = "Categories" ;

		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			$this->session->set_userdata('last_page', current_url()); redirect('admin/cp/login', 'refresh');
			//echo "Redirect to Login";
		}

		$crud = new grocery_CRUD();
		$crud->unset_jquery();
		$crud->set_table('footer_social_share');
		$crud->columns('id','title','href');
		$crud->display_as('id','ID')->display_as('title','Title')->display_as('href','Link');
		$crud->field_type('class_ref','dropdown', array('fa fa-dribbble' => 'Dribble', 'fa fa-twitter' => 'Twitter' , 'fa fa-facebook' => 'Facebook', 'fa fa-google-plus' => 'Google +' , 'fa fa-linkedin' => 'Linkedin'));
		$this->data['crud'] = $crud->render();


		 
		//$this->_example_output($output);

		//$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'crud_view', $this->data);
	}

	public function header()
	{
		$page = 'Categories';
		$this->set_activepage($page);
		$this->data['title'] = "TechFocus Ltd - Focusing on Technology" ;
		$this->data['activepage'] = "Categories" ;

		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			$this->session->set_userdata('last_page', current_url()); redirect('admin/cp/login', 'refresh');
			//echo "Redirect to Login";
		}

		$crud = new grocery_CRUD();
		$crud->unset_jquery();
		$crud->unset_add();
		$crud->unset_delete();
		$crud->set_table('header');
		$crud->columns('id','name', 'content','imagelink');
		$crud->display_as('id','ID')->display_as('name','Name')->display_as('content','Content')->display_as('imagelink','Image & Icon');
		$crud->set_field_upload('imagelink','assets/uploads/files'); 
		$this->data['crud'] = $crud->render();


		 
		//$this->_example_output($output);

		//$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'crud_view', $this->data);
	}

	public function footer()
	{
		$page = 'Categories';
		$this->set_activepage($page);
		$this->data['title'] = "TechFocus Ltd - Focusing on Technology" ;
		$this->data['activepage'] = "Categories" ;

		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			$this->session->set_userdata('last_page', current_url()); redirect('admin/cp/login', 'refresh');
			//echo "Redirect to Login";
		}

		$crud = new grocery_CRUD();
		$crud->unset_jquery();
		$crud->unset_add();
		$crud->unset_delete();
		$crud->set_table('footer');
		$crud->columns('id','name','content1', 'content2', 'link', 'imagelink');
		$crud->display_as('id','ID')->display_as('name','Name')->display_as('content1','Content 1')->display_as('content2', 'Content 2')->display_as('link', 'Link')->display_as('imagelink', 'Image');
		$crud->set_field_upload('imagelink','assets/uploads/files'); 
		$this->data['crud'] = $crud->render();


		 
		//$this->_example_output($output);

		//$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'crud_view', $this->data);
	}

	public function dsafdf()
	{
		$page = 'Categories';
		$this->set_activepage($page);
		$this->data['title'] = "TechFocus Ltd - Focusing on Technology" ;
		$this->data['activepage'] = "Categories" ;

		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			$this->session->set_userdata('last_page', current_url()); redirect('admin/cp/login', 'refresh');
			//echo "Redirect to Login";
		}

		$crud = new grocery_CRUD();
		$crud->unset_jquery();
		$crud->set_table('footer_social_share');
		$crud->columns('id','title','href');
		$crud->display_as('id','ID')->display_as('title','Title')->display_as('href','Link');
		$crud->field_type('class_ref','dropdown', array('fa fa-dribbble' => 'Dribble', 'fa fa-twitter' => 'Twitter' , 'fa fa-facebook' => 'Facebook', 'fa fa-google-plus' => 'Google +' , 'fa fa-linkedin' => 'Linkedin'));
		$this->data['crud'] = $crud->render();


		 
		//$this->_example_output($output);

		//$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'crud_view', $this->data);
	}


}