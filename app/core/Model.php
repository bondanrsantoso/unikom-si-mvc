<?php
abstract class Model
{
	private $table;

	function __construct()
	{
		// This has to be refactored to parent Model Class in a real MVC Framework
		// $this->mysqlConnection = mysqli_connect(constant("MYSQL_HOST"), constant("MYSQL_USERNAME"), constant("MYSQL_PASSWORD"), constant("MYSQL_DB"), constant("MYSQL_PORT"));
		$dbURI = "mysql:host=" . constant("MYSQL_HOST") . ";dbname=" . constant("MYSQL_DB");
		$this->db = new PDO($dbURI, "root", "");
	}
}
