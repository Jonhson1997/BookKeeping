<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        session_start();
        if(!isset($_SESSION['role']) || empty($_SESSION['role']))
        {
            $_SESSION['role'] = 'Lomo';
        }
        $this->data_path = $this->config->item('data_path');
        $this->lomo_name = 'lomo.json';
        $this->gogi_name = 'gogi.json';
    }

    public function index($msg='')
    {
        $file = $this->getRoleFileName($_SESSION['role']);
        $arr = $this->get_setting('all',$file);
        $data = array(
            'arr' => $arr,
        );
        $content = array(
            'content'  =>  $this->load->view('setting',$data,true),
            'msg' => $msg,
        );
        $this->load->view('layout',$content);
    }

    public function changeRole()
    {
        $post = $this->input->post(null,true);
        $_SESSION['role'] = $post['role'];
        echo json_encode($post);
        return true;
    }

    public function add()
    {
        $post = $this->input->post(null,true);
        $arr = $this->get_setting('all');
        $count = count($arr[$_SESSION['role']]);
        $data = array(
            'id' => (isset($arr[$_SESSION['role']][$count-1]))?$arr[$_SESSION['role']][$count-1]['id']+1:1,
            'name' => $post['name'],
            'cost' => $post['cost'],
            'date' => $_SESSION['date'],
            'timestamp' => date('Y/m/d H:i:s'),
            'role' => $_SESSION['role']
        );
        array_push($arr[$_SESSION['role']], $data);
        $this->write('add',$_SESSION['role'],$arr);

    }

    public function edit()
    {
        $post = $this->input->post(null,true);
        $arr = $this->get_setting('all');
        $count = count($arr[$_SESSION['role']]);
        $data = array(
            'id' => $post['id'],
            'name' => $post['name'],
            'cost' => $post['cost'],
            'date' => $_SESSION['date'],
            'timestamp' => date('Y/m/d H:i:s'),
            'role' => $_SESSION['role']
        );
        $index = $this->get_setting('id',$_SESSION['role'],$data['id']);
        $arr[$_SESSION['role']][$index] = $data;
        $this->write('edit',$_SESSION['role'],$arr);
    }

    public function del()
    {
        $post = $this->input->post(null,true);
        $arr = $this->get_setting('all');
        $index = $this->get_setting('id',$_SESSION['role'],$post['id']);
        unset($arr[$_SESSION['role']][$index]);
        ksort($arr[$_SESSION['role']]);
        $this->write('del',$_SESSION['role'],$arr);
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
    public function write($mode,$role,$arr)
    {
        if(!is_array($arr) || empty($arr))
        {
            redirect(base_url("setting/index/{$mode}_error"));
            exit();
        }
        try {
            $file = $this->getRoleFileName($role);
            $handle = fopen($this->data_path.'/'.$file,'w');
            fwrite($handle, json_encode($arr[$role]));
            fclose($handle);
        } catch (Error $e) {
            // echo "Error caught: " . $e->getMessage();
            redirect(base_url("setting/index/{$mode}_error"));
            exit();
        }
        redirect(base_url('setting'));
        exit();
    }

    public function getRoleFileName($role)
    {
        switch ($role)
        {
            case 'Lomo':
                return $this->lomo_name;
                break;
            case 'Gogi':
                return $this->gogi_name;
                break;
        }
    }
}
