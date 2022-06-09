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
        </ul>
    </nav>

<?php
require('connectie.php');
$sql = "SELECT * FROM evenementen";
if($result = $conn->query($sql)){
while ($row = $result-> fetch_row()){
    echo "<section class='evenementen'>".$row[1]. "" .$row[4]."</section>";
} 
} else {
    echo "query werkt niet";
}
?>
    
</body>
</html>