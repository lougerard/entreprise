<?php 


// utiliser la classe elle-même en la rendant statique
// "::" permet d'accéder aux membres static ou constant ainsi qu'aux propriétés ou méthode surchargée d'une classe
/*
class Database{
	
	private static $dbHost = "localhost";
	private static $dbName = "cc";
	private static $dbUser = "root";
	private static $dbUserPassword = "Pioneer007";

	private static $connection = null;
	
	public static function connect(){
		try{
			self::$connection = new PDO("mysql:host=".self::$dbHost.";dbname=".self::$dbName, self::$dbUser, self::$dbUserPassword);
			
		}
		catch(PDOException $e){
			die($e->getMessage());
		}
		return self::$connection;
	}
	
	public static function disconnect(){
		self::$connection = null;
	}
	
}
	
	Database::connect();
	// tester avec "http://localhost:8080/SiteWeb/admin/database.php"*/
try {
    $dbh = new PDO('mysql:host=localhost;dbname=cc', 'root', 'Pioneer007');
    die('ok');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}


?>