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
<main>

<?php

require('connectie.php');


    $sql = "SELECT *, DATE_FORMAT(evenementen.datum, '%m %d %Y') as dag FROM evenementen
    LEFT JOIN locaties 
    ON evenementen.locatie_id = locaties.locatie_id 
    LEFT JOIN artiesten 
    ON evenementen.artiest_id = artiesten.artiest_id WHERE evenementen.evenement_id = ".$_GET['id'];


if($result = $conn->query($sql)){
    $row = $result-> fetch_row();
    echo "<section class='evenement_detail'>
    <h2>Dag</h2>
    <div class='datum'>".$row[18]."</div>
    "."<br>"."<h2>Artiesten</h2>
    <div class='locatie'>" .$row[11]."</div>
    <div class='locatie'>" .$row[15]."</div>
    "."<br>"."<h2>Datum</h2>
    <div class='locatie'>" .$row[1]."</div>
    "."<br>"."<h2>Max aantal bezoekers</h2>
    <div class='locatie'>" .$row[4]."</div>
    "."<br>"."<h2>Plaats</h2>
    <div class='locatie'>" .$row[6]."</div>
    <div class='locatie'>" .$row[7]."</div>

    </section>";

} else {
    echo "query werkt niet";
}
?>


    </main>
</body>
</html>