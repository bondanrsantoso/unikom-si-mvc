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

	public function addOne(string $nama, string $jurusan, string $email, string $alamat)
	{
		$table = $this->table;
		$this->prepareQuery("INSERT INTO $table (nama, jurusan, email, alamat) VALUES (?, ?, ?, ?)");

		$values = [$nama, $jurusan, $email, $alamat];

		$i = 1;
		foreach ($values as $value) {
			$this->bind($i++, $value);
		}

		$this->execute();
	}
}
