<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * PyroDatabase
 *
 * Controller for the PyroDatabase module
 * 
 * @author 		Parse19
 * @link		http://parse19.com/pyrodatabase
 * @package 	PyroDatabase
 */
class Admin extends Admin_Controller
{
	protected $section = 'database';

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
	 * Show general table stats
	 *
	 * @access	public
	 */
	public function index()
	{
		// -------------------------------------
		// Get basic info
		// -------------------------------------

		$raw_stats = explode('  ', mysql_stat());

		$data = array();

		$data['stats'] = array();
		
		foreach ($raw_stats as $stat)
		{
			$break = explode(':', $stat);
			
			$data['stats'][trim($break[0])] = 	trim($break[1]);		
		}

		// -------------------------------------
		// Get Processes
		// -------------------------------------
	
		$this->load->helper('number');
	
		$data['processes'] = $this->db->query("SHOW PROCESSLIST")->result();
				
		// -------------------------------------

		$this->template->build('admin/overview', $data);
	}

}