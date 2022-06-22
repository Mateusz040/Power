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
    <div>
        <div class="mySlides fade">
            <img id="foto1" src="images/aardbei.png" alt="aardbei">
            <img id="info-foto" src="images/achterkantaardbei.png" alt="aarbei-info">
        </div>

        <div class="mySlides fade">
            <img id="foto2" src="images/appel.png" alt="appel">
            <img id="info-foto" src="images/achterkantappel.png" alt="appel-info">
        </div>

        <div class="mySlides fade">
            <img id="foto3" src="images/citroen.png" alt="citroen">
            <img id="info-foto" src="images/achterkantcitroen.png" alt="citroen-info">
        </div>

        <div class="mySlides fade">
            <img id="foto4" src="images/watermeloen.png" alt="watermeloen">
            <img id="info-foto" src="images/achterkantwatermeloen.png" alt="watermeloen-info">
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
    <footer>
    <p>&copy; Power Drink</p>
    <p class="footerp">Contact: powerenergy@info.nl</p>
</footer>
<script>
        var slideIndex = 1;
showSlides(slideIndex);


function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
    </script>
</body>
</html>