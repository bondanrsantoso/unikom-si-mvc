<?php

class DosenModel extends Model
{
	private $table = "Dosen";

	public function getAllData()
	{
		$table = $this->table;
		$stmt = $this->db->prepare("SELECT * FROM $table");
		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}
