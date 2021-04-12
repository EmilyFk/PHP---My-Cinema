<?php
/* 5
TO DO: you may look the week 11 exc */

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_cinema";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM seats where name='A1'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "<table><tr><td>ROWS=".$row["rows"]."</td><td>Cols=<td>".$row["cols"]."</td></tr>";
        $_SESSION['rows']=$row["rows"];
        $_SESSION['cols']=$row["cols"];
    }
    echo "</table>";
}
else {
    echo "0 results";
}
$conn->close();
?>
<table align="left" border="1" cellpadding="3" cellspacing="0">
    <?php
    for($i=1;$i<=$_SESSION['rows'];$i++)
    {
        echo "<tr>";
        for ($j=1;$j<=$_SESSION['cols'];$j++)
        {
            echo "<td>Seat ".$i. "-" .$j." </td>";
        }
        echo "</tr>";
    }
    ?>
</table>




