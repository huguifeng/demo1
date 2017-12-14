<?php
namespace web\controller;
use core\View;
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
		$this->file->make('login');
	}
}