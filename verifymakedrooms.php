<!doctype html>
<html lang="en">
<?php
require "./head.php";
?>
<body>
<?php
require "./header.php";
?>
<?php
//session_start();
//add database connection
require 'db.php';
$sql = "INSERT INTO rooms (roomname, r_rows, r_cols) VALUES('".$_POST['roomname']."', '".$_POST['r_rows']."', '".$_POST['r_cols']."')";


if ($conn->query($sql) === TRUE){
    echo "<br/><br/>
<div class=\"card text-center card-signInUp\">
                <div class=\"card-header\">
                    <h4 class=\"text-danger\">ΕΠΙΒΕΒΑΙΩΣΗ</h4>
                </div>
                <div class=\"card-body\"><br/>
                    <h5 class=\"card-title\">Η νέα αίθουσα δημιουργήθηκε!</h5><br/><br/>
                    <button type=\"button\" class=\"btn btn-outline-info\"><a href=\"istoriko.php\">Συνέχεια...</a></button><br/>
                </div>
            </div>";
}else{
    echo "Error: " .$sql . "<br>" . $conn->error;
}
$conn->close();

?>
<?php
require "./footer.php";
?>
</body>
</html>
