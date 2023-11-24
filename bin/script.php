<?php

// change this path with your GitHub repository name
$repos = "/2309-PHP-LYON-P2-trombi";

//list the php files from root directory that must be converted.
//important: do not write the extension .php
$files = [
    "index",
    "indexWilders",
    "_footer",
    "_head",
    "_header",
];

foreach ($files as $file) {
    $fileInputPath = $file . '.php';
    $fileOutputPath = 'docs/' . $file . '.html';
    shell_exec('php ' . $fileInputPath . ' > ' . $fileOutputPath);
    $handle = fopen($fileOutputPath, "r");
    $contents = fread($handle, filesize($fileOutputPath));
    fclose($handle);
    
    $contents = str_replace('href="', 'href="' . $repos, $contents);
    $contents = str_replace('.php', '.html', $contents);
    
    $handle = fopen($fileOutputPath, "w");
    fwrite($handle, $contents);
    fclose($handle);
}
