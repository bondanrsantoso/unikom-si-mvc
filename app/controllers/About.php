<?php

class About extends Controller
{
	public function page()
	{
		$this->view("templates/header");
		$this->view("about/index");
		$this->view("templates/footer");
	}
}
