<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/donaties.css">
    <title>FVD</title>
</head>

<body>
    <?php
    include '../includes/header.php';
    ?>
    <div id="head-currency">
        <h1>Doneer nu!</h1>
        <form action="#">
            <select name="currency" id="currency">
                <option value="1">EUR (€)</option>
                <option value="2">USD ($)</option>
                <option value="3">YPY (¥)</option>
                <option value="4">GBP (£)</option>
            </select>
        </form>
    </div>
    <div class="doneer-hoeveelheid">
        <input type="button" value="€10">
        <input type="button" value="€20">
        <input type="button" value="€30">
        <input type="button" value="€60">
        <div>
            <input type="button" value="€" id="poepende-mensen">
            <input type="number" name="andere-hoeveelheid" id="schijtende-mensen" placeholder="Andere hoeveelheid">
        </div>

    </div>
    <p id="kies-betaal">Kies een betaal methode</p>
    <svg id="lock-logo" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="m400 224h-24v-72c0-83.8-68.2-152-152-152s-152 68.2-152 152v72h-24c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-192c0-26.5-21.5-48-48-48zm-104 0h-144v-72c0-39.7 32.3-72 72-72s72 32.3 72 72z"/></svg>
    <p id="veilig">Veilig betalen</p>


    <?php
    include '../includes/footer.php';
    ?>
</body>

</html>