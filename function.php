<?php

$findit = [
    "/index.php"=> "Accueil",
    "/product.php" => "Produits",
    "/contact.php" => "Contact"
];
function changeTitle ($findit){
    foreach ($findit as $menu => $link) {
        if ($_SERVER["REQUEST_URI"] === $link[0]){
            echo "<title>$menu </title>";
        }
    }
}


