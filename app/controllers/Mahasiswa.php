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

	public function detail($id)
	{
		$mahasiswa = $this->model("MahasiswaModel")->getById($id);
		$this->view("templates/header");
		$this->view("mahasiswa/detail", compact("mahasiswa"));
		$this->view("templates/footer");
	}
}
