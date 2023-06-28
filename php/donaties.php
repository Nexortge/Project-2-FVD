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
    <div id="betalen-text">
        <p id="kies-betaal">Kies een betaal methode</p>
        <div id="veilig-betalen">
            <svg id="lock-logo" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                <path d="m400 224h-24v-72c0-83.8-68.2-152-152-152s-152 68.2-152 152v72h-24c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-192c0-26.5-21.5-48-48-48zm-104 0h-144v-72c0-39.7 32.3-72 72-72s72 32.3 72 72z" />
            </svg>
            <p id="veilig">Veilig betalen</p>
        </div>
        <div id="betaal-buttons">
            <button id="paypal-button">PayPal</button>
            <button id="ideal-button">Ideal</button>
        </div>

        <div>
            <img src="../assets/freek-vonk.jpg" alt="freekvonk" class="freek">
        </div>

        <h1>Lorem ipsum dolor samet</h1>
        <p id="info-text">Lorem ipsum dolor sit amet consectetur. Viverra id amet in odio enim venenatis nulla.
            Sit lorem pellentesque egestas eget pretium mattis. Neque risus vulputate vitae nec lectus commodo
            eget proin purus. Eget nisl sit auctor ullamcorper. Odio euismod vestibulum mi pulvinar. Porta vitae
            quam tempor phasellus. Aenean varius est hac facilisis pellentesque sit pulvinar
            facilisis sollicitudin. Dignissim tempus consequat faucibus velit quam convallis. At aliquet et
            sed praesent laoreet amet donec rutrum nunc. Viverra ultricies ac non hac volutpat purus risus pretium
            onec elit sit sed eros. Lobortis vel sodales suscipit scelerisque. Vel dictum diam hendrerit nam mi arcu.</p>
        <img src="../assets/obama.png" alt="obama" srcset="" id="obama-image">
    </div>



    <?php
    include '../includes/footer.php';
    ?>
</body>

</html>