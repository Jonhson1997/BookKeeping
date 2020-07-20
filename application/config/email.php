<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| 這隻檔案要自己創，當初CI是沒有的!!
| -------------------------------------------------------------------
*/
//本機使用
if($_SERVER['HTTP_HOST'] == 'localhost'){

  $config['protocol'] = 'smtp';
  $config['mailpath'] = '/usr/sbin/sendmail';
  $config['smtp_host'] = 'msa.hinet.net';

}
//正式上線
else{
  $config['protocol'] = 'mail';
  $config['mailpath'] = '/usr/sbin/sendmail';
  // $config['smtp_host'] = 'msa.hinet.net';
  // $config['smtp_port'] = '25';
}
$config['charset'] = 'utf-8';
$config['mailtype'] = 'html';
$config['wordwrap'] = TRUE;

//phpmailer 專用
// $config['smtp_host'] = 'smtp.gmail.com';
// $config['smtp_user'] = 'yourusername@gmail.com';
// $config['smtp_pass'] = 'yourpassword';
// $config['smtp_port'] = 465;
