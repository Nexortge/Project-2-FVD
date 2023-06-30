<?php
include '../admin/dbhandler.php';

$dbHandler = new dbHandler();
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $hashed_password = $dbHandler->getPasswordByEmail($email);
    var_dump($hashed_password, $_POST['password'], password_verify($_POST['password'], $hashed_password));
    if (password_verify($_POST['password'], $hashed_password)) {
        // Password is correct, start the session
        session_start();
        echo "Password is correct";
        // Store the user's email in the session variable
        $_SESSION['email'] = $email;

        // Redirect to the home page or another page
        header("Location: index.php");
        exit();
    } else {
        // Password is incorrect
        echo "Password is incorrect";
        session_start();
        $_SESSION['email'] = 'BESTAT NIET';
    }
}

?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login - Forum Voor Democratie</title>
</head>

<body>
    <div class="grid-container">
        <?php include '../includes/header.php'; ?>

        <div class="form-container">
            <form action="#" method="POST">
                <div class="question-container">
                    <label>Email*</label>
                    <input type="email" name="email" maxlength="32" required>
                </div>
                <div class="question-container">
                    <label>Wachtwoord*</label>
                    <input type="password" name="password" maxlength="32" required>
                </div>
                <input class="login" type="submit" value="Login" name="login">
            </form>
        </div>


        <?php include '../includes/footer.php'; ?>
    </div>
</body>

</html>