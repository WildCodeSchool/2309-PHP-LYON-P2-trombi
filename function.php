<?php

function showWilders()
{
    $images = array(
        './assets/images/wilders/aminav2.png',
        './assets/images/wilders/victorv2.png',
        './assets/images/wilders/thomasv2.png',
        './assets/images/wilders/merwanv2.png',
        './assets/images/wilders/benjaminv2.png',
        './assets/images/wilders/paulv2.png',
        './assets/images/wilders/nickyv2.png',
        './assets/images/wilders/audev2.png',
        './assets/images/wilders/wilders.png',
        './assets/images/wilders/ryadv2.png',
        './assets/images/wilders/pierrelouisv2.png',
        './assets/images/wilders/romainv2.png',

    );

    $links = array(
        './wildersAmina.html',
        './wildersVictor.html',
        './wildersThomas.html',
        './wildersMerwan.html',
        './wildersBenjamin.html',
        './wildersPaul.html',
        './wildersNicky.html',
        './wildersAude.html',
        './aboutus.html',
        './wildersRyad.html',
        './wildersPlouis.html',
        './wildersRomain.html',

    );

    for ($i = 0; $i < count($images); $i++) {

        echo "<a href =  '$links[$i]' ><img src= '$images[$i]'/></a> ";
    };
};
