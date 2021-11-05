<?php

class Home extends Controller
{
	public function index($param1 = "foo", $param2 = "bar")
	{
		$view = "home/index";
		return $this->view($view);
	}
}
