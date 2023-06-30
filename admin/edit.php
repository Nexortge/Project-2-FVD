<link rel="stylesheet" href="style.css">

<h1 class="gebruiker">Verander huidige gebruiker</h1>

<form action="index.php" method="POST" class="form">
    <input type="text" hidden name="id" value="<?php echo $_POST['id']?>">
    <label for="firstName">voornaam:</label>
    <input type="text" id="firstName" name="firstName" value="<?php echo $_POST['firstName']?>">
    <label for="lastName">achternaam:</label>
    <input type="text" id="lastName" name="lastName" value="<?php echo $_POST['lastName']?>">
    <label for="email">email:</label>
    <input type="text" id="email" name="email" value="<?php echo $_POST['email']?>">
    <label for="password">wachtwoord:</label>
    <input type="text" id="password" name="password" value="<?php echo $_POST['password']?>">
    <label for="phoneNumber">telefoonnummer:</label>
    <input type="text" id="phoneNumber" name="phoneNumber" value="<?php echo $_POST['phoneNumber']?>">
    <input type="submit" name="editSubmit" value="Submit">
</form>