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
		//$this->session->keep_flashdata('message');
		$this->output->set_template('oliver_layout');
		$this->get_header_footer();
		$this->get_common_param();

		
	}

	public function index()
	{
		$page = 'Products';
		$this->set_activepage($page);
		$this->data['cid'] = 0;
		$this->data['parent'] = "Products";

		$this->data['new_category'] = $this->tfl_model->getCategoryTreeForParentId(0);
		$this->data['products1'] = $this->tfl_model->products_view_all_new();
		$this->data['category_intro']['cid'] = "0";
		$this->data['category_intro']['cname'] = "All Products"; 
		$this->data['category_intro']['imageurl1'] = "7c28b-objectiflune.jpg";
		$this->data['category_intro']['cinfo'] = "";
		$this->data['category_intro']['parentid'] = "";
		//$this->data['clienticon'] = $this->tfl_model->frontpage_client_icon();
		//var_dump($this->data);
		$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'products_main.php', $this->data);
	}
	/*public function categoryold1($cid=NULL)
	{
		$page = 'Products';
		$this->set_activepage($page);
		$this->data['cid'] = $cid;
		$this->data['parent'] = "Category";
		$cid = ($this->tfl_model->products_cat_check('category', $cid) ? $cid : '0');
		if ($cid=='0') 
		{
			$this->session->set_flashdata('message', 'No Category Founds');
			redirect('products/index', 'refresh');
		}

		$this->data['category_intro'] = $this->tfl_model->get_category_intro($cid);
		$this->data['products'] = $this->tfl_model->products_view_category($cid);
		//$this->data['clienticon'] = $this->tfl_model->frontpage_client_icon();
		//var_dump($this->data['category_intro']);
		$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'products_main.php', $this->data);
	}*/
	public function category($cid=NULL)
	{
		$page = 'Products';
		$this->set_activepage($page);
		$this->data['cid'] = $cid;
		$this->data['parent'] = "Category";
		$cid = ($this->tfl_model->products_cat_check_new($cid) ? $cid : '0');
		if ($cid=='0') 
		{
			$this->session->set_flashdata('message', 'No Category Founds');
			redirect('products/index', 'refresh');
		}
		$this->data['new_category'] = $this->tfl_model->getCategoryTreeForParentId(0);
		$this->data['sub_category'] = $this->tfl_model->getCategoryTreeForParentId($cid);


		$this->data['category_intro'] = $this->tfl_model->get_category_intro($cid);
		$this->data['products1'] = $this->tfl_model->products_view_category_new($cid);
		

		
		//var_dump($this->data['sub_category']);
		$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'products_main.php', $this->data);
	}
	/*public function industry($cid=NULL)
	{
		$page = 'Products';
		$this->set_activepage($page);
		$this->data['cid'] = $cid;
		$this->data['parent'] = "Industry";
		$cid = ($this->tfl_model->products_cat_check('industry', $cid) ? $cid : '0');
		if ($cid=='0') 
		{
			$this->session->set_flashdata('message', 'No Industry Founds');
			redirect('products/index', 'refresh');
		}
		
		$this->data['industry_intro'] = $this->tfl_model->get_industry_intro($cid);
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
		$this->data['cid'] = $cid;
		$this->data['parent'] = "Technology";
		$cid = ($this->tfl_model->products_cat_check('technology', $cid) ? $cid : '0');
		if ($cid=='0') 
		{
			$this->session->set_flashdata('message', 'No Technology Founds');
			redirect('products/index', 'refresh');
		}
		
		$this->data['technology_intro'] = $this->tfl_model->get_technology_intro($cid);
		$this->data['products'] = $this->tfl_model->products_view_technology($cid);
		//$this->data['clienticon'] = $this->tfl_model->frontpage_client_icon();
		//print_r($this->data['technology_intro']);
		$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'products_main_technology.php', $this->data);
	}*/
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
	public function test($cid=NULL)
	{
		$page = 'Products';
		$this->set_activepage($page);
		$this->data['cid'] = $cid;
		$this->data['parent'] = "Category";

		$this->data['new_category'] = $this->tfl_model->getCategoryTreeForParentId(0);


		$this->data['category_intro'] = $this->tfl_model->get_category_intro($cid);
		$this->data['products1'] = $this->tfl_model->products_view_category_new($cid);
		$this->data['products'] = $this->tfl_model->products_view_category($cid);

		
		//var_dump($this->data['sub_category']);
		$this->data['message'] = $this->session->flashdata('message');
		$this->load->view($this->template_dir.'products_test.php', $this->data);
	}
	public function test1($cid)
	{
		$page = 'Products';
		$this->set_activepage($page);
		
		$this->data['category'] = $this->tfl_model->getCategoryTreeForParentId($cid);
		var_dump($this->data['category']);
		foreach ($this->data['category'] as $value) {
			echo $value['name'] . '</br>';
		}
		$this->printTree($this->data['category'], 0, 1);
		//var_dump($result);


		




	}
	public function get_parent($cid) {
    	$page = 'Products';
		$this->set_activepage($page);

		//$print = $this->tfl_model->custom_cat_view($cid);
		//var_dump($print);
		while($row = $this->tfl_model->custom_cat_view($cid)):
			var_dump($row);
			$i = 0;
			if ($i == 0) echo '<ul>';{
			 echo '<li>' . $row->name;
			 echo $row->category_id;
			 $this->get_parent($row->category_id);
			 echo $row->category_id;
			 echo '</li>';}
			 $i++;
			 if ($i > 0) echo '</ul>';
		endwhile;
  
    } 
    function printTree($data, $level = 0, $p_counter = 1) {    

            foreach ($data as $item) {  

                if ($item['parent_id'] == 0) {
                    $addr =  $item['name'];
                    $p_counter++;
                }

                else if ($item['parent_id'] != 0) {

                    $addr =  str_repeat(' - ', $level) . $item['name'];   


                } else {
                     $addr = $item['name'];              
                }

                global $result;

                $result['data'][] = Array($addr);   

                if (isset($item['sub_categories'])) {                    
                    $this->printTree($item['sub_categories'], $level + 1, $p_counter + 1);
                }
            }
			
			//return $result; 
    }

            
}
