<?php
class MahasiswaModel extends Model
{
	private $table = "mahasiswa";

	public function getAllData()
	{
		$table = $this->table;
		return $this->runStatement("SELECT * FROM $table");
	}
}
