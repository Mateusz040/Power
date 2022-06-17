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
<article id="flex-container">
    <nav class="navbar">
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
    <div class="foto-drankjes">
        <img src="images/art.png" alt="art">
    </div>
    <div class="foto2">
        <img src="images/unleash.png" alt="unleash">
    </div>
</article>
<?php
require('connectie.php');
echo "<h1>Huidige aanbiedingen</h1>";
$sql = "SELECT titel, omschrijving FROM aanbiedingen LIMIT 3 OFFSET 4";
if($result = $conn->query($sql)){
while ($row = $result-> fetch_row()){
    echo "<h2 class = 'huidige-aanbiedingen'>$row[0]</h2>";
    echo "<p class = 'huidige-aanbiedingen-omschrijving'>$row[1]</p>";

} 
} else {
    echo "query werkt niet";
}

echo "<h1 class = 'aankomende-evenementen'>Aankomende evenementen</h1>";
$sql = "SELECT evenementen.datum, locaties.gebouw FROM evenementen LEFT JOIN locaties ON evenementen.locatie_id = locaties.locatie_id WHERE datum > NOW() LIMIT 3;";
if($result = $conn->query($sql)){
while ($row = $result-> fetch_row()){
    echo "<p class = 'aankomende-events'>$row[0]</p>";
} 
} else {
    echo "query werkt niet";
}


?>
</body>
</html>
