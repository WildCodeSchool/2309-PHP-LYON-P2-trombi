<?php
include 'function.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/2309-PHP-LYON-P2-trombi/assets/css/wilders.css">
    <script src="https://kit.fontawesome.com/9fbc16b7ca.js" crossorigin="anonymous"></script>
    <title>Page des wilders</title>
</head>
<body>
    <nav class="navbar-mobile">
   <i class="fa-solid fa-bars"></i>
        <div class="nav-list-mobile">
           <li> <a href="/2309-PHP-LYON-P2-trombi/">Home</a></li>
            <li><a href="/2309-PHP-LYON-P2-trombi/indexwilders.html">Wilders</a></li>
            <ul> <li> <a href="/2309-PHP-LYON-P2-trombi/wildersAmina.html">Amina</a></li>
            <li> <a href="/2309-PHP-LYON-P2-trombi/wildersBenjamin.html">Benjamin</a></li>
            <li> <a href="/2309-PHP-LYON-P2-trombi/wildersVictor.html">Victor</a></li>
            <li> <a href="/2309-PHP-LYON-P2-trombi/wildersThomas.html">Thomas</a></li>
            <li> <a href="/2309-PHP-LYON-P2-trombi/wildersPaul.html">Paul</a></li>
            <li> <a href="/2309-PHP-LYON-P2-trombi/wildersMerwan.html">Merwan</a></li>
            <li> <a href="/2309-PHP-LYON-P2-trombi/wildersNicky.html">Nicky</a></li>
            <li> <a href="/2309-PHP-LYON-P2-trombi/wildersPlouis.html">Pierre-Louis</a></li>
            <li> <a href="/2309-PHP-LYON-P2-trombi/wildersRyad.html">Ryad</a></li>
            <li> <a href="/2309-PHP-LYON-P2-trombi/wildersAude.html">Aude</a></li>
            <li> <a href="/2309-PHP-LYON-P2-trombi/wildersRomain.html">Romain</a></li></ul>
           <li> <a href="/2309-PHP-LYON-P2-trombi/aboutus.html">A propos</a></li>
        </div>
    </nav>
    <main>
        <div class="containers">
        <?php showWilders() ?> 
        </div>
    </main>
             <script src="index.js">
             </script>
    </body>

</html>