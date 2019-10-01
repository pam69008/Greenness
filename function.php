<?php
/* Tableau Navbar */
$menuNavigation = [
    'Accueil' => 'index.php',
    'Produits' => 'product.php',
    'Contact' => 'contact.php',
];

/*titre */
$pages = [
    "/index.php" => "Accueil",
    "/product.php" => "Produits",
    "/contact.php" => "Contact",
    "/succes.php" => "Succes"
];

/*fonction titre */
function displayTitre($page)
{
    $currentPages = $_SERVER["REQUEST_URI"];
    $title = $page[$currentPages];
    echo "<title> $title </title>";

}

/*fonction pour menu*/
function navbarOne($tableau)
{

    foreach ($tableau as $menu => $link) {
        echo "<li><a class ='nav-link' href ='$link'>$menu</a> </li>";

    }
}




/* fonction pour ajout d'un champ dans le formulaire*/
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$nameErrors="";
$name=$firstname=$email=$phone="";
function errors($tableauTwo)
{
        if ($_POST) {
            $errors = 0;
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                if (empty($_POST[$tableauTwo[0]])) {
                    $nameErrors ="Le nom est invalide ";
                    $errors++;

                }

                else {
                    $name = test_input($_POST[$tableauTwo[0]]);
                }
                if (empty($_POST[$tableauTwo[1]])) {
                    $nameErrors = "Le prénom est invalide";
                    $errors++;


                } else {
                    $firstname = test_input($_POST[$tableauTwo[1]]);
                }
                if (empty($_POST[$tableauTwo[2]])) {
                    $nameErrors = "Le mail est invalide";
                    $errors++;

                } else {
                    $email = test_input($_POST[$tableauTwo[2]]);
                }
                if (empty($_POST[$tableauTwo[3]])) {
                    $nameErrors = "Le téléphone est invalide";
                    $errors++;

                } else {
                    $phone = test_input($_POST[$tableauTwo[3]]);
                }

            }
            if (!$nameErrors) {
                header('location: /succes.php');
            }else{
                echo $nameErrors;
            }
        }

}

/*tableau Formulaire */
$arrayForm = [
    'Nom',
    "Prénom",
    'Email',
    'Télephone',
];

function contactTop($tableauThree){
    foreach($tableauThree as $users){
    echo " <label for= name> $users: </label>";
    echo "<input type=text name=$users  class=form-control>";
}
}
