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



































































































	function blog_view_all()
	{
		$query = $this->db->select('*')
						  ->order_by('create_time', 'desc')
						  ->limit(10)
						  ->join('users', 'blog_post.userid = users.id', 'inner')
						  //->join('blog_post_tag', 'blog_post_tag.postid = blog_post.postid', 'left')
						  ->group_by('blog_post.postid')
						  ->get('blog_post');

						  //var_dump($query->result());
		
		
		
		return $query->result();
	}
	
	function blog_view_all_new($limit=NULL, $start=NULL)
	{
		$query = $this->db->select('blog_post.*, users.first_name, users.last_name, users.ip_address, users.username, users.email, users.company, users.phone')
						  ->order_by('create_time', 'asc')
						  ->limit($limit)
						  ->Offset($start)
						  ->join('users', 'blog_post.userid = users.id', 'inner')
						  ->group_by('blog_post.postid')
		                  ->get('blog_post')
		                  ->result_array();
		foreach ($query as $key => $value) {
			
		$query[$key]['tags'] = $this->db->select('blog_tag.tagid, blog_tag.tagtitle')
							    ->limit(10)
							    ->join('blog_tag', 'blog_tag.tagid = blog_post_tag.tagid')
							    ->where('blog_post_tag.postid', $value['postid'])
							    //->Offset($start)
							    //->group_by('blog_post.postid')
			                  ->get('blog_post_tag')
			                  ->result_array();

		$query[$key]['categories'] = $this->db->select('blog_category.categoryid, blog_category.categoryname')
							    ->limit(10)
							    ->join('blog_category', 'blog_category.categoryid = blog_post_category.categoryid')
							    ->where('blog_post_category.postid', $value['postid'])
							    //->Offset($start)
							    //->group_by('blog_post.postid')
			                  ->get('blog_post_category')
			                  ->result_array();

		$query[$key]['commentcount'] = $this->db->from('blog_comment')
												->join('blog_post_comment', 'blog_comment.commentid = blog_post_comment.commentid')
												->where('blog_post_comment.postid', $value['postid'])
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
		$query = $this->db->select('blog_post.*, users.first_name, users.last_name, users.ip_address, users.username, users.email, users.company, users.phone')
						  ->order_by('create_time', 'asc')
						  ->limit($limit)
						  ->Offset($start)
						  ->join('users', 'blog_post.userid = users.id', 'inner')
						  ->join('blog_post_category', 'blog_post_category.postid = blog_post.postid', 'inner')
						  ->where('blog_post_category.categoryid', $id)
						  ->group_by('blog_post.postid')
		                  ->get('blog_post')
		                  ->result_array();
		foreach ($query as $key => $value) {
			
		$query[$key]['tags'] = $this->db->select('blog_tag.tagid, blog_tag.tagtitle')
							    ->limit(10)
							    ->join('blog_tag', 'blog_tag.tagid = blog_post_tag.tagid')
							    ->where('blog_post_tag.postid', $value['postid'])
							    //->Offset($start)
							    //->group_by('blog_post.postid')
			                  ->get('blog_post_tag')
			                  ->result_array();

		$query[$key]['categories'] = $this->db->select('blog_category.categoryid, blog_category.categoryname')
							    ->limit(10)
							    ->join('blog_category', 'blog_category.categoryid = blog_post_category.categoryid')
							    ->where('blog_post_category.postid', $value['postid'])
							    //->Offset($start)
							    //->group_by('blog_post.postid')
			                  ->get('blog_post_category')
			                  ->result_array();

		$query[$key]['commentcount'] = $this->db->from('blog_comment')
												->join('blog_post_comment', 'blog_comment.commentid = blog_post_comment.commentid')
												->where('blog_post_comment.postid', $value['postid'])
												->count_all_results();

		}
		
		return $query;
	}

	function blog_view_tag($id=NULL, $limit=NULL, $start=NULL) // working
	{
		$query = $this->db->select('blog_post.*, users.first_name, users.last_name, users.ip_address, users.username, users.email, users.company, users.phone')
						  ->order_by('create_time', 'asc')
						  ->limit($limit)
						  ->Offset($start)
						  ->join('users', 'blog_post.userid = users.id', 'inner')
						  ->join('blog_post_tag', 'blog_post_tag.postid = blog_post.postid', 'inner')
						  ->where('blog_post_tag.tagid', $id)
						  ->group_by('blog_post.postid')
		                  ->get('blog_post')
		                  ->result_array();
		foreach ($query as $key => $value) {
			
		$query[$key]['tags'] = $this->db->select('blog_tag.tagid, blog_tag.tagtitle')
							    ->limit(10)
							    ->join('blog_tag', 'blog_tag.tagid = blog_post_tag.tagid')
							    ->where('blog_post_tag.postid', $value['postid'])
							    //->Offset($start)
							    //->group_by('blog_post.postid')
			                  ->get('blog_post_tag')
			                  ->result_array();

		$query[$key]['categories'] = $this->db->select('blog_category.categoryid, blog_category.categoryname')
							    ->limit(10)
							    ->join('blog_category', 'blog_category.categoryid = blog_post_category.categoryid')
							    ->where('blog_post_category.postid', $value['postid'])
							    //->Offset($start)
							    //->group_by('blog_post.postid')
			                  ->get('blog_post_category')
			                  ->result_array();

		$query[$key]['commentcount'] = $this->db->from('blog_comment')
												->join('blog_post_comment', 'blog_comment.commentid = blog_post_comment.commentid')
												->where('blog_post_comment.postid', $value['postid'])
												->count_all_results();

		}
		
		return $query;
	}

	function blog_view_post($postid=NULL)
	{
		$query['post'] = $this->db->select('blog_post_category.*, blog_category.categoryname, blog_post.*, users.id as userid, users.username, users.first_name, users.last_name, users.email')
						  ->order_by('create_time', 'desc')
						  ->where('blog_post.postid', $postid)
						  ->limit(1)
						  ->join('users', 'blog_post.userid = users.id', 'inner')
						  ->join('blog_post_category', 'blog_post_category.postid = blog_post.postid', 'left')
						  ->join('blog_category', 'blog_category.categoryid = blog_post_category.categoryid', 'left')
						  //->group_by('blog_post.postid')
						  ->get('blog_post')
						  ->row_array();

		$query['tags'] = $this->db->select('blog_tag.tagid, blog_tag.tagtitle')
							      ->limit(10)
							      ->join('blog_tag', 'blog_tag.tagid = blog_post_tag.tagid')
							      ->where('blog_post_tag.postid', $postid)
							    //->Offset($start)
							    //->group_by('blog_post.postid')
			                    ->get('blog_post_tag')
			                    ->result_array();

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
		$query = $this->db->count_all_results('blog_post');

		return $query;
	}

	function post_tag_count($id=NULL)
	{
		$query = $this->db->join('blog_post_tag', 'blog_post_tag.postid = blog_post.postid', 'inner')
						  ->where('blog_post_tag.tagid', $id)
		                  ->count_all_results('blog_post');

		return $query;
	}

	function post_category_count($id=NULL)
	{
		$query = $this->db->join('blog_post_category', 'blog_post_category.postid = blog_post.postid', 'inner')
						  ->where('blog_post_category.categoryid', $id)
		                  ->count_all_results('blog_post');

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