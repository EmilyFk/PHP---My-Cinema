<?php
require 'db.php';
$userId = $_SESSION['sessionUserId'];

$screening = $_POST["screening_id"];

$sql = "INSERT INTO booking (user_id, screening_id) VALUES (" . $userId . "," . $screening .")";
$result = $conn->query($sql);
$new_booking_id = $conn->insert_id;

if (isset($_POST["seat"])){
    for($i=0; $i<count($_POST['seat']); $i++){
        $seat= $_POST['seat'][$i];
        $sql1 = "INSERT INTO booking_seat (booking_id, seat) VALUES (" . $new_booking_id . ", \"" . $seat ."\")";
        $result1 = $conn->query($sql1);
    }
}


header("Location: verifyBooking.php");
exit();
?>
