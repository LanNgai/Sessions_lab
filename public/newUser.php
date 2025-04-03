<?php

if ($_POST['Submit']) {
    require_once '../DBconnect.php';
    require_once '../template/clean.php';

    $username = clean($_POST["Username"]);
    $password = clean($_POST["Password"]);
    $new_user = array("username" => $username, "password" => $password);

    $sql = sprintf("INSERT INTO %s (%s) values (%s)", "users",
        implode(", ", array_keys($new_user)),
        ":" . implode(", :", array_keys($new_user)));
    $stmt = $conn->prepare($sql);
    $stmt->execute($new_user);
}

echo "New User successfully created!";
?>

<div class="links-container">
    <p><a href="login.php">Login Here!</a></p>
</div>