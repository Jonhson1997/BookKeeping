<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('path.php');
/* Routes */
$menu_file = @file_get_contents($path_prefix.'routes.json');
if(!empty($menu_file))
{
    $menu_Arr = json_decode($menu_file,true);
    $menu_routes_Arr  = array();
    foreach($menu_Arr as $key => $value)
    {
      $menu_routes_Arr[$key] = $value;
    }
}
/* Routes End*/

//前台
$route['default_controller'] = $menu_routes_Arr['default_controller'];
//後台
$route[$menu_routes_Arr['GET']]['GET'] =$menu_routes_Arr['GET'].'/login';
//404導向
$route['404_override'] = $menu_routes_Arr['404_override'];
$route['translate_uri_dashes'] = FALSE;
