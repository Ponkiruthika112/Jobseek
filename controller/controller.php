<?php
include_once"model/model.php";
class Controller
{
	public $model;
	public function __construct()
	{
		$this->model=new Model();
		
	}
	public function call()
	{
		$this->model->invoke();
	}
}
?>
