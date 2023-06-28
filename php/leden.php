<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/leden.css">
    <script src="../js/index.js" defer></script>
    <title>FVD</title>
</head>

<body>
    <?php
    include '../includes/header.php';
    ?>

    <h1 class="leden">Onze leden</h1>


    <div class="slideshow-container">
        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <img src="../assets/freek-vonk.jpg">
            <div class="slider-text">Freek Vonk</div>
        </div>

        <div class="mySlides fade">
            <img src="../assets/thierry-baudet.webp">
            <div class="slider-text">Thierry Baudet</div>
        </div>

        <div class="mySlides fade">
            <img src="../assets/gideon-van-meijeren.webp">
            <div class="slider-text">Gideon van Meijeren</div>
        </div>

        <div class="mySlides fade">
            <img src="../assets/freek-jansen.webp">
            <div class="slider-text">Freek Jansen</div>
        </div>

        <div class="mySlides fade">
            <img src="../assets/pepijn-van-houwelingen.webp">
            <div class="slider-text">Pepijn van Houwelingen</div>
        </div>

        <div class="mySlides fade">
            <img src="../assets/simone-kerseboom.webp">
            <div class="slider-text">Simone Kerseboom</div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
        <span class="dot" onclick="currentSlide(6)"></span>
    </div>

    <?php
    include '../includes/footer.php';
    ?>
</body>

</html>