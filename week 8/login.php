<?php
if (isset($_POST["Cancel"])) {
    header("Location: index.php");
};
$salt = 'XyZzy12*_';
//$stored_hash = 'a8609e8d62c043243c4e201cbb342862';
$stored_hash = hash("md5","XyZzy12*_php123");

if (isset($_POST["who"]) && isset($_POST["pass"])) {
    if (strlen($_POST["who"]) < 1 && strlen($_POST["pass"]) < 1) {
        echo "<p style='color:red'> User name and password are required </p>";
    } else {
        $check = hash("md5", $salt . $_POST["pass"]);
        if ($check == $stored_hash) {
            header("Location: game.php?name=" . $_POST["who"]);
        } else {
            $incPss = "<p style='color:red'>Incorrect password</p>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>8bd62230</title>
</head>

<body>
    <?php
    if (isset($incPss)) {
        //echo $incPss;
    ?>
        <p style='color:red'>Incorrect password</p>
    <?php
    }
    ?>
    <h2>Please Log In</h2>
    <form action="" method="post">
        <label for="nam">User name : </label>
        <input type="text" name="who" id="nams" require><br>
        <label for="id_1723">password : </label>
        <input type="password" name="pass" id="id_1723" require><br>
        <button type="submit" value="Log In" name="login">Log In</button>
        <input type="submit" name="Cancel" value="Cancel">
    </form>
    <p>
        For a password hint, view source and find a password hint
        in the HTML comments.
    </p>
</body>

</html>