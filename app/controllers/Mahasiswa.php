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

	// public function edit($id = null) {
	// 	$mahasiswa = null;
	// 	if($id !== null) {
	// 		$mahasiswa = $this->model("MahasiswaModel")->getById($id);
	// 	}


	// }

	public function postAdd()
	{
		$request = $_POST;

		$nama = $request["nama"];
		$jurusan = $request["jurusan"];
		$email = $request["email"];
		$alamat = $request["alamat"];

		$this->model("MahasiswaModel")->addOne($nama, $jurusan, $email, $alamat);

		header("Location:" . constant("BASEURL") . "Mahasiswa/index");
	}
}
