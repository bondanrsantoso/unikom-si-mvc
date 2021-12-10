<?php

class Home extends Controller
{
	public function index($param1 = "foo", $param2 = "bar")
	{
		// Assume model is exists
		$name = $this->model("User")->getAllData();
		$this->view("templates/header");
		$this->view("home/index", compact("name"));
		$this->view("templates/footer");
	}
}
