<?php
namespace core;
class View
{	
    public $file;
    public $vars = [];

	public function make($file)
	{	
		$this->file = 'view/'.$file.'.html';
		echo  $this;

	}
	public function with($name, $value)
	{
		$this->vars[$name] = $value;
		echo  $this;
	}
	public function __toString()
	{
		include $this->file;
		return "";
	}
}