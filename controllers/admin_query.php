<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * PyroDatabase
 *
 * Query Admin controller - enter queries and
 * see the results.
 * 
 * @author 		Adam Fairholm
 * @link		https://github.com/adamfairholm/PyroDatabase
 */
class Admin_query extends Admin_Controller
{
	protected $section = 'query';

	// --------------------------------------------------------------------------	

	/**
	 * Constructor method
	 *
	 * @access public
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
		
		$this->load->language('pyrodatabase');
	}

	// --------------------------------------------------------------------------	

	/**
	 * Run a Query and display the results
	 *
	 * @access	public
	 * @return 	void
	 */
	public function index()
	{
		$data = array();

		$this->template->append_metadata('<style>#query_window {width: 95%; height: 120px; font-family: "Courier New", Courier, monospace;}</style>');

		$data['query_string'] 		= null;
		$data['mysql_result_error'] = null;
		$this->db->db_debug 		= false;		
		$data['query_run']			= false;
		$data['results'] 			= array();
	
		if ($this->input->post('query') and $this->input->post('query') != '')
		{
			// Perform Query	
			$obj = $this->db->query($this->input->post('query_window'));
				
			$data['query_run'] = true;

			// Save the query string to display it.
			$data['query_string'] = $this->input->post('query_window');
			
			if ( ! $obj)
			{
				$data['mysql_result_error'] = mysql_error();
			}
			else
			{
				$data['results'] = $obj->result_array();
			}
		}			

		$this->template->build('admin/query', $data);	
	}

}