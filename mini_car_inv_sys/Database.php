<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "mini_car_inv_man_sys");

class Database
{
	// our mysqli object instance
	public $mysqli = null;

	// Class constructor override
	public function __construct() {
		$this->mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
		if($this->mysqli->connect_errno) {
			echo "Error MySQLi: ("&nbsp. $this->mysqli->connect_errno . ") " . $this->mysqli->connect_error;
			exit();
		}
	}
	
	// Class deconstructor override
	public function __destruct() {
		$this->CloseDB();
	}
	
	// runs a sql query
    public function runQuery($qry) {
        $result = $this->mysqli->query($qry);
        return $result;
    }
	
	// Close database connection
    public function CloseDB(){
        $this->mysqli->close();
    }
	
	// Escape the string get ready to insert or update
    public function clearText($text){
        $text = trim($text);
        return $this->mysqli->real_escape_string(addslashes(htmlspecialchars($text)));
    }
	
	// Get the last insert id 
    public function lastInsertID() {
        return $this->mysqli->insert_id;
    }
}
?>