<?php
abstract class Model
{
	private $table;
	private $host = MYSQL_HOST;
	private $username = MYSQL_USERNAME;
	private $password = MYSQL_PASSWORD;
	private $dbName = MYSQL_DB;

	private $stmt;

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

	function prepareQuery(string $query)
	{
		$this->stmt = $this->db->prepare($query);
	}

	public function bind($param, $value, $type = null)
	{
		if (is_null($type)) {
			switch (true) {
				case is_int($value):
					$type = PDO::PARAM_INT;
					break;
				case is_bool($value):
					$type = PDO::PARAM_BOOL;
					break;
				case is_null($value):
					$type = PDO::PARAM_NULL;
					break;
				default:
					$type = PDO::PARAM_STR;
			}
		}
		$this->stmt->bindValue($param, $value, $type);
	}

	public function fetch()
	{
		$this->stmt->execute();

		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function execute()
	{
		$this->stmt->execute();
	}

	public function fetchOne()
	{
		$this->stmt->execute();

		return $this->stmt->fetch(PDO::FETCH_ASSOC);
	}
}
