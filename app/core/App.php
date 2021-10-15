<?php

// namespace App;

class App
{
	// TODO: Implement App stuff here
	public function __construct()
	{
		// echo "App is instantiated";
		$url = $this->parseURL();
		var_dump($url);
	}

	public function parseURL()
	{
		if (isset($_GET["url"])) {
			$url = $_GET["url"];
			$url = rtrim($url, "/");
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode("/", $url);
			return $url;
		}
	}
}
