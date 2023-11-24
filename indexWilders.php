<?php
include 'function.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/wilders.css">
    <script src="https://kit.fontawesome.com/9fbc16b7ca.js" crossorigin="anonymous"'></script>
    <title>Page des wilders</title>
</head>
<body>
    <nav class="navbar-mobile">
   <i class="fa-solid fa-bars"></i>
        <div class="nav-list-mobile">
           <li> <a href="/index.php">Home</a></li>
            <li><a href="/indexWilders.php">Wilders</a></li>
            <ul> <li> <a hhref="./wildersAmina.html">Amina</a></li>
            <li> <a hhref="./wildersBenjamin.html">Benjamin</a></li>
            <li> <a hhref="./wildersVictor.html">Victor</a></li>
            <li> <a hhref="./wildersThomas.html">Thomas</a></li>
            <li> <a hhref="./wildersPaul.html">Paul</a></li>
            <li> <a hhref="./wildersMerwan.html">Merwan</a></li>
            <li> <a hhref="./wildersNicky.html">Nicky</a></li>
            <li> <a hhref="./wildersPlouis.html">Pierre-Louis</a></li>
            <li> <a hhref="./wildersRyad.html">Ryad</a></li>
            <li> <a hhref="./wildersAude.html">Aude</a></li>
            <li> <a hhref="./wildersRomain.html">Romain</a></li></ul>
           <li> <a href="./aboutus.html">A propos</a></li>
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