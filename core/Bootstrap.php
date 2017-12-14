<?php
namespace core;
class Bootstrap
{
	public static function run()
	{	
		session_start();
		self::parseUrl();
	}
	public static function parseUrl()
	{
		
		if(isset($_GET["s"])){
			$info = explode('/', $_GET['s']);
			$class = ucfirst($info[0]);
			$class = '\web\controller\\'.$class;
			$action = $info[1];
			
			echo (new $class)->$action();
		}else{
			$class = '\web\controller\Index';
			$action = 'show';
			echo (new $class)->$action();
		}
	}
}