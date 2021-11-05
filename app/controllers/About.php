<?php

class About extends Controller
{
	public function page($param1 = "", $param2 = "")
	{
		$title = "Foo bar";
		$this->view("templates/header");
		$this->view("about/index", compact("param1", "param2", "title"));
		$this->view("templates/footer");
	}
}
