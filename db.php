<!--database connection-->
<?php
//session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mycinema";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error); }
//$sql = "SELECT * FROM ";
//$result = $conn->query($sql);
//$conn->close();

?>
