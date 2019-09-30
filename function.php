<?php
/* Tableau Navbar */
$menuNavigation = [
    'Accueil' => 'index.php',
    'Produits' => 'product.php',
    'Contact' => 'contact.php',
];

/*titre */
$pages = [
    "/index.php"=> "Accueil",
    "/product.php" => "Produits",
    "/contact.php" => "Contact",
    "/succes.php" => "Succes"
];

/*fonction titre */
function displayTitre($page) {
    $currentPages = $_SERVER["REQUEST_URI"];
    $title = $page[$currentPages];
    echo   "<title> $title </title>";

}

/*fonction pour menu*/
function navbarOne($tableau)
{

    foreach ($tableau as $menu => $link) {
        echo "<li><a class ='nav-link' href ='$link'>$menu</a> </li>";

    }
}
/*tableau Formulaire */

$arrayForm = [
    'Nom',
    "Prénom",
    'Email',
    'Télephone',
];
/* fonction pour ajout d'un champ dans le formulaire*/

function contactTop($tableauTwo)
{
    foreach ($tableauTwo as $users) {
        echo " <label for= name> $users: </label>";
        echo "<input type=text name=$users  class=form-control>";
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (empty($_POST['$users'])) {
                echo "Veuillez rentrer vos informations";
            } else {
                header('Location: succes.php');
            }
        }

    }
}