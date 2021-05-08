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