<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * PyroDatabase
 *
 * Export SQL Admin controller for the PyroDatabase module
 *
 * @author 		Adam Fairholm
 * @link		https://github.com/adamfairholm/PyroDatabase
 */
class Admin_export extends Admin_Controller
{
	protected $section = 'export';

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
		if($this->input->post('full_export'))
			$this->full();
		if($this->input->post('current_site_export'))
			$this->current_site();
		if ($this->input->post())
			$this->export();

		$data = array();

		$this->load->helper(array('form', 'number'));

		// Dropdown options
		$data['file_formats'] = array('gzip' => 'gzip', 'zip' => 'zip', 'txt' => 'txt');
		$data['true_false'] = array(1 => lang('global:yes'), 0 => lang('global:no'));
		$data['newlines'] = array('n' => '\n', 'r' => '\r', 'r_n' => '\r\n');

		// Get the tables
		$data['tables'] = $this->db->query('SHOW TABLE STATUS')->result();

		$this->template->build('admin/export_options', $data);
	}

	function full()
	{
		$this->export();
	}

	function current_site()
	{
		$tables = $this->db->query('SHOW TABLES LIKE \''.SITE_REF.'_%\'')->result_array();
		foreach ($tables as $row)
		{
			foreach ($row as $table)
			{
				$tables_array[] = $table;
			}
		}

		$this->export($tables_array);
	}

	public function export($tables = array())
	{
		$this->load->dbutil();

			// Filename
		if ( ! $filename = $this->input->post('filename'))
		{
			$filename = 'dbbackup_'.date('Ymd').'.sql';
		}

			// Can't find a way around this.
		switch($this->input->post('newline'))
		{
			case 'n':
			$newline = "\n";
			break;
			case 'r':
			$newline = "\r";
			break;
			case 'r_n':
			$newline = "\r\n";
			break;
			default:
			$newline = "\n";
		}

		$backup_prefs = array(
			'tables'      => $tables,
			'format'      => $this->input->post('format'),
			'filename'	  => $filename,
			'add_drop'    => $this->input->post('add_drop'),
			'add_insert'  => $this->input->post('add_insert'),
			'newline'     => $newline
			);

		if($backup_prefs['add_drop'])
			$backup_prefs['add_drop'] = TRUE;
		if($backup_prefs['add_insert'])
			$backup_prefs['add_insert'] = TRUE;

		$this->load->helper('download');
		force_download($filename.'.'.$this->input->post('format'), $this->dbutil->backup($backup_prefs));
	}

}