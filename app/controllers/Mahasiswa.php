<?php

class Mahasiswa extends Controller
{
	public function index()
	{
		$allMahasiswa = $this->model("MahasiswaModel")->getAllData();
		$this->view("templates/header");
		$this->view("mahasiswa/index", compact("allMahasiswa"));
		$this->view("templates/footer");
	}
}
