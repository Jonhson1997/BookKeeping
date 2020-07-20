<?php defined('BASEPATH') OR exit('No direct script access allowed');
include('path.php');
/* Database */
$menu_file = @file_get_contents($path_prefix.'database.json');
if(!empty($menu_file))
{
    $menu_Arr = json_decode($menu_file,true);
    $menu_database_Arr  = array();
    foreach($menu_Arr as $key => $value)
    {
      $menu_database_Arr[$key] = $value;
    }
}
/* Database End*/
$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'dbdriver' => 'mysqli',
	'pconnect' => FALSE,
	'cache_on' => FALSE,
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_unicode_ci',
	'encrypt'  => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'dbprefix' => '',
	'failover' => array(),
	'save_queries' => TRUE
);

$db['default']['username'] = $menu_database_Arr['username'];
$db['default']['password'] = $menu_database_Arr['password'];
$db['default']['database'] = $menu_database_Arr['database'];
$db['default']['db_debug'] = (ENVIRONMENT !== 'development');

?>
