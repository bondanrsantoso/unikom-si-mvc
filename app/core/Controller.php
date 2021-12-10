<?php

// namespace App;

class Controller
{
	public function view($view, $data = [])
	{
		require_once "../app/views/${view}.php";
	}

	public function model(string $modelName)
	{
		require_once "../app/models/${modelName}.php";

		return new $modelName;
	}
}
