
<?php
abstract class MySQLConnection{
	protected $myDB;
	public function __construct(){
		$host = "localhost";
		$db = 'unbeleadsable_eleganza';
		$username = 'unbeleadsable_eleganzau';
		$password = 'Eleganza';

		try {
			$this->myDB = new PDO("mysql:host=$host;dbname=$db", $username, $password);
			$this->myDB->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
			$this->myDB->exec("set names utf8");
		} catch (Exception $e) {
			die('[DBManager] Error: ' . $e->getMessage());
		}
	}
}
