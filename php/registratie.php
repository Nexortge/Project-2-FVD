<?php
include '../admin/dbhandler.php';

if (isset($_POST['createUser'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $phoneNumber = $_POST['phoneNumber'];

    $dbHandler = new dbHandler();
    $dbHandler->createUser($firstName, $lastName, $email, $password, $phoneNumber);
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registratie.css">
    <title>Registratie - Forum Voor Democratie</title>
</head>

<body>
    <div class="grid-container">
        <?php include '../includes/header.php'; ?>

        <div class="form-container">
            <form action="#" method="POST">

                <div class="question-container">
                    <label>Voornaam*</label>
                    <input type="text" maxlength="32" name="firstName" required>
                </div>
                <div class="question-container">
                    <label>Achternaam*</label>
                    <input type="text" maxlength="32" name="lastName" required>
                </div>


                <div class="question-container">
                    <label>Email*</label>
                    <input type="email" maxlength="32" name="email" required>
                </div>
                <div class="question-container">
                    <label>Wachtwoord*</label>
                    <input type="password" maxlength="32" name="password" required>
                </div>
                <div class="question-container">
                    <label>Telefoonnummer</label>
                    <input type="tel" maxlength="15" name="phoneNumber">
                </div>
                <div id="buttons">
                    <input class="registreer" type="submit" name="createUser" value="Sluit je aan">
                    <p>of <a href="login.php">login</a></p>
                </div>


            </form>
        </div>


        <?php include '../includes/footer.php'; ?>
    </div>
</body>

</html>