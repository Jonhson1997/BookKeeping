<?php
Get::index();
class Get
{
	private static $filepath;
	private static $data;
	public static function index()
	{
	    self::$filepath = './cost.json';
	    self::$data = json_decode(file_get_contents(self::$filepath),true);
		if(empty($_POST['date'])) {
			return false;
		}
		foreach(array_reverse(self::$data[2]['data']) as $key => $value)
		{
			if($value['date'] == $_POST['date'])
			{
				echo json_encode($value);
				return true;
			}
		}
		echo json_encode("nodata");
		return false;
	}
}