<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Ion Auth Model
*
* Version: 2.5.2
*
* Author:  Ben Edmunds
* 		   ben.edmunds@gmail.com
*	  	   @benedmunds
*
* Added Awesomeness: Phil Sturgeon
*
* Location: http://github.com/benedmunds/CodeIgniter-Ion-Auth
*
* Created:  10.01.2009
*
* Last Change: 3.22.13
*
* Changelog:
* * 3-22-13 - Additional entropy added - 52aa456eef8b60ad6754b31fbdcc77bb
*
* Description:  Modified auth system based on redux_auth with extensive customization.  This is basically what Redux Auth 2 should be.
* Original Author name has been kept but that does not mean that the method has not been modified.
*
* Requirements: PHP5 or above
*
*/

class Yapps_model extends CI_Model
{
	/**
	 * Holds an array of tables used
	 *
	 * @var array
	 **/
	public $tables = array();

	/**
	 * activation code
	 *
	 * @var string
	 **/
	public $activation_code;

	/**
	 * forgotten password key
	 *
	 * @var string
	 **/
	public $forgotten_password_code;

	/**
	 * new password
	 *
	 * @var string
	 **/
	public $new_password;

	/**
	 * Identity
	 *
	 * @var string
	 **/
	public $identity;

	/**
	 * Where
	 *
	 * @var array
	 **/
	public $_ion_where = array();

	/**
	 * Select
	 *
	 * @var array
	 **/
	public $_ion_select = array();

	/**
	 * Like
	 *
	 * @var array
	 **/
	public $_ion_like = array();

	/**
	 * Limit
	 *
	 * @var string
	 **/
	public $_ion_limit = NULL;

	/**
	 * Offset
	 *
	 * @var string
	 **/
	public $_ion_offset = NULL;

	/**
	 * Order By
	 *
	 * @var string
	 **/
	public $_ion_order_by = NULL;

	/**
	 * Order
	 *
	 * @var string
	 **/
	public $_ion_order = NULL;

	/**
	 * Hooks
	 *
	 * @var object
	 **/
	protected $_ion_hooks;

	/**
	 * Response
	 *
	 * @var string
	 **/
	protected $response = NULL;

	/**
	 * message (uses lang file)
	 *
	 * @var string
	 **/
	protected $messages;

	protected $sms = array();

	/**
	 * error message (uses lang file)
	 *
	 * @var string
	 **/
	protected $errors;

	/**
	 * error start delimiter
	 *
	 * @var string
	 **/
	protected $error_start_delimiter;

	/**
	 * error end delimiter
	 *
	 * @var string
	 **/
	protected $error_end_delimiter;

	/**
	 * caching of users and their groups
	 *
	 * @var array
	 **/
	public $_cache_user_in_group = array();

	/**
	 * caching of groups
	 *
	 * @var array
	 **/
	protected $_cache_groups = array();

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->config('ion_auth', TRUE);
		$this->load->helper('cookie');
		$this->load->helper('date');
		$this->lang->load('ion_auth');

		// initialize db tables data
		$this->tables  = $this->config->item('tables', 'ion_auth');

		//initialize data
		$this->identity_column = $this->config->item('identity', 'ion_auth');
		$this->store_salt      = $this->config->item('store_salt', 'ion_auth');
		$this->salt_length     = $this->config->item('salt_length', 'ion_auth');
		$this->join			   = $this->config->item('join', 'ion_auth');


		// initialize hash method options (Bcrypt)
		$this->hash_method = $this->config->item('hash_method', 'ion_auth');
		$this->default_rounds = $this->config->item('default_rounds', 'ion_auth');
		$this->random_rounds = $this->config->item('random_rounds', 'ion_auth');
		$this->min_rounds = $this->config->item('min_rounds', 'ion_auth');
		$this->max_rounds = $this->config->item('max_rounds', 'ion_auth');


		// initialize messages and error
		$this->messages    = array();
		$this->errors      = array();
		$delimiters_source = $this->config->item('delimiters_source', 'ion_auth');

		// load the error delimeters either from the config file or use what's been supplied to form validation
		if ($delimiters_source === 'form_validation')
		{
			// load in delimiters from form_validation
			// to keep this simple we'll load the value using reflection since these properties are protected
			$this->load->library('form_validation');
			$form_validation_class = new ReflectionClass("CI_Form_validation");

			$error_prefix = $form_validation_class->getProperty("_error_prefix");
			$error_prefix->setAccessible(TRUE);
			$this->error_start_delimiter = $error_prefix->getValue($this->form_validation);
			$this->message_start_delimiter = $this->error_start_delimiter;

			$error_suffix = $form_validation_class->getProperty("_error_suffix");
			$error_suffix->setAccessible(TRUE);
			$this->error_end_delimiter = $error_suffix->getValue($this->form_validation);
			$this->message_end_delimiter = $this->error_end_delimiter;
		}
		else
		{
			// use delimiters from config
			$this->message_start_delimiter = $this->config->item('message_start_delimiter', 'ion_auth');
			$this->message_end_delimiter   = $this->config->item('message_end_delimiter', 'ion_auth');
			$this->error_start_delimiter   = $this->config->item('error_start_delimiter', 'ion_auth');
			$this->error_end_delimiter     = $this->config->item('error_end_delimiter', 'ion_auth');
		}


		// initialize our hooks object
		$this->_ion_hooks = new stdClass;

		// load the bcrypt class if needed
		if ($this->hash_method == 'bcrypt') {
			if ($this->random_rounds)
			{
				$rand = rand($this->min_rounds,$this->max_rounds);
				$params = array('rounds' => $rand);
			}
			else
			{
				$params = array('rounds' => $this->default_rounds);
			}

			$params['salt_prefix'] = $this->config->item('salt_prefix', 'ion_auth');
			$this->load->library('bcrypt',$params);
		}

		//$this->trigger_events('model_constructor');
	}

	/**
	 * Misc functions
	 *
	 * Hash password : Hashes the password to be stored in the database.
	 * Hash password db : This function takes a password and validates it
	 * against an entry in the users table.
	 * Salt : Generates a random salt value.
	 *
	 * @author Mathew
	 */

	/**
	 * Hashes the password to be stored in the database.
	 *
	 * @return void
	 * @author Mathew
	 **/
	

	public function client_passport_check($passport = NULL)
	{
		
		if (empty($passport))
		{
			return FALSE; die;
		}

		return $this->db->where('passportnoclient', $passport)
						->from('clients')
		                ->count_all_results() > 0;

	}

	///////////////   Clients control starts from here .........

	public function client_count() {
        return $this->db->count_all("clients");
    }

	public function client_add($agent_name, $passportnoclient, $filenumber, $additional_data)  // add client
	{
		$client_data = array(
			'passportnoclient'  => $passportnoclient,
			'filenumber'    => $filenumber
		);

		$data = array_merge($additional_data, $client_data);

		//var_dump($data);

		if ($this->db->insert('clients', $data))
		{
			$this->sms['msg'] = "Client added Successfully";
			$this->sms['error'] = "No Error";
			$this->set_error('Client added Successfully');
			return TRUE;
		} else 
		{
			//$this->sms['msg'] = "Client added UnSuccessfully";
			//$this->sms['error'] = "Error Occured";
			$this->set_error('Client added UnSuccessfully');
			return FALSE;
		}
		
		
		
	}

	public function client_update($clntid) 
	{

	}

	public function client_delete($clntid) 
	{

	}

	public function client_view($limit, $start) // single or all client
	{
		$query = $this->db->select('*')
						  ->order_by('clientid', 'desc')
						  ->limit($limit)
						  ->Offset($start)
		                  ->get('clients');

		
		//var_dump($query->result());
		
		return $query->result();
	}

////////////  Agents

	public function agent_view($clntid) 
	{

	}

	public function agent_add($clntid) 
	{

	}

	public function agent_edit($clntid) 
	{

	}


//////////// Payments

	public function payment_add($paydata) 
	{
		

		

		//var_dump($data);

		if ($this->db->insert('payments', $paydata))
		{
			$this->sms['msg'] = "Payment added Successfully";
			$this->sms['error'] = "No Error";
			$this->set_error('Payment added Successfully');
			return TRUE;
		} else 
		{
			//$this->sms['msg'] = "Client added UnSuccessfully";
			//$this->sms['error'] = "Error Occured";
			$this->set_error('Payment added UnSuccessfully');
			return FALSE;
		}


	}

	public function payment_view($clntid) 
	{

	}

	public function payment_edit($clntid) 
	{

	}

	public function payment_delete($clntid) 
	{

	}

///////////////// Common & Others ..........

	public function search($query_key) // through passport no or client id or all clients under an agent
	{

	}

	public function set_sms($sms)
	{
		$this->sms = $sms;
		echo $sms;

		return $this->sms;
	}

	public function get_sms()
	{
				
		$sms = $this->sms;
		

		return $sms;
	}

	public function set_error($error)
	{
		$this->errors[] = $error;

		return $error;
	}

	/**
	 * errors
	 *
	 * Get the error message
	 *
	 * @return void
	 * @author Ben Edmunds
	 **/
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

	public function get_agent_name()
	{
		$query = $this->db->select('firstname, lastname' )
						  ->order_by('agentid', 'asc')
						  ->get('agents');

		return $query->result();
	}

	public function test_aa($value_key = NULL) // single or all client
	{
		$query = $this->db->select('clients.firstname as ClientsFirstName, agents.lastname as AgentsLastName ' )
						  ->order_by('clientid', 'desc')
						  ->limit(10)
						  ->Offset(0)
						  ->join('agents', 'agents.agentid = clients.agentid')
		                  ->get('clients');

		
		//var_dump($query->result());
		
		return $query->result();
	}




}