<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* Init Path */
$mode = 'public_html';
if($mode != '')
{
    $path_prefix = dirname(getcwd()).'/'.$mode.'/json/';
    $data_path = dirname(getcwd()).'/'.$mode.'/data/';
}
else
{
    $path_prefix = dirname(getcwd()).'/json/';
    $data_path = dirname(getcwd()).'/data/';
}