<?php
Add::index();
class Add
{
	private static $filepath;
	private static $data;
	private static $post;
	public static function index()
	{
	    self::$filepath = './cost.json';
	    self::$data = json_decode(file_get_contents(self::$filepath),true);
		self::$post = $_POST;
		if(!self::$post['passwd'] == 'johnson')
		{
			self::rediect();
		}
		unset(self::$post['passwd']);
		$tmp['id'] = array_reverse(self::$data[2]['data'])[0]['id']+1;
		foreach(self::$post as $k => $v)
		{
			$tmp[$k] = $v;
		}
		self::$post = $tmp;
		self::$post['sum'] = intval(self::$post['food_1']) + intval(self::$post['food_2']) + intval(self::$post['food_3']) + intval(self::$post['item_1']) + intval(self::$post['item_2']) + intval(self::$post['item_3']);
		self::$data[2]['data'][count(self::$data[2]['data'])] = self::$post;
		try {
			$handle = fopen(self::$filepath,'w');
			fwrite($handle, json_encode(self::$data));
			fclose($handle);
		} catch (Error $e) {
		    echo "Error caught: " . $e->getMessage();
			exit();
		}
	    self::rediect();
	}

	private static function rediect()
	{
		header("Location: ./index.php");
		exit();
	}
}