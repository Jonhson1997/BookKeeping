<?php
Edit_status::index();
class Edit_status
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
		self::$data[3]['data'][0] = self::$post;
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