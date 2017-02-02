<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontpage extends My_Controller {

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

	public function slider()
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
		$crud->set_table('frontpage_slider');
		$crud->columns('id','title','imagelink_lg');
		$crud->display_as('id','ID')->display_as('imagelink_lg','Banner')->display_as('title','Title');
		$crud->set_field_upload('imagelink_lg','assets/uploads/slider'); 
		$crud->set_field_upload('imagelink_sm_1','assets/uploads/slider'); 
		$crud->set_field_upload('imagelink_sm_2','assets/uploads/slider'); 
		$this->data['crud'] = $crud->render();


		 
		//$this->_example_output($output);

		//$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'crud_view', $this->data);
	}

	public function clienticon()
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
		$crud->set_table('frontpage_clienticon');
		$crud->columns('id','name','iconlink');
		$crud->display_as('id','ID')->display_as('name','Name')->display_as('iconlink','Icon');
		$crud->set_field_upload('iconlink','assets/uploads/icon'); 
		$this->data['crud'] = $crud->render();


		 
		//$this->_example_output($output);

		//$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'crud_view', $this->data);
	}

	public function whyus()
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
		$crud->set_table('frontpage_whyus');
		$crud->columns('id','title','details');
		$crud->display_as('id','ID')->display_as('title','Title')->display_as('details','Info');
		$this->data['crud'] = $crud->render();


		 
		//$this->_example_output($output);

		//$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'crud_view', $this->data);
	}

	public function whatwedo()
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
		$crud->set_table('frontpage_whatwedo');
		$crud->columns('id','title','description', 'position');
		$crud->display_as('id','ID')->display_as('title','Title')->display_as('description','Description')->display_as('position','Position');
		$this->data['crud'] = $crud->render();


		 
		//$this->_example_output($output);

		//$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'crud_view', $this->data);
	}

	public function whoweare()
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
		$crud->set_table('frontpage_whoweare');
		$crud->columns('id','title','details', 'specialtext', 'imagelink');
		$crud->display_as('id','ID')->display_as('title','Title')->display_as('details','Description')->display_as('specialtext','Quoted Text')->display_as('imagelink','Image');
		$crud->set_field_upload('imagelink','assets/uploads/files'); 
		$this->data['crud'] = $crud->render();


		 
		//$this->_example_output($output);

		//$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'crud_view', $this->data);
	}

	

	public function products()
	{
		$page = 'Products';
		$this->set_activepage($page);
		$this->data['title'] = "TechFocus Ltd - Focusing on Technology" ;
		$this->data['activepage'] = "Products" ;

		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			$this->session->set_userdata('last_page', current_url()); redirect('admin/cp/login', 'refresh');
			//echo "Redirect to Login";
		}

		$crud = new grocery_CRUD();
		$crud->unset_jquery();
		$crud->set_table('products_main');
		$crud->columns('id','name','details', 'featured', 'imageurl1');
		//$crud->edit_fields('name','details','description', 'keyfeatures', 'specification', 'featured', 'imageurl1', 'imageurl2', 'imageurl3', 'imageurl4');
		//$crud->add_fields('name','details','description', 'updatetime');

		$crud->set_relation('categoryid','categories','cname');
		$crud->field_type('featured','dropdown', array('1' => 'Yes', '0' => 'No'));
		$crud->display_as('cid','ID')->display_as('cname','Category Name')->display_as('parentid','Parent Category')
			 ->display_as('cinfo','Category Info')->display_as('imageurl1','Image');
		$crud->set_field_upload('imageurl1','assets/uploads/files'); 
		$crud->set_field_upload('imageurl2','assets/uploads/files'); 
		$crud->set_field_upload('imageurl3','assets/uploads/files'); 
		$crud->set_field_upload('imageurl4','assets/uploads/files'); 
		
		$this->data['crud'] = $crud->render();


		 
		//$this->_example_output($output);

		//$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'crud_view', $this->data);
	}
	
	
	

}