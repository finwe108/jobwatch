<?php
require_once(LIB_PATH.DS.'config.php');
/**
* 
*/
class Database
{
	private $connection;
	public $last_query;
	private $magic_quotes_active;
	private $real_escape_string_exists;
	
	function __construct()
	{
		$this->open_connection();
		$this->magic_quotes_active = get_magic_quotes_gpc();
		$this->real_escape_string_exists = function_exists("mysqli_real_escape_string");
	}
	public function open_connection()
	{
		$this->connection = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
		if (!$this->connection) {
			die("Database connection failed" . mysqli_error());
		}
	}
	public function close_connection()
	{
		if (isset($this->connection)) {
			$this->connection->close();
			unset($this->connection);
		}
	}
	public function query($sql)
	{
		$this->last_query = $sql;
		$result = $this->connection->query($sql);
		$this->confirm_query($result);
		return $result;
	}
	public function escape_value($value)
	{
		if ($this->real_escape_string_exists) {
			if ($this->magic_quotes_active) {
				$value = stripslashes($value);
			}
			$value = $this->connection->real_escape_string($value);
		}else{
			if (!$this->magic_quotes_active) {
				$value = addslashes($value);
			}
		}
		return $value;
	}
	// In case na gagamit ng ibang db aside from mysql
	// dito magtweak
	public function fetch_array($result_set)
	{
		return mysqli_fetch_array($result_set);
	}
	public function num_rows($result_set)
	{
		return mysqli_num_rows($result_set);
	}
	public function insert_id()
	{
		return mysqli_insert_id($this->connection);
	}
	public function affected_rows()
	{
		return $this->connection->affected_rows;
	}
	public function confirm_query($result)
	{
		if (!$result) {
			$output = "Database query failed: " .mysqli_error($this->connection) . "<br><br>";
			$output .= "Last SQL query: " . $this->last_query;
			die($output);
		}
	}
}
$database = new Database();
$db =& $database;
?>