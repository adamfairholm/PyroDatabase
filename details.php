<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * PyroDatabase
 *
 * Database Utilities Module for PyroCMS. Allows you
 * to repair/optimize tables, export tables, and run
 * queries from the PyroCMS admin interface.
 * 
 * @author 		Adam Fairholm
 * @link		https://github.com/adamfairholm/PyroDatabase
 */
class Module_Database extends Module {

	public $version = '2.0';

	public function info()
	{
		$info = array(
			'name' => array(
				'en' => 'Database'
			),
			'description' => array(
				'en' => 'Database utilities.'
			),
			'frontend' => false,
			'backend'  => true,
			'menu'	  => 'utilities'
		);

		// Sections
		$info['sections']['database'] = array(
			'name' => 	'pyrodb:database',
			'uri' => 	'admin/database'
		);

		$info['sections']['tables'] = array(
			'name' => 	'pyrodb:optimize_repair',
			'uri' => 	'admin/database/tables'
		);

		$info['sections']['query'] = array(
			'name' => 	'pyrodb:query',
			'uri' => 	'admin/database/query'
		);

		$info['sections']['export'] = array(
			'name' => 	'pyrodb:export',
			'uri' => 	'admin/database/export'
		);

		return $info;
	}

	public function install()
	{
		return true;
	}

	public function uninstall()
	{
		return true;
	}

	public function upgrade( $upgrade_version )
	{
		return true;
	}

	public function help()
	{
		return "No documentation has been added for this module.";
	}

}