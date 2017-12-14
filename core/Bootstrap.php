<?php
namespace core;
class Bootstrap
{
	public static function run()
	{
		self::parseUrl();
	}
	public static function parseUrl()
	{
		
		if(isset($_GET["s"])){
			$info = explode('/', $_GET['s']);
			$class = ucfirst($info[0]);
			$class = '\web\controller\\'.$class;
			$action = $info[1];
			
			(new $class)->$action();
		}else{
			$class = '\web\controller\Index';
			$action = 'show';
			(new $class)->$action();
		}
	}
}