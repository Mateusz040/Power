<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Power energy">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP, SQL">
    <meta name="author" content="Mateusz, Mats, Michael, Esat">

    <link rel="stylesheet" href="css/style.css">

    <title>Power Drink</title>
</head>
<body>
    <nav>
        <img src="images/logo.png" alt="logo">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="producten.php">Producten</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="aanbiedingen.php">Aanbiedingen</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="#">Log in</a></li>
        </ul>
    </nav>
    
<form class = contact method="POST" action="">
    <h1>Contact</h1>
    <form method="POST">
    <label>Email:</label><br><input type="tekst" name="Email" ><br>
    <label>Probleem:</label><br><input type="Probleem" name="Probleem"><br><br>
    <input type="submit" name="submit" value="Verzend">
</form>
</form>

<?php
if(isset($_POST['submit'])){
    header("Location: index.php");
    }
?>


</body>
</html>