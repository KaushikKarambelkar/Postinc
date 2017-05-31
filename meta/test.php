<?php 

//phpinfo();
date_default_timezone_set("Asia/Kolkata");
echo date("h:i:sa, d-m-y");
echo "Haii"."<br>";
/*
$servername = "localhost:3306";
$username = "alca";
$password = "~Ieffa0bchi";
$dbname = "imgupload";

$conn = mysql_connect($servername,$username,$password) or die(mysql_error());


echo "<hr>";
mysql_select_db('imgupload') or //die( "Error: Unable to select database");


$query="INSERT INTO dbUsers ('uname', 'email', 'password', 'UID') VALUES ('user1','email@1','pw1','U00003')";

echo "Query: ".$query;
echo "<hr>Connection: ".$conn."<br>";
print_r($conn);
echo "<hr>";

$result = mysql_query($query, $conn);
print_r($result);


// $query="SELECT * FROM dbUsers";

// $result=mysql_query($query);
	

    $query="SELECT * FROM 'dbUsers' WHERE uname='chu'";    
    
    $result=mysql_query($query);

	echo ">>>>".mysql_num_rows($result);	
    
    echo "Number of records:".strval(mysql_num_rows($result));
	echo "<<<<<";
	
	while ($row = mysql_fetch_array($result))
{

    foreach ($row as $columnName => $columnData)
    {    
        
//        echo $columnName.'</b>: <i>'.$columnData.'</i></td>;
 	}

}
*/	



//Sample Database Connection Syntax for PHP and MySQL.

//Connect To Database
$hostname="localhost";
$username="alcatraz627";
$password="~Ieffa0bchi";
$dbname="imgupload";
$usertable="dbUsers";
$yourfield = "uname";

/* Set up a MySQL connection. The try catch block will display an error
   message if the connection is unsuccessful */

echo "<pre>";

$dsn = 'mysql:dbname='.$dbname.';host='.$hostname;

try
{
    $dbh = new PDO($dsn, $username, $password);
    $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
}
catch (PDOException $e)
{
    exit($e->getMessage());
}

/* Run your query */

$stmt = $dbh->query("SELECT * FROM ".$usertable);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

/* Display the results */

print_r($result);

echo "<hr>";

$usertable="dbimg";


$stmt = $dbh->query("SELECT * FROM ".$usertable);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($result);

echo "</pre>";

/* Display the results */



/*


$connection = mysql_connect($hostname, $username, $password);
mysql_select_db($dbname, $connection);

# Check If Record Exists

$query = "SELECT * FROM $usertable";

$result = mysql_query($query);

if($result)
{
while($row = mysql_fetch_array($result))
{
$name = $row["$yourfield"];
echo "Name: ".$name."
";
}
}*/
?>