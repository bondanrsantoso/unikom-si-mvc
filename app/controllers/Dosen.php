<?php
class Dosen extends Controller
{
	public function index()
	{
		$dosen = $this->model("DosenModel");
		$allDosen = $dosen->getAllData();

		$this->view("templates/header");
		$this->view("dosen/index", compact("allDosen"));
		$this->view("templates/footer");
	}
}
