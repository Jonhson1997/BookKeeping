<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stat extends CI_Controller {
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
        $types = ['食物類','飲料類','交通類','日常用品類','衣物類','雜項類','收入類'];
        $data = array(
            'types'=> $types,
        );
        $content = array(
            'content'  =>  $this->load->view('stat',$data,true),
            'msg' => $msg,
        );
        $this->load->view('layout',$content);
    }

    public function getAjaxData()
    {
        $post = $this->input->post(null,true);
        $arr = $this->get("all");
        $search_arr = array();
        $filter_arr = array();
        $cost_arr = array();
        $types = ['食物類','飲料類','交通類','日常用品類','衣物類','雜項類','收入類'];
        foreach ($types as $k => $v)
        {
            $filter_arr[$v] = array(
                'Lomo' => array(),
                'Gogi' => array(),
                'All' => array(),
            );
            $cost_arr[$v] = array(
                'Lomo' => 0,
                'Gogi' => 0,
                'All' => 0,
            );
        }
        if(empty($post['date_e']))
        {
            $search_arr = $arr;
        }
        else
        {
            foreach($arr as $k => $v)
            {
                if($post['date_s'] <= $v['date'] && $v['date'] <= $post['date_e'])
                {
                    array_push($search_arr, $v);
                }
            }
        }

        foreach($search_arr as $key => $value)
        {
            foreach($types as $k => $v)
            {
                if($value['type'] == $v)
                {
                    if($value['role'] == 'Lomo')
                    {
                        array_push($filter_arr[$v]['Lomo'], $value);
                        $cost_arr[$v]['Lomo'] += $value['cost'];
                    }
                    else if($value['role'] == 'Gogi')
                    {
                        array_push($filter_arr[$v]['Gogi'], $value);
                        $cost_arr[$v]['Gogi'] += $value['cost'];
                    }
                    array_push($filter_arr[$v]['All'], $value);
                    $cost_arr[$v]['All'] += $value['cost'];
                    // array_push($filter_arr[$v], $value);
                    // $cost_arr[$v] += $value['cost'];
                }
            }
        }
        $result_arr = array(
            'types' => $types,
            'filter_arr' => $filter_arr,
            'cost_arr' => $cost_arr
        );
        echo json_encode($result_arr);
        return true;
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

    public function test()
    {
        $post['date_s'] = '2020/07/07';
        $post['date_e'] = '2020/07/08';
        $arr = $this->get("all");
        $search_arr = array();
        foreach($arr as $k => $v)
        {
            if($post['date_s'] <= $v['date'] && $v['date'] <= $post['date_e'])
            {
                array_push($search_arr, $v);
            }
        }
        $filter_arr = array();
        $cost_arr = array();
        $types = ['食物類','飲料類','交通類','日常用品類','衣物類','雜項類','收入類'];
        foreach ($types as $k => $v)
        {
            $filter_arr[$v] = array(
                'Lomo' => array(),
                'Gogi' => array(),
                'All' => array(),
            );
            $cost_arr[$v] = array(
                'Lomo' => 0,
                'Gogi' => 0,
                'All' => 0,
            );
        }
        foreach($search_arr as $key => $value)
        {
            foreach($types as $k => $v)
            {
                if($value['type'] == $v)
                {
                    if($value['role'] == 'Lomo')
                    {
                        array_push($filter_arr[$v]['Lomo'], $value);
                        $cost_arr[$v]['Lomo'] += $value['cost'];
                    }
                    else if($value['role'] == 'Gogi')
                    {
                        array_push($filter_arr[$v]['Gogi'], $value);
                        $cost_arr[$v]['Gogi'] += $value['cost'];
                    }
                    array_push($filter_arr[$v]['All'], $value);
                    $cost_arr[$v]['All'] += $value['cost'];
                }
            }
        }
        $result_arr = array(
            'types' => $types,
            'filter_arr' => $filter_arr,
            'cost_arr' => $cost_arr
        );
        echo "<pre>";
        var_dump($result_arr['cost_arr']);
        echo "<hr>";
        exit();
    }
}
