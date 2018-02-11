<?php
require_once(LIB_PATH.DS.'database.php');
/**
* This is a child class of Class DatabaseObject
* It involves methods relating to application user
*/
class User extends DatabaseObject
{
	protected static $table_name="users";
	protected static $db_fields = array('id', 'uname', 'pword', 'fname', 'lname', 'email','role');
	public $id;
	public $uname;
	public $pword;
	public $fname;
	public $lname;
	public $email;
	public $role;

	public function fullname()
		{
			if (isset($this->fname) && isset($this->lname)) {
				return $this->fname . " " . $this->lname;
			}else{
				return "";
			}
		}	
	public static function authenticate($username="", $password="")
	{
		global $database;
		$username = $database->escape_value($username);
		$password = $database->escape_value($password);
		$sql = "SELECT * FROM users";
		$sql .= " WHERE uname = '{$username}' ";
		$sql .= "AND pword = '{$password}' ";
		$sql .= "LIMIT 1";
		$result_array = self::find_by_sql($sql);
		return !empty($result_array) ? array_shift($result_array) : false;
	}
	public static function verify_user($username="", $password="")
	{
		global $database;
		$user = self::authenticate($username, $password);
		$sql = "SELECT * FROM users";
		$sql .= " WHERE uname = '{$username}' ";
		$sql .= "AND pword = '{$password}' ";
		$sql .= "LIMIT 1";
		$result_array = self::find_by_sql($sql);
		return !empty($result_array) ? array_shift($result_array) : false;
	}
	public static function no_edit($user_type)
	{
		return ($user_type == "Administrator") ? " disabled" : "";
	}

	public static function of_user_type($id=0){
		global $database;
		$role = self::find_by_sql("SELECT role FROM ".self::$table_name." WHERE id=".$database->escape_value($id)." LIMIT 1");
		return !empty($role) ? $role : false;
	}
	
}
?>