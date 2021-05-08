<!--database connection-->
<?php
session_start();
//params to connect to a database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mycinema";

//connection to database
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn){
  die("Database connection failed! ");
}

?>
