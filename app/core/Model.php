<?php
abstract class Model
{
	private $table;
	private $host = MYSQL_HOST;
	private $username = MYSQL_USERNAME;
	private $password = MYSQL_PASSWORD;
	private $dbName = MYSQL_DB;

	function __construct()
	{
		// This has to be refactored to parent Model Class in a real MVC Framework
		// $this->mysqlConnection = mysqli_connect(constant("MYSQL_HOST"), constant("MYSQL_USERNAME"), constant("MYSQL_PASSWORD"), constant("MYSQL_DB"), constant("MYSQL_PORT"));
		$dbURI = "mysql:host=" . $this->host . ";dbname=" . $this->dbName;

		$opt = [
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		];
		$this->db = new PDO($dbURI, $this->username, $this->password, $opt);
	}

	function runStatement(string $query)
	{
		$table = $this->table;
		$stmt = $this->db->prepare($query);
		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}
