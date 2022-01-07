<?php
class MahasiswaModel extends Model
{
	private $table = "mahasiswa";

	public function getAllData()
	{
		$table = $this->table;
		$this->prepareQuery("SELECT * FROM $table");
		return $this->fetch();
	}
}
