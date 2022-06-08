<?php
$error;
if(isset($_POST['submit'])){
    if (!empty($_POST["username"]) && !empty($_POST["password"])){
        require 'connectie.php';

            $username = $_POST["username"];
            $password = $_POST["password"];
            $user = "";
            $pass = "";

            if ($username == $user && $password == $pass) {
                session_start();
                $_SESSION['ingelogd'] = true;
                $_SESSION['username'] = $_POST['username'];
                header("Location: index.php");
            } else {
                $error = "wachtwoord of gebruikernaam fout"; 
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
    <title>inlogpagina</title>
</head>
<body>

<h1>Inloggen</h1>
<form method="POST" action="">
    <label>Username:</label><br>
    <input type="tekst" name="username" ><br>
    <label>Password:</label><br>
    <input type="password" name="password"><br><br>
    <input type="submit" name="submit" value="Inloggen"> 
</form>
</body>