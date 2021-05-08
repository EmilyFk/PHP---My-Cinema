<?php
//session_start();
//sundesh vasis


if (isset($_POST['submit'])){
    //add database connection
    require 'db.php';

}

?>

<?php
//saving data from register form and error handlers


//kathorismos metavlitwn kai adeiasma timwn
$false = $firstnameErr = $lastnameErr = $telephoneErr = $emailErr = $passwordErr = "";
$firstname = $lastname= $telephone = $email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["firstname"])) {
        $firstnameErr = "First name is required";
        $false = "false";
        $_SESSION["firstnameErr"]=  $firstnameErr;
        header("Location: signInsignUp.php?error=emptyfields&firstname=".$firstnameErr);
        exit();
    }
    else {
        $firstname = test_input($_POST["firstname"]);
//        $_SESSION["firstname"]=  $firstname;
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
            $firstnameErr = "Only letters and white space allowed";
            $_SESSION["firstnameErr"]=  $firstnameErr;
            header("Location: signInsignUp.php?error=invalidfirstname&firstname=".$firstnameErr);
            exit();
        }else{$_SESSION["firstname"]=  $firstname;}  //NEW!!!
    }
    if (empty($_POST["lastname"])) {
        $lastnameErr = "Last name is required";
        $false = "false";
        $_SESSION["lastnameErr"]=  $lastnameErr;
        header("Location: signInsignUp.php?error=emptyfields&lastname=".$lastnameErr);
        exit();
    }
    else {
        $lastname = test_input($_POST["lastname"]);
//        $_SESSION["lastname"]=  $lastname;
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
            $lastnameErr = "Only letters and white space allowed";
            $_SESSION["lastnameErr"]=  $lastnameErr;
            header("Location: signInsignUp.php?error=invalidlastname&lastname=".$lastnameErr);
            exit();
        }else{$_SESSION["lastname"]=  $lastname;}  //NEW!!!
    }

    if (empty($_POST["telephone"])) {
        $telephoneErr = "Telephone is required";
        $false = "false";
        $_SESSION["telephoneErr"]=  $telephoneErr;
        header("Location: signInsignUp.php?error=emptyfields&telephone=".$telephoneErr);
        exit();
    }
    else {
        $telephone = test_input($_POST["telephone"]);
//        $_SESSION["telephone"]=  $telephone;
        // check if name only contains letters and whitespace
        if (!is_numeric($telephone)) {
            $telephoneErr = "Only numbers allowed";
            $_SESSION["telephoneErr"]=  $telephoneErr;
            header("Location: signInsignUp.php?error=invalidtelephone&telephone=".$telephoneErr);
            exit();
        }else{$_SESSION["telephone"]=  $telephone;}  //NEW!!!
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        $_SESSION["emailErr"]=  $emailErr;
        header("Location: signInsignUp.php?error=emptyfields&email=".$emailErr);
        exit();
    }
    else {
        $email = test_input($_POST["email"]);
//        $_SESSION["email"]=  $email;
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            $_SESSION["emailErr"]=  $emailErr;
            header("Location: signInsignUp.php?error=invalidemail&email=".$emailErr);
            exit();
        } else{$_SESSION["email"]=  $email;}  //NEW!!!
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
        $_SESSION["passwordErr"]=  $passwordErr;
        header("Location: signInsignUp.php?error=passwordsdonotmatch&firstname=".$firstname);
        exit();
    }
    else {
        $password = test_input($_POST["password"]);

    }


}
//kalw etoimes functions wste oti erthei san argument na perasei apo diadikasia "katharsis"
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// prepare statements

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: signInsignUp.php?error=sqlerror");
        exit();
    }else{
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $rowCount = mysqli_stmt_num_rows($stmt);

//checking email if already exists
        if ($rowCount > 0){
            header("Location: signInsignUp.php?error=emailtaken");
            exit();
        }
        else{
            $sql = "INSERT INTO users (firstname, lastname, telephone, email, password) VALUES (?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: signInsignUp.php?error=sqlerror");
                exit();
            }
            //the final insert data to database
            else{
                //im going to not visible password in database
                $hashedPass = password_hash($password, PASSWORD_DEFAULT);

                mysqli_stmt_bind_param($stmt, "sssss", $firstname, $lastname, $telephone, $email, $hashedPass);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
//                die(var_dump($stmt));
                header("Location: signInsignUp.php?success=registered");
                exit();

            }
        }
    }
    //close the statement and connection that we had created
mysqli_stmt_close($stmt);
    mysqli_close($conn);
//}
//errors( $firstnameErr, $lastnameErr, $telephoneErr, $emailErr, $passwordErr );
//header("Location: signInsignUp.php");


?>