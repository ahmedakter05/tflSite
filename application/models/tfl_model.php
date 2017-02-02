<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tfl_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->config('aa_config', TRUE);
		$this->load->helper(array('cookie', 'date'));
		$this->load->library(array(''));
		//$this->lang->load('aa');
	}
	
	
	function frontpage_what_we_do()
	{
		$query = $this->db->select('*')
						  ->order_by('position', 'asc')
						  ->limit(4)
						  ->get('frontpage_whatwedo');

						  //var_dump($query->result());
		
		return $query->result();
	}

	function header_query()
	{
		$query = $this->db->select('*')
						  ->order_by('id', 'asc')
						  //->limit(4)
						  ->get('header')
						  ->result_array();


		return $query;
	}
	function footer_query()
	{
		$query = $this->db->select('*')
						  ->order_by('id', 'asc')
						  //->limit(4)
						  ->get('footer')
						  ->result_array();
						  
		return $query;
	}
	
	function frontpage_who_we_are()
	{
		$query = $this->db->select('*')
						  ->order_by('id', 'asc')
						  ->limit(1)
						  ->get('frontpage_whoweare');

						  //var_dump($query->result());
		
		return $query->result();
	}
	function frontpage_why_us()
	{
		$query = $this->db->select('*')
						  ->order_by('id', 'asc')
						  ->limit(3)
						  ->get('frontpage_whyus');

						  //var_dump($query->result());
		
		return $query->result();
	}
	function frontpage_slider()
	{
		$query = $this->db->select('*')
						  ->order_by('id', 'asc')
						  ->limit(10)
						  ->get('frontpage_slider');

						  //var_dump($query->result());
		
		return $query->result();
	}

	function footer_socialshare()
	{
		$query = $this->db->select('*')
						  ->order_by('id', 'asc')
						  ->limit(5)
						  ->get('footer_social_share');

						  //var_dump($query->result());
		
		return $query->result();
	}

	function frontpage_client_icon()
	{
		$query = $this->db->select('*')
						  ->order_by('id', 'asc')
						  ->limit(20)
						  ->get('frontpage_clienticon');

						  //var_dump($query->result());
		
		return $query->result();
	}

	function products_view_all($limit=NULL, $start=NULL)
	{
		$query = $this->db->select('*')
						  ->order_by('updatetime', 'asc')
						  ->limit(30)
						  //->Offset($start)
						  //->join('users', 'products_main.userid = users.id', 'inner')
						  //->group_by('products_main.postid')
		                  ->get('products_main')
		                  ->result_array();

		foreach ($query as $key => $value) {
			
		$query[$key]['categories'] = $this->db->select('*')
							    ->limit(10)
							    ->join('products_category', 'products_category.id = products_category_relation.categoryid')
							    ->where('products_category_relation.productsid', $value['id'])
							    //->Offset($start)
							    //->group_by('products_main.postid')
			                  ->get('products_category_relation')
			                  ->result_array();

		}

		return $query;
	}

	function products_view_all_new($limit=NULL, $start=NULL)
	{
		$query = $this->db->select('*')
						  ->order_by('updatetime', 'asc')
						  ->limit(30)
		                  ->get('products_main')
		                  ->result_array();

		foreach ($query as $key => $value) {
			
		$query[$key]['categories'] = $this->db->select('*')
							    ->limit(10)
							    ->where('cid', $value['id'])
				                ->get('categories')
				                ->row_array();
		}

		return $query;
	}

	function products_view_featured($limit=NULL, $start=NULL)
	{
		$query = $this->db->select('*')
						  ->order_by('updatetime', 'asc')
						  ->where('featured', '1')
						  ->limit(5)
		                  ->get('products_main')
		                  ->result_array();

		foreach ($query as $key => $value) {
			
		$query[$key]['categories'] = $this->db->select('cid, cname')
							    ->limit(10)
							    ->where('cid', $value['id'])
				                ->get('categories')
				                ->row_array();
		}

		return $query;
	}
	function products_view_recent($limit=NULL, $start=NULL)
	{
		$query = $this->db->select('*')
						  ->order_by('updatetime', 'asc')
						  ->limit(8)
		                  ->get('products_main')
		                  ->result_array();

		foreach ($query as $key => $value) {
			
		$query[$key]['categories'] = $this->db->select('cid, cname')
							    ->limit(10)
							    ->where('cid', $value['id'])
				                ->get('categories')
				                ->row_array();
		}

		return $query;
	}

	function get_products_category()
	{
		$query = $this->db->select('*')
						  ->order_by('categoryname', 'asc')
						  //->limit(10)
						  ->get('products_category')
						  ->result_array();

						  
		return $query;
	}
	function get_products_sub_category($cid=NULL)
	{
		$query = $this->db->select('*')
						  ->order_by('subname', 'asc')
						  //->limit(10)
						  ->where('products_category_sub.parentid', $cid)
						  ->get('products_category_sub')
						  ->result_array();

						  
		return $query;
	}
	function get_products_industry()
	{
		$query = $this->db->select('*')
						  ->order_by('industryname', 'asc')
						  //->limit(10)
						  ->get('products_industry')
						  ->result_array();

						  
		return $query;
	}
	function get_products_technology()
	{
		$query = $this->db->select('*')
						  ->order_by('technologyname', 'asc')
						  //->limit(10)
						  ->get('products_technology')
						  ->result_array();

						  
		return $query;
	}

	function products_view_single($pid=NULL)
	{	
		//$query['product'] = $this->db->select('blog_post_category.*, blog_category.categoryname, blog_post.*, users.id as userid, users.username, users.first_name, users.last_name, users.email')
		$query['product'] = $this->db->select('products_main.*, categories.cid as categoryid, categories.cname as categoryname')
						  ->order_by('updatetime', 'desc')
						  ->where('products_main.id', $pid)
						  ->limit(1)
						  ->join('categories', 'categories.cid =  products_main.categoryid', 'left')
						  //->group_by('blog_post.postid')
						  ->get('products_main')
						  ->row_array();

		/*

		$query['comments'] = $this->db->select('blog_comment.*, users.first_name, users.last_name')
							      ->limit(10)
							      ->join('blog_comment', 'blog_comment.commentid = blog_post_comment.commentid', 'left')
							      ->where('blog_post_comment.postid', $postid)
							      ->join('users', 'blog_comment.author = users.id', 'inner')
							    //->Offset($start)
							    //->group_by('blog_post.postid')
			                    ->get('blog_post_comment')
			                    ->result_array();

		$query['commentcount'] = $this->db->from('blog_comment')
												->join('blog_post_comment', 'blog_comment.commentid = blog_post_comment.commentid')
												->where('blog_post_comment.postid', $postid)
												->count_all_results();

		//var_dump($query);*/
												
		return $query;
	}

	function get_category_intro($cid=NULL)
	{
		$query = $this->db->select('*')
						  ->where('categories.cid', $cid)
						  ->limit(1)
						  ->get('categories')
						  ->row_array();


		$query['parent'] = $this->db->select('cname as name, cid as id')
							  ->where('categories.cid', $query['parentid'])
							  ->limit(1)
							  ->get('categories')
							  ->row_array();

						  
		return $query;
	}
	function get_industry_intro($cid=NULL)
	{
		$query = $this->db->select('*')
						  ->where('products_industry.id', $cid)
						  ->limit(1)
						  ->get('products_industry')
						  ->row_array();

						  
		return $query;
	}
	function get_technology_intro($cid=NULL)
	{
		$query = $this->db->select('*')
						  ->where('products_technology.id', $cid)
						  ->limit(1)
						  ->get('products_technology')
						  ->row_array();

						  
		return $query;
	}

	function products_view_category($cid=NULL) 
	{
		$query = $this->db->select('*')
						  ->order_by('updatetime', 'asc')
						  ->limit(30)
						  ->join('products_category_relation', 'products_category_relation.productsid = products_main.id', 'inner')
						  ->where('products_category_relation.categoryid', $cid)
						  //->group_by('products_main.id')
		                  ->get('products_main')
		                  ->result_array();

		foreach ($query as $key => $value) {
			
		$query[$key]['categories'] = $this->db->select('*')
							    ->limit(1)
							    ->join('products_category', 'products_category.id = products_category_relation.categoryid')
							    ->where('products_category_relation.productsid', $value['id'])
							    //->Offset($start)
							    //->group_by('products_main.postid')
			                  ->get('products_category_relation')
			                  ->row_array();
		}

		return $query;
	}
	function products_view_industry($cid=NULL) 
	{
		$query = $this->db->select('*')
						  ->order_by('updatetime', 'asc')
						  ->limit(30)
						  ->join('products_category_relation', 'products_category_relation.productsid = products_main.id', 'inner')
						  ->where('products_category_relation.industryid', $cid)
						  //->group_by('products_main.id')
		                  ->get('products_main')
		                  ->result_array();

		foreach ($query as $key => $value) {
			
		$query[$key]['industries'] = $this->db->select('*')
							    ->limit(10)
							    ->join('products_industry', 'products_industry.id = products_category_relation.industryid')
							    ->where('products_category_relation.productsid', $value['id'])
							    //->Offset($start)
							    //->group_by('products_main.postid')
			                  ->get('products_category_relation')
			                  ->result_array();
		}

		return $query;
	}
	function products_view_technology($cid=NULL) 
	{
		$query = $this->db->select('*')
						  ->order_by('updatetime', 'asc')
						  ->limit(30)
						  ->join('products_category_relation', 'products_category_relation.productsid = products_main.id', 'inner')
						  ->where('products_category_relation.categoryid', $cid)
						  //->group_by('products_main.id')
		                  ->get('products_main')
		                  ->result_array();

		foreach ($query as $key => $value) {
			
		$query[$key]['technologies'] = $this->db->select('*')
							    ->limit(10)
							    ->join('products_technology', 'products_technology.id = products_category_relation.technologyid')
							    ->where('products_category_relation.productsid', $value['id'])
							    //->Offset($start)
							    //->group_by('products_main.postid')
			                  ->get('products_category_relation')
			                  ->result_array();
		}

		return $query;
	}

	function products_cat_check($key=NULL, $id=NULL )
	{
		$query = $this->db->select('*')
						  //->limit(10)
						  ->where('id', $id)
						  ->get('products_'.$key)
						  ->num_rows() > '0';

		//if ($query > "0") { return TRUE; } else {return FALSE; }
		return $query;				  
	}

	function products_cat_check_new($cid=NULL)
	{
		$query = $this->db->select('*')
						  //->limit(10)
						  ->where('cid', $cid)
						  ->get('categories')
						  ->num_rows() > '0';

		//if ($query > "0") { return TRUE; } else {return FALSE; }
		return $query;				  
	}

	function custom_cat_view($catid)
	{
		
		
		$query = $this->db->select('*')
						  //->limit(10)
						  ->where('parentid', $catid)
						  ->get('category');

		
		return $query->row();	

		
	}

	public function getCategoryTreeForParentId($parent_id = 0) { ////// Most Charming main 
	  $categories = array();
	  $this->db->from('categories');
	  $this->db->where('parentid', $parent_id);
	  $result = $this->db->get()->result();
	  foreach ($result as $mainCategory) {
	    $category = array();
	    $category['id'] = $mainCategory->cid;
	    $category['name'] = $mainCategory->cname;
	    $category['parent_id'] = $mainCategory->parentid;
	    $category['sub_categories'] = $this->getCategoryTreeForParentId($category['id']);
	    $categories[$mainCategory->cid] = $category;
	  }
	  /*
	  foreach ($categories as $value) {
	  	$this->db->select('cname');
	  	$this->db->from('categories');
		$this->db->where('parentid', $value['parent_id']);
		$categories['parent_name'] = $this->db->get()->row_array();
	  }*/
	  return $categories;
	}

		/*		"SELECT * FROM products WHERE category_id = '$your_category_id'
			OR category_id IN (
			  SELECT parent_id FROM categories 
			    WHERE id = '$your_category_id'
			)"
		*/

	function products_view_category_new($cid=NULL) 
	{
		$query = $this->db->select('products_main.*, categories.cname')
						  ->order_by('updatetime', 'asc')
						  ->limit(30)
						  ->join('categories', 'categories.cid = products_main.categoryid', 'inner')
						  ->where('categoryid', $cid)
						  ->or_where('categories.parentid', $cid)
						  //->group_by('products_main.id')
		                  ->get('products_main')
		                  ->result_array();

			

		return $query;
	}

	function get_contact_page() 
	{
		$query = $this->db->select('*')
						  ->limit(10)
						  ->get('contactpage_info')
		                  ->result_array();
		return $query;
	}









	public function errors()
	{
		$_output = '';
		foreach ($this->errors as $error)
		{
			$errorLang = $this->lang->line($error) ? $this->lang->line($error) : ' ' . $error . ' ';
			$_output .= $errorLang;
		}
		//$_output .= "Error Defined";

		return $_output;
	}








































































	function blog_view_all()
	{
		$query = $this->db->select('*')
						  ->order_by('create_time', 'desc')
						  ->limit(10)
						  ->join('users', 'products_main.userid = users.id', 'inner')
						  //->join('products_main_tag', 'products_main_tag.postid = products_main.postid', 'left')
						  ->group_by('products_main.postid')
						  ->get('products_main');

						  //var_dump($query->result());
		
		
		
		return $query->result();
	}
	
	function blog_view_all_new($limit=NULL, $start=NULL)
	{
		$query = $this->db->select('products_main.*, users.first_name, users.last_name, users.ip_address, users.username, users.email, users.company, users.phone')
						  ->order_by('create_time', 'asc')
						  ->limit($limit)
						  ->Offset($start)
						  ->join('users', 'products_main.userid = users.id', 'inner')
						  ->group_by('products_main.postid')
		                  ->get('products_main')
		                  ->result_array();
		foreach ($query as $key => $value) {
			
		$query[$key]['tags'] = $this->db->select('blog_tag.tagid, blog_tag.tagtitle')
							    ->limit(10)
							    ->join('blog_tag', 'blog_tag.tagid = products_main_tag.tagid')
							    ->where('products_main_tag.postid', $value['postid'])
							    //->Offset($start)
							    //->group_by('products_main.postid')
			                  ->get('products_main_tag')
			                  ->result_array();

		$query[$key]['categories'] = $this->db->select('blog_category.categoryid, blog_category.categoryname')
							    ->limit(10)
							    ->join('blog_category', 'blog_category.categoryid = products_main_category.categoryid')
							    ->where('products_main_category.postid', $value['postid'])
							    //->Offset($start)
							    //->group_by('products_main.postid')
			                  ->get('products_main_category')
			                  ->result_array();

		$query[$key]['commentcount'] = $this->db->from('blog_comment')
												->join('products_main_comment', 'blog_comment.commentid = products_main_comment.commentid')
												->where('products_main_comment.postid', $value['postid'])
												->count_all_results();

		}
		//$query = $this->array_merge_custom($aa, $query);
		//var_dump($query);
		//var_dump($aa);
		//var_dump($aa);
		return $query;
	}

	function blog_view_category($id=NULL, $limit=NULL, $start=NULL) // working
	{
		$query = $this->db->select('products_main.*, users.first_name, users.last_name, users.ip_address, users.username, users.email, users.company, users.phone')
						  ->order_by('create_time', 'asc')
						  ->limit($limit)
						  ->Offset($start)
						  ->join('users', 'products_main.userid = users.id', 'inner')
						  ->join('products_main_category', 'products_main_category.postid = products_main.postid', 'inner')
						  ->where('products_main_category.categoryid', $id)
						  ->group_by('products_main.postid')
		                  ->get('products_main')
		                  ->result_array();
		foreach ($query as $key => $value) {
			
		$query[$key]['tags'] = $this->db->select('blog_tag.tagid, blog_tag.tagtitle')
							    ->limit(10)
							    ->join('blog_tag', 'blog_tag.tagid = products_main_tag.tagid')
							    ->where('products_main_tag.postid', $value['postid'])
							    //->Offset($start)
							    //->group_by('products_main.postid')
			                  ->get('products_main_tag')
			                  ->result_array();

		$query[$key]['categories'] = $this->db->select('blog_category.categoryid, blog_category.categoryname')
							    ->limit(10)
							    ->join('blog_category', 'blog_category.categoryid = products_main_category.categoryid')
							    ->where('products_main_category.postid', $value['postid'])
							    //->Offset($start)
							    //->group_by('products_main.postid')
			                  ->get('products_main_category')
			                  ->result_array();

		$query[$key]['commentcount'] = $this->db->from('blog_comment')
												->join('products_main_comment', 'blog_comment.commentid = products_main_comment.commentid')
												->where('products_main_comment.postid', $value['postid'])
												->count_all_results();

		}
		
		return $query;
	}

	function blog_view_tag($id=NULL, $limit=NULL, $start=NULL) // working
	{
		$query = $this->db->select('products_main.*, users.first_name, users.last_name, users.ip_address, users.username, users.email, users.company, users.phone')
						  ->order_by('create_time', 'asc')
						  ->limit($limit)
						  ->Offset($start)
						  ->join('users', 'products_main.userid = users.id', 'inner')
						  ->join('products_main_tag', 'products_main_tag.postid = products_main.postid', 'inner')
						  ->where('products_main_tag.tagid', $id)
						  ->group_by('products_main.postid')
		                  ->get('products_main')
		                  ->result_array();
		foreach ($query as $key => $value) {
			
		$query[$key]['tags'] = $this->db->select('blog_tag.tagid, blog_tag.tagtitle')
							    ->limit(10)
							    ->join('blog_tag', 'blog_tag.tagid = products_main_tag.tagid')
							    ->where('products_main_tag.postid', $value['postid'])
							    //->Offset($start)
							    //->group_by('products_main.postid')
			                  ->get('products_main_tag')
			                  ->result_array();

		$query[$key]['categories'] = $this->db->select('blog_category.categoryid, blog_category.categoryname')
							    ->limit(10)
							    ->join('blog_category', 'blog_category.categoryid = products_main_category.categoryid')
							    ->where('products_main_category.postid', $value['postid'])
							    //->Offset($start)
							    //->group_by('products_main.postid')
			                  ->get('products_main_category')
			                  ->result_array();

		$query[$key]['commentcount'] = $this->db->from('blog_comment')
												->join('products_main_comment', 'blog_comment.commentid = products_main_comment.commentid')
												->where('products_main_comment.postid', $value['postid'])
												->count_all_results();

		}
		
		return $query;
	}

	function blog_view_post($postid=NULL)
	{
		$query['post'] = $this->db->select('products_main_category.*, blog_category.categoryname, products_main.*, users.id as userid, users.username, users.first_name, users.last_name, users.email')
						  ->order_by('create_time', 'desc')
						  ->where('products_main.postid', $postid)
						  ->limit(1)
						  ->join('users', 'products_main.userid = users.id', 'inner')
						  ->join('products_main_category', 'products_main_category.postid = products_main.postid', 'left')
						  ->join('blog_category', 'blog_category.categoryid = products_main_category.categoryid', 'left')
						  //->group_by('products_main.postid')
						  ->get('products_main')
						  ->row_array();

		$query['tags'] = $this->db->select('blog_tag.tagid, blog_tag.tagtitle')
							      ->limit(10)
							      ->join('blog_tag', 'blog_tag.tagid = products_main_tag.tagid')
							      ->where('products_main_tag.postid', $postid)
							    //->Offset($start)
							    //->group_by('products_main.postid')
			                    ->get('products_main_tag')
			                    ->result_array();

		$query['comments'] = $this->db->select('blog_comment.*, users.first_name, users.last_name')
							      ->limit(10)
							      ->join('blog_comment', 'blog_comment.commentid = products_main_comment.commentid', 'left')
							      ->where('products_main_comment.postid', $postid)
							      ->join('users', 'blog_comment.author = users.id', 'inner')
							    //->Offset($start)
							    //->group_by('products_main.postid')
			                    ->get('products_main_comment')
			                    ->result_array();

		$query['commentcount'] = $this->db->from('blog_comment')
												->join('products_main_comment', 'blog_comment.commentid = products_main_comment.commentid')
												->where('products_main_comment.postid', $postid)
												->count_all_results();

		//var_dump($query);
												
		return $query;
	}

	function get_blog_cats()
	{
		$query = $this->db->select('*')
						  ->order_by('categoryname', 'asc')
						  ->limit(10)
						  ->get('blog_category')
						  ->result_array();

						  
		return $query;
	}

	function get_blog_tags()
	{
		$query = $this->db->select('*')
						  ->order_by('frequency', 'desc')
						  ->limit(10)
						  ->get('blog_tag')
						  ->result_array();

						  
		return $query;
	}

	function blog_cat_tag_check($key=NULL, $id=NULL )
	{
		$query = $this->db->select('*')
						  //->limit(10)
						  ->where($key.'id', $id)
						  ->get('blog_'.$key)
						  ->num_rows() > '0';

		//if ($query > "0") { return TRUE; } else {return FALSE; }
		return $query;				  
	}

	function post_all_count()
	{
		$query = $this->db->count_all_results('products_main');

		return $query;
	}

	function post_tag_count($id=NULL)
	{
		$query = $this->db->join('products_main_tag', 'products_main_tag.postid = products_main.postid', 'inner')
						  ->where('products_main_tag.tagid', $id)
		                  ->count_all_results('products_main');

		return $query;
	}

	function post_category_count($id=NULL)
	{
		$query = $this->db->join('products_main_category', 'products_main_category.postid = products_main.postid', 'inner')
						  ->where('products_main_category.categoryid', $id)
		                  ->count_all_results('products_main');

		return $query;
	}

	function test()
	{
		return 'AA';
	}

	function project_get_data()
	{
		$query = $this->db->select('*')
						  ->order_by('timedate', 'desc')
						  ->limit(10)
						  ->get('project')
						  ->result_array();

		return $query;
	}

	function project_add_data($data)
	{
		if ($this->db->insert('project', $data))
		{
			return "successful";
		} else 
		{
			return "unsuccessful";
		}
	}

}