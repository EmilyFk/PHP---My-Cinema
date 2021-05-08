<?php
//session_start();
//sundesh vasis
include_once 'db.php';

//if (isset($_POST['create'])){
    //$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
//    $firstname = $_POST['firstname'];
//    $lastname = $_POST['lastname'];
//    $telephone = $_POST['telephone'];
//    $email = $_POST['email'];
//    $password = $_POST['password'];
//
//    echo  $firstname . " " . $lastname . " " . $telephone . " " . $email . " " . $password;

    // $sql = "INSERT INTO users (  user_id, user_firstname, user_lastname, user_telephone, user_email, user_pwd )"
    // VALUES ('$uid', '$firstname', '$lastname', '$telephone', '$email', '$password');";
    //mysqli_query($conn, $sql);
    //header("Location: submit.php?signup=success");
//}

?>

<?php
//kathorismos metavlitwn kai adeiasma timwn
$false = $firstnameErr = $lastnameErr = $telephoneErr = $emailErr = $passwordErr = "";
$firstname = $lastname= $telephone = $email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["firstname"])) {
        $firstnameErr = "First name is required";
        $false = "false";
        $_SESSION["firstnameErr"]=  $firstnameErr;
    } else {
        $firstname = test_input($_POST["firstname"]);
        $_SESSION["firstname"]=  $firstname;
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
            $firstnameErr = "Only letters and white space allowed";
            $_SESSION["firstnameErr"]=  $firstnameErr;
        }
    }
    if (empty($_POST["lastname"])) {
        $lastnameErr = "Last name is required";
        $false = "false";
        $_SESSION["lastnameErr"]=  $lastnameErr;
    } else {
        $lastname = test_input($_POST["lastname"]);
        $_SESSION["lastname"]=  $lastname;
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
            $lastnameErr = "Only letters and white space allowed";
            $_SESSION["lastnameErr"]=  $lastnameErr;
        }
    }

    if (empty($_POST["telephone"])) {
        $telephoneErr = "Telephone is required";
        $false = "false";
        $_SESSION["telephoneErr"]=  $telephoneErr;
    } else {
        $telephone = test_input($_POST["telephone"]);
        $_SESSION["telephone"]=  $telephone;
        // check if name only contains letters and whitespace
        if (is_numeric($telephone)) {
            $telephoneErr = "Only numbers allowed";
            $_SESSION["telephoneErr"]=  $telephoneErr;
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        $_SESSION["emailErr"]=  $emailErr;
    } else {
        $email = test_input($_POST["email"]);
        $_SESSION["email"]=  $email;
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            $_SESSION["emailErr"]=  $emailErr;
        }
    }

    if (empty($_POST["pass"])) {
        $passErr = "Password is required";
        $_SESSION["passErr"]=  $passErr;
    }
    else {
        $pass = test_input($_POST["pass"]);
        $_SESSION["pass"]=  $pass;
    }


}
//kalw etoimes functions wste oti erthei san argument na perasei apo diadikasia "katharsis"
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


errors( $firstnameErr, $lastnameErr, $telephoneErr, $emailErr, $passErr );
header("Location: signInsignUp.php");



?>