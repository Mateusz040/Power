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
            <li><a href="inlogpage.php">Log in</a></li>
        </ul>
    </nav>
<main>
<?php

require('connectie.php');

$sql = "SELECT * FROM aanbiedingen";

if($result = $conn->query($sql)){
    while ($row = $result-> fetch_row()){
        echo "<section class='aanbiedingen'>
        <div class='omschrijving'>".$row[1]. "</div>
        <div class='datum'>" .$row[2]."</div>
        <div class='omschrijving'>" .$row[4]."</div>
        <div class='link-aanbiedingen'><a href='aanbiedingen.php?id=".$row[0]."'>Terug naar Pagina</a></div>
        </section>";
    } 
    } else {
        echo "query werkt niet";
    }
    ?>


    </main>
</body>
</html>