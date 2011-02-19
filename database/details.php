<?php defined('BASEPATH') or exit('No direct script access allowed');

class Module_Database extends Module {

	public $version = '1.1';

	public function info()
	{
		return array(
			'name' => array(
				'en' => 'Database'
			),
			'description' => array(
				'en' => 'Database utilities.'
			),
			'frontend' => FALSE,
			'backend'  => TRUE,
			'menu'	  => 'utilities'
		);
	}

	public function install()
	{
		return TRUE;
	}

	public function uninstall()
	{
		return FALSE;
	}

	public function upgrade( $upgrade_version )
	{
		return TRUE;
	}

	public function help()
	{
		return "No documentation has been added for this module.";
	}
}
/* End of file details.php */