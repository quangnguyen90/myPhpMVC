<?php
/*
|----------------------------------------------------------
|
| DB CONNECTION CONFIGURATION BY PDO
|
|----------------------------------------------------------
*/

$host = "localhost";
$port = null; // You can change it, example: $port = 80, $port = 8080, etc
$db_name = "myphpmvc";
$username = "root";
$password = "";
  
try {
    $DB = new PDO("mysql:host={$host};port={$port};dbname={$db_name}", $username, $password);
    $DB->exec("SET CHARACTER SET utf8");
    /** 
	* PDO connect variable:
	*
	* @var PDO::ERRMODE_SILENT #Just set error codes.
	* @var PDO::ERRMODE_WARNING #Raise E_WARNING.
	* @var PDO::ERRMODE_EXCEPTION #Throw exceptions.
	*/
	$DB->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
  
// to handle connection error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}

?>