
<?php
require "./navs.php";
// καθορισμός μεταβλητών και άδεισμα τιμών
$false = $fnameErr = $lastnameErr= $emailErr = $genderErr = $passwordErr = "";
$fname = $lastname= $email = $gender = $password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["fname"])) {
        $nameErr = "First name is required";
        $false = "false";
    } else {
        $fname = test_input($_POST["fname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
            $fnameErr = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["lastname"])) {
        $lastnameErr = "Last name is required";
        $false = "false";
    } else {
        $lastname = test_input($_POST["lastname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
            $lastnameErr = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
//    if (empty($_POST["website"])) {
//        $website = "";
//    } else {
//        $website = test_input($_POST["website"]);
//        // τσεκάρουμε αν URL address syntax είνα ορθό
//        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
//            $websiteErr = "Invalid URL";
//        }
//    }

      if (empty($_POST["pass"])) {
        $passErr = "Password is required";
    }
    else {
        $pass = test_input1($_POST["pass"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input1($_POST["gender"]);
    }
}

function test_input1($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<h2>Registration</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    First name: <input type="text" name="fname" value="<?php echo $fname;?>" class="<?php echo $false;?>">
    <span class="error">* <?php echo $fnameErr;?></span>
    <br><br>
    Last name: <input type="text" name="lastname" value="<?php echo $lastname;?>" class="<?php echo $false;?>">
    <span class="error">* <?php echo $lastnameErr;?></span>
    <br><br>
    E-mail: <input type="text" name="email" value="<?php echo $email;?>">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    Password: <input type="password" placeholder="Enter your Password" name="password" value="<?php echo $password;?>" class="<?php echo $false;?>">
    <span class="error">* <?php echo $passwordErr;?></span>
    <br><br>
    Gender:
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>
<?php
echo "<h2>Your Input:</h2>";
echo $fname;
echo "<br>";
echo $lastname;
echo "<br>";
echo $gender;
echo "<br>";
echo $email;
echo "<br>";
echo $password;
echo "<br>";
?>
</div>

