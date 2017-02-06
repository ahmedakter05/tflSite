<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Examples2 extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		/* Standard Libraries */
		$this->load->database();
		$this->load->helper('url');
		/* ------------------ */	
		
		$this->load->library('grocery_CRUD');	
	}

	function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}
	
	function categorie()
	{
		$crud = new grocery_CRUD();
		
		$crud->set_table('vnt_categorie');
		
		/* Add this customisation for parent_relation */
		$primary_id_field 	= 'categoria_id';
		$table_name 		= 'vnt_categorie';
		$relation_field_name = 'parent_id';
		$parent_field 		= 'parent_id';
		$title_field 		= 'categoria';
		$title_display_as 	= 'Select Categoria';
		$where				= array('stato'=>'1');//not required
		$same_table 		= true; //not required, the default is false
		
		$this->set_parent_relation($primary_id_field,$table_name,$parent_field,$title_field,$crud,$title_display_as,$relation_field_name,$where,$same_table);
		/* ------------------------------------------- */
		
		$output = $crud->render();
		
		$this->_example_output($output);
	}
	
	function set_parent_relation($primary_id_field,$table_name,$parent_field,$title_field,$crud,$title_display_as,$relation_field_name,$where = null,$same_table = false)
	{
		$this->gc_id 			= $primary_id_field;
		$this->gc_table	 		= $table_name;
		$this->gc_field_name 	= $relation_field_name;
		$this->gc_parent 		= $parent_field;
		$this->gc_title 		= $title_field;
		$this->gc_where 		= $where;
		$this->gc_title_display_as 	= $title_display_as;
		$this->gc_same_table 	= $same_table;
		
		$crud->set_css('assets/grocery_crud/css/jquery_plugins/chosen/chosen.css');
		$crud->set_js('assets/grocery_crud/js/jquery-1.7.1.min.js');
		$crud->set_js('assets/grocery_crud/js/jquery_plugins/jquery.chosen.min.js');
		$crud->set_js('assets/grocery_crud/js/jquery_plugins/ajax-chosen.js');
		$crud->set_js('assets/grocery_crud/js/jquery_plugins/config/jquery.chosen.config.js');
		
		$crud->set_relation($this->gc_field_name,$this->gc_table,$this->gc_title);
		
		$crud->callback_field($this->gc_field_name,array($this,'parent_relation_callback'));		
	}
	
	function parent_relation_callback($value = '', $primary = null)
	{
		if(!empty($value))
		{
			$this->gc_history = $this->get_parent_history($value);
		}
		
		$return_string 	= '<script type="text/javascript"> var ajax_relation_url = ""; </script>';
		$return_string 	.= '<select name="'.$this->gc_field_name.'" class="chosen-select" data-placeholder="'.$this->gc_title_display_as.'"><option value=""></option>';
		$return_string 	.= $this->parent_repeat(null,-1,$value);
		$return_string 	.= '</select>';
		
		return $return_string;
	}
	
	function parent_repeat($parent = null, $tree_level = -1, $value = '')
	{
		$return_string = '';
		if($this->gc_where !== null)
			$this->db->where($this->gc_where);
		if($parent === null)
			$this->db->where($this->gc_parent. ' IS NULL');
		else
			$this->db->where($this->gc_parent,$parent);
		$db_result = $this->db->get($this->gc_table);
		
		if($db_result->num_rows() > 0)
		{
			$tree_level++;
			foreach($db_result->result() as $result)
			{			
				$tree_string = $tree_level != 0 ? '|'.str_repeat('-',$tree_level*4) : '';
				$selected = $value !== '' && $value == $result->{$this->gc_id} ? 'selected = "selected"' : '';
				$disabled = $this->gc_same_table && !empty($value) &&  in_array($result->{$this->gc_id},$this->gc_history) ? 'disabled="disabled"' : '';
				
				$return_string .= "<option value='".$result->{$this->gc_id}."' {$selected} {$disabled} >{$tree_string} ".$result->{$this->gc_title}."</option>";
				$return_string .= $this->parent_repeat($result->{$this->gc_id}, $tree_level, $value);
			}
		}

		return $return_string;
	}
	
	function get_parent_history($id)
	{
		$history = array();
		
		$this->db->where($this->gc_id,$id);
		$result = $this->db->get($this->gc_table)->row();
		
		$history[] = $result->{$this->gc_id};
		
		while(!empty($result->{$this->gc_parent}))
		{
			$this->db->where($this->gc_id,$result->{$this->gc_parent});
			$result = $this->db->get($this->gc_table)->row();
			
			$history[] = $result->{$this->gc_id};
		}
		
		return $history;
	}
	
	function _example_output($output = null)
	{
		$this->load->view('example.php',$output);	
	}	
}