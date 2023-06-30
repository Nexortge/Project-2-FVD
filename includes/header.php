<?php
$current_page = basename($_SERVER['PHP_SELF']);

$pages = array(
    'index.php' => 'Home',
    'donaties.php' => 'About',
    'contact.php' => 'Contact',
    'nieuws.php' => 'Nieuws brief',
    'stand.php' => 'Stand punten',
    'leden.php' => 'Leden'
);

function isCurrentPage($page)
{
    global $current_page;
    return ($current_page === $page) ? 'active' : '';
}
?>

<body>
    <script src="../js/menu.js" defer></script>
    <script src="/js/menu.js" defer></script>
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
    <div id="menu-items">
        <ul>
            <li class="<?php echo isCurrentPage('index.php'); ?>"><a href="index.php">Home</a></li>
            <li class="<?php echo isCurrentPage('donaties.php'); ?>"><a href="donaties.php">Donaties</a></li>
            <li class="<?php echo isCurrentPage('contact.php'); ?>"><a href="contact.php">Contact</a></li>
            <li class="<?php echo isCurrentPage('nieuws.php'); ?>"><a href="nieuws.php">Nieuwsbrief</a></li>
            <li class="<?php echo isCurrentPage('stand.php'); ?>"><a href="stand.php">Standpunten</a></li>
            <li class="<?php echo isCurrentPage('leden.php'); ?>"><a href="leden.php">Leden</a></li>
        </ul>
    </div>

    <div class="hamburger-menu">
        <div></div>
        <div></div>
        <div></div>
    </div>
</body>