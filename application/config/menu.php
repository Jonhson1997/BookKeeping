<?php
defined("BASEPATH") OR exit("No direct script access allowed");
include('path.php');
    $unit_Arr = array(
        'header',
        'icon',
        'setting',
        'manager',
        'member',
        'home',
        'banner',
        'news',
        'about',
        'product',
        'recruiting',
        'qa',
        'order',
        'contact',
        'report',
        'download',
    );
    foreach($unit_Arr as $uv)
    {
        $menu_file = @file_get_contents($path_prefix.'menu_'.$uv.'.json');
        if(!empty($menu_file))
        {
            $menu_Arr = json_decode($menu_file,true);
            $menu_json_Arr  = array();
            foreach($menu_Arr as $key => $value)
            {
                foreach($value as $k => $v)
                {
                    $menu_json_Arr[$k] = $v;
                }
            }
            $config['menu'][$uv] = $menu_json_Arr;
        }
    }