<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        session_start();
        if(!isset($_SESSION['role']) || empty($_SESSION['role']))
        {
            $_SESSION['role'] = 'Lomo';
        }
        $this->data_path = $this->config->item('data_path');
        $this->cost_name = 'cost.json';
        $this->lomo_name = 'lomo.json';
        $this->gogi_name = 'gogi.json';
    }

    public function index($msg='')
    {
        if(!isset($_GET['date']) || empty($_GET['date']))
        {
            $_SESSION['date'] = date('Y/m/d');
        }
        else
        {
            $_SESSION['date'] = $_GET['date'];
        }
        $arr = $this->get();
        $setting_arr = $this->get_setting('all');
        $lomo_Arr = array();
        $gogi_Arr = array();
        $lomo_sum = 0;
        $gogi_sum = 0;
        foreach($arr as $k => $v)
        {
            if($v['role'] == 'Lomo')
            {
                array_push($lomo_Arr, $v);
                if($v['type'] != '收入類')
                {
                    $lomo_sum += $v['cost'];
                }
            }
            else if($v['role'] == 'Gogi')
            {
                array_push($gogi_Arr, $v);
                if($v['type'] != '收入類')
                {
                    $gogi_sum += $v['cost'];
                }
            }
        }

        $data = array(
            'arr' => $arr,
            'setting_arr' => $setting_arr,
            'lomo_arr' => $lomo_Arr,
            'gogi_arr' => $gogi_Arr,
            'lomo_sum' => $lomo_sum,
            'gogi_sum' => $gogi_sum,
        );
        $content = array(
            'content'  =>  $this->load->view('index',$data,true),
            'msg' => $msg,
        );
        $this->load->view('layout',$content);
    }

    public function add()
    {
        $post = $this->input->post(null,true);
        $arr = $this->get('all');
        $count = count($arr);
        $data = array(
            'id' => (isset($arr[$count-1]))?$arr[$count-1]['id']+1:1,
            'type' => $post['type'],
            'cost' => $post['cost'],
            'memo' => $post['memo'],
            'date' => $post['date'],
            'timestamp' => date('Y/m/d H:i:s'),
            'role' => $_SESSION['role']
        );
        array_push($arr, $data);
        $this->write('add',$arr,$post['date']);
    }

    public function edit()
    {
        $post = $this->input->post(null,true);
        $arr = $this->get('all');
        $count = count($arr);
        $data = array(
            'id' => $post['id'],
            'type' => $post['type'],
            'cost' => $post['cost'],
            'memo' => $post['memo'],
            'date' => $post['date'],
            'timestamp' => date('Y/m/d H:i:s'),
            'role' => $_SESSION['role']
        );
        $index = $this->get('id',$data['id']);
        $arr[$index] = $data;
        $this->write('edit',$arr,$post['date']);
    }

    public function del()
    {
        $post = $this->input->post(null,true);
        $arr = $this->get('all');
        $index = $this->get('id',$post['id']);
        unset($arr[$index]);
        ksort($arr);
        $this->write('del',$arr,$post['date']);
    }

    public function get($mode="",$id="")
    {
        $data = json_decode(file_get_contents($this->data_path.'/'.$this->cost_name),true);
        if($mode == 'all')
        {
            return $data;
        }
        else
        {
            $arr = array();
            foreach($data as $k => $v)
            {
                if($mode=="id"&&$id!="")
                {
                    if($v['id'] == $id)
                    {
                        return $k;
                    }
                }
                else
                {
                    if($v['date'] == $_SESSION['date'])
                    {
                        array_push($arr, $v);
                    }
                }
            }
            return $arr;
        }
    }

    public function get_setting($mode="",$role="",$id="")
    {
        if($mode == 'all')
        {
            $data = array();
            $data['Lomo'] = json_decode(file_get_contents($this->data_path.'/'.$this->lomo_name),true);
            $data['Gogi'] = json_decode(file_get_contents($this->data_path.'/'.$this->gogi_name),true);
            return $data;
        }
        if($role == ""){ return false;}
        $file = $this->getRoleFileName($role);
        $data = json_decode(file_get_contents($this->data_path.'/'.$file),true);
        if($mode == "id" && $id != "")
        {
            $arr = array();
            foreach($data as $k => $v)
            {
                if($v['id'] == $id)
                {
                    return $k;
                }
            }
        }
        else
        {
            return false;
        }
    }

    public function write($mode,$arr,$date)
    {
        if(!is_array($arr) || empty($arr))
        {
            redirect(base_url("home/index/{$mode}_error"));
            exit();
        }
        try {
            $handle = fopen($this->data_path.'/'.$this->cost_name,'w');
            fwrite($handle, json_encode($arr));
            fclose($handle);
        } catch (Error $e) {
            // echo "Error caught: " . $e->getMessage();
            redirect(base_url("home/index/{$mode}_error"));
            exit();
        }
        redirect(base_url('?date='.$date));
        exit();
    }
}
