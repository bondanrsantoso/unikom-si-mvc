<?php

// namespace App;

class App
{
	protected $controller = "Home";
	protected $method = "index";
	protected $params = [];

	public function __construct()
	{
		// Lihat method parseURL di bawah
		$url = $this->parseURL();

		// var_dump($url);
		if (file_exists("../app/controllers/" . $url[0] . ".php")) {
			// Kalau file yang ada di $url[0] ada di folder /app/controllers
			$this->controller = $url[0];
			// Hapus nilai pertama (ke-0) yang ada di array $url
			unset($url[0]);
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
			// var_dump($url);
		}
		call_user_func_array([$this->controller, $this->method], $this->params);
	}

	public function parseURL()
	{
		/**
		 * Method ini mecah URL internal yang ada isinya controller sama parameter
		 * Contoh URL: /public/foo/bar/baz/
		 * Pada kasus ini, untuk penyederhanaan konsep, foo/bar/baz akan kita pangil sebagai URL internal
		 * Nilai kembali (return) dari method ini adalah ['foo', 'bar', 'baz']
		 * 
		 * @example
		 * URL: /public/Home/index
		 * Internal URL: Home/Index
		 * $url =  parseUrl()
		 * hasilnya $url = ['Home', 'index'];
		 */

		if (isset($_GET["url"])) {
			$url = $_GET["url"];
			$url = rtrim($url, "/");
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode("/", $url);
			return $url;
		}
	}
}
