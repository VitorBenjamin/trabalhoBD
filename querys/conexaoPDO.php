<?php

class conexaoPDO {

	public static $conn;
//array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	private function __contructor(){
	}

	public static function getInstance(){

		try{
			if (!isset(self::$conn)) {
				self::$conn = new PDO("mysql:host=localhost;dbname=sisreq", "root", "ubuntu77");
				self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}

		}  catch(PDOException $e) {
			echo 'Error: ' . $e->getMessage();
		}

		return self::$conn;
	}
	public static function close(){
		if (self::$conn != null)
			self::$conn = null;
	}
}
?>
