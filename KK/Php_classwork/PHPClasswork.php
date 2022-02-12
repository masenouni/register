<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Marjestie Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;1,200&display=swap" rel="stylesheet">
</head>

<body>

<?php
// define variables and set to empty values
$usernameErr = $passwordErr = $fnameErr = $lnameErr = $AdmNoErr =$classErr ="";
$username = $password = $fname = $lname = $AdmNo =$class ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
        $usernameErr = "username is required";
    } else {
        $username = test_input($_POST["username"]);
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
    }

    if (empty($_POST["fname"])) {
        $fnameErr = test_input($_POST["fname"]);
    } else {
        $fname = test_input($_POST["fname"]);
    }

    if (empty($_POST["lname"])) {
        $nameErr = test_input($_POST["lname"]);
    } else {
        $lname = test_input($_POST["lname"]);
    }

    if (empty($_POST["AdmNo"])) {
        $AdmNoErr = test_input($_POST["AdmNo"]);
    } else {
        $AdmNo = test_input($_POST["lname"]);
    }
    if (empty($_POST["class"])) {
        $classErr = test_input($_POST["class"]);
    } else {
        $class = test_input($_POST["class"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    username: <input type="text" name="username">
    <span class="error">* <?php echo $usernameErr;?></span>
    <br><br>
    password: <input type="password" name="password">
    <span class="error">* <?php echo $passwordErr;?></span>
    <br><br>
    fname: <input type="text" name="fname">
    <span class="error">* <?php echo $fnameErr;?></span>
    <br><br>
    lname: <input type="text" name="lname">
    <span class="error">* <?php echo $lnameErr;?></span>
    <br><br>
    AdmNo: <input type="text" name="AdmNo">
    <span class="error">* <?php echo $AdmNoErr;?></span>
    <br><br>
    class: <input type="text" name="class">
    <span class="error">* <?php echo $classErr;?></span>
    <br><br>


    <input type="submit" name="submit" value="Submit">
</form>


<?php
echo "<h2>Your Input:</h2>";
echo $username;
echo "<br>";
echo $password;
echo "<br>";
echo $fname;
echo "<br>";
echo $lname;
echo "<br>";
echo $AdmNo;
echo "<br>";
echo $class;
?>

<div class="container">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Horizental Ad -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-2975528604039680"
         data-ad-slot="4378295767"
         data-ad-format="auto"
         data-full-width-responsive="true"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</div>


</body>
</html>
