<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>]

<?php
require('connectie.php');
$sql = "SELECT * FROM aanbiedingen";
if($result = $conn->query($sql)){
while ($row = $result-> fetch_row()){
    echo $row[1]. " " .$row[2]. "" .$row[3]. " " .$row[4]. "" .$row[5]. "" .$row[6]"<br>".;; 
} 
} else {
    echo "query werkt niet";
}
?>
    
</body>
</html>