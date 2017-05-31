<?php

include_once('fix_mysql.inc.php');

echo "Haii<hr>";
// $servername = "localhost";
// $username = "mealca";
// $password = "12345678";
// $dbname = "imgUpload";

//try {

//  $db = new PDO("mysql:host=$servername;dbname=mysql", $username, $password);
  /*** echo a message saying we have connected ***/
//  echo 'Connected to database';

//mysql_connect('localhost', 'username', 'password') or die (mysql_info());
//   mysql_select_database('db_name') or die (mysql_error());

//  mysql_connect($servername,$username,$password) or die (mysql_info());

// } catch (PDOException $e) {

// echo "<hr>".$e."<hr>";

// }
//mysql_select_db($dbname) or die( "Error: Unable to select database");


//mysql_connect($servername,$username,$password);
//mysql_select_db($dbname) or die( "Error: Unable to select database");
//Connect To Database

//Local Sessings
// $hostname="localhost";
// $username="mealca";
// $password="12345678";
// $dbname="imgUpload";
// $usertable="dbUsers";

//cPanel Sessings
$hostname="localhost";
$username="alcatraz627";
$password="~Ieffa0bchi";
$dbname="imgupload";
//$usertable="dbUsers";
$usertable="dbOrders";

/* Set up a PDO connection. The try catch block will display an error
   message if the connection is unsuccessful */

$dsn = 'mysql:dbname='.$dbname.';host='.$hostname;

try
{
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
}
catch (PDOException $e)
{
    exit($e->getMessage());
}

/* Run your query */

$stmt = $pdo->query("SELECT * FROM ".$usertable);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

/* Display the results */
echo "<pre>";
print_r($result);
echo "</pre>";


/* Set up a MySQL connection. The try catch block will display an error
   message if the connection is unsuccessful */



/* Run your query */
// $stmt = $pdo->query('SELECT * FROM dbUsers');
// while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
// {
// 	foreach ($row as $key => $value) {
//     echo "<b>".$key."</b>: ".$value."<br>\n";
// 	}
// 	echo "<hr>";
// }


//echo "<hr>";


?>