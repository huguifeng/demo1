<?php
namespace web\controller;
use core\View;
use Gregwar\Captcha\CaptchaBuilder;
class Index
{	
	public $file;
	public  function __construct()
	{
		$this->file = new View();
	}
	public function show()
	{
		echo "this is show";
	}
	public function index()
	{
		echo "this is index";
	}
	public function gg()
	{	
		
		return $this->file->make('login')->with('hh', "哈哈");
	}
	public function code()
	{
		header('Content-type: image/jpeg');
		$builder = new CaptchaBuilder;
		$builder->build();
		$_SESSION ['phrase'] = $builder ->getPhrase();
        $builder->output();
	}
}