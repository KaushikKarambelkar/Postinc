<?php

require_once('connect_db.php');

echo"<pre>";
print_r($_POST);
echo"</pre>";

$fname="Filename";



$qu = "INSERT INTO dbOrders (name, email, phno, hrno, descr, filename) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['phno']."', '".$_POST['hrno']."', '".$_POST['descr']."', '".$fname."');";

echo "<b>Query:</b>".$qu;

$stmt = $pdo->query($qu);

echo "<br><br>Query compiled<br><br>";

$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<br><br>Query Sent<br><br>";
$num = count($row);

echo "<br>Number of records: ".$num."<hr>";

echo"<br><br><pre>$row:";
print_r($row);
echo "<hr>$_FILES:";
print_r($_FILES);
echo"</pre><hr><br><br>";


// echo "Query #2 Pre";

// $stmt = $pdo->query("SELECT * FROM dbOrders");
// echo "Query #2 compiled";

// $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
// echo "Query #2 sent";
// $num = count($row);

// echo"<pre>";
// print_r($row);
// echo"</pre>";


if(isset($_FILES["photo"]["error"])){

    if($_FILES["photo"]["error"] > 0){
        echo "Error: " . $_FILES["photo"]["error"] . "<br>";
    } else{
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 500 * 1024 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("upload/" . $_FILES["photo"]["name"])){
                echo $_FILES["photo"]["name"] . " is already exists.";
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $_FILES["photo"]["name"]);
                echo "Your file was uploaded successfully.";
            } 
        } else{
            echo "Error: There was a problem uploading your file - please try again."; 
        }
    }
} else{
    echo "Error: Invalid parameters - please contact your server administrator.";
}


?>