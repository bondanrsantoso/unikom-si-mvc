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

	public function getById(int $id)
	{
		$table = $this->table;
		$this->prepareQuery("SELECT * FROM $table WHERE id = ?");
		$this->bind(1, $id, PDO::PARAM_INT);

		return $this->fetchOne();
	}
}
