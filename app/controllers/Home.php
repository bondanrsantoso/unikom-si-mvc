<?php

class Home extends Controller
{
	public function index($param1 = "foo", $param2 = "bar")
	{
		$this->view("templates/header");
		$this->view("home/index");
		$this->view("templates/footer");
	}
}
