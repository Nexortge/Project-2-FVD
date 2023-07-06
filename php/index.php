<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">

    <title>FVD</title>
</head>

<body>
    <?php
    include '../includes/header.php';
    session_start();

    if (isset($_SESSION['email'])) {
    } else {

        echo "<div id='buttons'>
        <button class='registreer'><a href='registratie.php'>Sluit je aan!</a></button>
        <p>of <a href='login.php'>login</a></p>
    </div>";
    }


    ?>



    <div class="container">
        <img class="standpunt-img" src="../assets/freek-vonk.jpg" alt="img">
        <div>
            <h1 class="titel">Soevereiniteit</h1>
            <div class="standpunt-text">
                <p class="text">Uit de EU, macht terug van Brussel naar NL
                    Geen nieuwe soevereiniteitsoverdracht
                    Opzeggen internationale verdragen die niet in het Nederlandse belang zijn
                </p>
                <a href="../php/stand.php" class="button">Lees verder...</a>
            </div>
        </div>
    </div>


    <div class="container">
        <img class="standpunt-img" src="../assets/standpunt2.webp" alt="img">
        <div>
            <h1 class="titel">Vrijheid van meningsuiting</h1>
            <div class="standpunt-text">
                <p class="text">Censuur door Big Tech aanpakken
                    Cancelcultuur en 'deplatforming' tegengaan
                    Vrije (wetenschappelijke) ideeënuitwisseling bevorderen
                </p>
                <a href="../php/stand.php" class="button">Lees verder...</a>
            </div>
        </div>
    </div>
    </div>
</body>

</html>

<?php
include '../includes/footer.php';
?>