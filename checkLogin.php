
<?php
session_start();
//sundesh vasis


if (isset($_POST['submit'])){
    //add database connection
    require 'db.php';

}

?>
<!---->
<?php
//saving data from register form and error handlers

//kathorismos metavlitwn kai adeiasma timwn

$email=test_input($_POST['email']);
$password=test_input($_POST['password']);

    if (empty($email) || empty($password)) {
        $loginErr = "Please complete all the fields";
        $_SESSION["loginErr"]=  $loginErr;
        header("Location: signInsignUp.php");
        exit();
    }
    else {
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: signInsignUp.php?error=sqlerror");
            exit();
        }else{
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_results($stmt);

            if ($row = mysqli_fetch_assoc($result)){
//
//              tsekare
//                if ($result->num_rows > 0) {
//                    while($row = $result->fetch_assoc()) {
//
//                        echo "Hello user with username: " . $row["username"]. " - Your email is: " . $row["email"]."<br>";
//                        $_SESSION["username"] = $row["username"];
//                        $_SESSION["role"] = $row["role"];
//                        echo '<br><a href=records.php>Go see records</a>';
//                    }
//                }
//                else {
//                    echo "Not a correct combonation of username and password. Please try <a href=login.html>again</a>";
//                }
//
//            }else{
//                header("Location: signInsignUp.php?error=nouser");
//                exit();
//            } elseif(){}  //tsekare to 7h 1d
        }

//        $email = test_input($_POST["email"]);
//
//        // check if e-mail address is well-formed
//        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//            $emailErr = "Invalid email format";
//            $_SESSION["emailErr"]=  $emailErr;
//            header("Location: signInsignUp.php?error=invalidemail&email=".$emailErr);
//            exit();
//        } else{$_SESSION["email"]=  $email;}
//    }
//
//    if (empty($password)) {
//        $passwordErr = "Password is required";
//        $_SESSION["passwordErr"]=  $passwordErr;
//        header("Location: signInsignUp.php?error=passwordsdonotmatch&firstname=".$firstname);
//        exit();
//    }
//    else {
//        $password = test_input($_POST["password"]);
//
//    }


}
//kalw etoimes functions wste oti erthei san argument na perasei apo diadikasia "katharsis"
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
//
//// prepare statements
//
//$sql = "SELECT * FROM users WHERE email = ?";
//$stmt = mysqli_stmt_init($conn);
//if (!mysqli_stmt_prepare($stmt, $sql)){
//    header("Location: signInsignUp.php?error=sqlerror");
//    exit();
//}else{
//    mysqli_stmt_bind_param($stmt, "s", $email);
//    mysqli_stmt_execute($stmt);
//    mysqli_stmt_store_result($stmt);
//    $rowCount = mysqli_stmt_num_rows($stmt);
//
//    //checking email if already exists
//    if ($rowCount > 0){
//        header("Location: signInsignUp.php?error=emailtaken");
//        exit();
//    }
//    else{
//        $sql = "INSERT INTO users (firstname, lastname, telephone, email, password) VALUES (?, ?, ?, ?, ?)";
//        $stmt = mysqli_stmt_init($conn);
//        if (!mysqli_stmt_prepare($stmt, $sql)){
//            header("Location: signInsignUp.php?error=sqlerror");
//            exit();
//        }
//        //the final insert data to database
//        else{
//            //im going to not visible password in database
//            $hashedPass = password_hash($password, PASSWORD_DEFAULT);
//
//            mysqli_stmt_bind_param($stmt, "sssss", $firstname, $lastname, $telephone, $email, $hashedPass);
//            mysqli_stmt_execute($stmt);
//            mysqli_stmt_store_result($stmt);
////                die(var_dump($stmt));
//            header("Location: signInsignUp.php?success=registered");
//            exit();
//
//        }
//    }
//}
////close the statement and connection that we had created
//mysqli_stmt_close($stmt);
//mysqli_close($conn);
//
//
////header("Location: signInsignUp.php");
//
//
//?>

<?php

if (isset($_POST['email']) && isset($_POST['password']))
{//kalw etoimes functions wste oti erthei san argument na perasei apo diadikasia "katharsis"
    function test_input2($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

}else{
    header("Location: ../signInsignUp.php?error=accessforbidden");
}
?>


<?php
//kathorismos metavlitwn kai adeiasma timwn
$false = $emailErr = $passwordErr = "";
$email = $password = "";
$_SESSION["false"]=  $false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input2($_POST["email"]);
        $_SESSION["email"]=  $email;
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            $_SESSION["emailErr"]=  $emailErr;
        }
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
        $_SESSION["passwordErr"]=  $passwordErr;
    }
    else {
        $password = test_input2($_POST["password"]);
        $_SESSION["password"]=  $password;
    }


}

//            var_dump($_POST);
?>