<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

// Admin
$route['database/admin/tables(/:any)?']		= 'admin_tables$1';
$route['database/admin/query(/:any)?']		= 'admin_query$1';
$route['database/admin/export(/:any)?']		= 'admin_export$1';