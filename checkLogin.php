
<?php
//kalw etoimes functions wste oti erthei san argument na perasei apo diadikasia "katharsis"
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['submit'])) {
    session_start();
    //add database connection
    require 'db.php';


//saving data from register form and error handlers

//kathorismos metavlitwn kai adeiasma timwn

    $email = test_input($_POST['email']);
    $password = test_input($_POST['password']);

    if (empty($email) || empty($password)) {
        $loginErr = "Please complete all the fields";
        $_SESSION["loginErr"] = $loginErr;
        header("Location: signInsignUp.php");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: signInsignUp.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                $passCheck = password_verify($password, $row['password']);
                if (!$passCheck) {
                    header("Location: signInsignUp.php?error=wrongpass");
                } else {
                    session_start();
                    $_SESSION['sessionId'] = $row['id'];
                    $_SESSION['sessionUserId'] = $row['user_id'];
                    $_SESSION['sessionFName'] = $row['firstname'];
                    $_SESSION['sessionLName'] = $row['lastname'];
                    $_SESSION['sessionRole'] = $row['role'];
                    $_SESSION['loggedIn'] = true;
//                    header("Location: signInsignUp.php?success=loggedin");
                    header("Location: submit.php");
                }
                exit();
            }
        }
    }


}else {
    header("Location: ../signInsignUp.php?error=nouser");
    exit();
}
?>

<!---->
<?php
?>

<!---->
<?php
//
//if (isset($_POST['email']) && isset($_POST['password'])) {
//    //kalw etoimes functions wste oti erthei san argument na perasei apo diadikasia "katharsis"
//}
//    function test_input2($data) {
//        $data = trim($data);
//        $data = stripslashes($data);
//        $data = htmlspecialchars($data);
//        return $data;
//    }
//
//}else{
//    header("Location: ../signInsignUp.php?error=accessforbidden");
//}
//?>
<!---->
<!---->
<?php
////kathorismos metavlitwn kai adeiasma timwn
//$false = $emailErr = $passwordErr = "";
//$email = $password = "";
//$_SESSION["false"]=  $false;
//
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//
//    if (empty($_POST["email"])) {
//        $emailErr = "Email is required";
//    } else {
//        $email = test_input2($_POST["email"]);
//        $_SESSION["email"]=  $email;
//        // check if e-mail address is well-formed
//        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//            $emailErr = "Invalid email format";
//            $_SESSION["emailErr"]=  $emailErr;
//        }
//    }
//
//    if (empty($_POST["password"])) {
//        $passwordErr = "Password is required";
//        $_SESSION["passwordErr"]=  $passwordErr;
//    }
//    else {
//        $password = test_input2($_POST["password"]);
//        $_SESSION["password"]=  $password;
//    }
//
//
//}

//            var_dump($_POST);
//}
$conn->close(); ?>