<?php
session_start();
extract($_POST);
if (strcmp($email, "a@a.a") == 0 && strcmp($password, "aaa") == 0) {
    $_SESSION["credentialCheck"] = 1;
    header("Location: index.php");
} else {
    $msg = "Incorrect Email or Password";
    header("Location: loginPage.php?msg=$msg");
}
?>
