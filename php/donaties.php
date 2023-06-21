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
    



    <?php
    include '../includes/footer.php';
    ?>
</body>

</html>