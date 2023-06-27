<?php
include "dbhandler.php";

$db = new dbHandler();
if (isset($_POST['editSubmit'])) {
    $db->editUser($_POST['id'], $_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['password'], $_POST['phoneNumber']);
}
if (isset($_POST['delete'])) {
    $db->deleteUser($_POST['delete']);
}
if (isset($_POST['createSubmit'])) {
    $db->createUser($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['password'], $_POST['phoneNumber']);
}

$users = $db->getAllUsers();
?>
<link rel="stylesheet" href="../css/includes.css">
<link rel="stylesheet" href="/css/includes.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
<div class="header">
    <div class="logo-text">
        <img id="logo-img" src="../assets/FVD.png" alt="logo">
        <h1>Forum voor democratie</h1>
    </div>
</div>
<h1>FVD gebruikers</h1>
<table>
    <tr>
        <th>id</th>
        <th>voornaam</th>
        <th>achternaam</th>
        <th>email</th>
        <th>password</th>
        <th>telefoonnummer</th>
    </tr>
    <?php foreach ($users as $user) {
        echo "<tr>";
        foreach ($user as $column) {
            echo "<td>" . $column . "</td>";
        }
        echo "<td><form action='edit.php' method='POST'>
        <input type='text' hidden name='id' value='$user[id]'>
        <input type='text' hidden name='firstName' value='$user[firstName]'>
        <input type='text' hidden name='lastName' value='$user[lastName]'>
        <input type='text' hidden name='email' value='$user[email]'>
        <input type='text' hidden name='password' value='$user[password]'>
        <input type='text' hidden name='phoneNumber' value='$user[phoneNumber]'>
        <button type='submit' name='table' value='users'>Edit</button></form></td>
        <td><form action='#' method='POST'><button type='submit' name='delete' value='$user[id]'>Delete</button></form></td></tr>";
    }
    ?>
</table>

<form action="create.php" method="POST" style="margin: 0 auto;">
    <button type="submit">Create</button>
</form>