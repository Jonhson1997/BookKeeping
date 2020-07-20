<?php
// require_once 'tool/MyDBtool.php';
Main::index();

class Main
{
	private static $filepath;
	private static $data;
	private static $all_sum;
	// 包1 + 包2 + 存款 + 錢包 2018-12-17 早上
	private static $start_date ; //若當天已有支出,須從隔天開始計算
	private static $money_card ;
	private static $package_1 ; // 台灣銀行卡
	private static $package_2 ; //悠遊卡
	private static $my_money ;
	private static $cost_money; //從start_date開始的花費
	private static $cost_money_package2; //從start_date開始的花費(悠遊卡)
	private static $this_month_start;
	private static $this_month_end;
	private static $this_month_cost;
	private static $yearArr;
	private static $every_month_start;
	private static $every_month_end;
	public static function index()
	{
		date_default_timezone_set('Asia/Taipei');
		self::init();
		self::$this_month_start = date('Y-m').'-01';
		self::$this_month_end = date('Y-m').'-31';
		self::$yearArr = array();
		self::$every_month_start = array();
		self::$every_month_end = array();
		for($years = intval(date('Y')); $years >= '2018';$years --)
		{
			array_push(self::$yearArr, $years);
			for ($i=12; $i >= 1; $i--)
			{
				array_push(self::$every_month_start, $years.'-'.$i.'-01');
				array_push(self::$every_month_end, $years.'-'.$i.'-31');
			}
		}
		self::body('header');
		self::body('table_header');
		self::body('table');
		self::body('table_footer');
		self::body('status');
		self::body('form_add');
		self::body('form_edit');
		self::body('form_status');
		self::body('footer');
	}
	private static function body($file_name)
	{
		include_once "view/".$file_name.".php";
	}

	private static function get_list($start=0,$end=0)
	{
	    return self::$data[2]['data'];
	}

	private static function get_monthly($start,$end)
	{
		$result = self::get_list();
		$this_month_cost = 0;
		foreach (array_reverse($result) as $key => $value)
		{
			if(strtotime($start) <= strtotime($value['date']) && strtotime($value['date']) <= strtotime($end)) {
		    	$this_month_cost = $this_month_cost + intval($value['food_1']) + intval($value['food_2']) + intval($value['food_3']) + intval($value['item_1']) + intval($value['item_2']) + intval($value['item_3']);
		    }
		}
		return $this_month_cost;
	}

	private static function init()
	{
	    self::$filepath = './cost.json';
	    self::$data = json_decode(file_get_contents(self::$filepath),true);
	    foreach (self::$data[3]['data'] as $key => $value)
	    {
			self::$my_money = $value['cash'];
			self::$package_1 = $value['card_taiwan'];
			self::$package_2 = $value['card_yoyo'];
			self::$money_card = $value['card_money_jd'];
			self::$start_date = $value['start_date'];
	    }
	}
}