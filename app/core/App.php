<?php

// namespace App;

class App
{
	protected $controller = "Home";
	protected $method = "index";
	protected $params = [];

	public function __construct()
	{
		// echo "App is instantiated";
		$url = $this->parseURL();
		// var_dump($url);
		if (file_exists("../app/controllers/" . $url[0] . ".php")) {
			$this->controller = $url[0];
			unset($url[0]);
			// var_dump($url);
		}

		require_once "../app/controllers/" . $this->controller . ".php";
		$this->controller = new $this->controller;

		if (isset($url[1])) {
			if (method_exists($this->controller, $url[1])) {
				$this->method = $url[1];
				unset($url[1]);
			}
		}

		if (!empty($url)) {
			$this->params = $url;
			var_dump($url);
		}
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
