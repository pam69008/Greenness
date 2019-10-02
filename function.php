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

    $currentPages = $_SERVER["SCRIPT_NAME"];
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

/*fonctions message erreurs*/
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$name=$firstname=$email=$phone="";
/*tableau Formulaire */
$arrayForm = [
    'Nom',
    "Prénom",
    'Email',
    'Télephone',
];
function errors($tableauTwo)
{
    $nameErrors=[];
        if ($_POST) {

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                if (empty($_POST[$tableauTwo[0]])) {
                    $nameErrors[0] ="Le nom est invalide ";


                }

                else {
                    $name= test_input($_POST[$tableauTwo[0]]);
                }
                if (empty($_POST[$tableauTwo[1]])) {
                    $nameErrors[1]= "Le prénom est invalide";



                } else {
                    $firstname = test_input($_POST[$tableauTwo[1]]);
                }
                if (empty($_POST[$tableauTwo[2]])) {
                    $nameErrors[2] = "Le mail est invalide";


                } else {
                    $email = test_input($_POST[$tableauTwo[2]]);
                }
                if (empty($_POST[$tableauTwo[3]])) {
                    $nameErrors[3] = "Le téléphone est invalide";


                } else {
                    $phone = test_input($_POST[$tableauTwo[3]]);
                }

            }
            var_dump($nameErrors);
            if  (isset($nameErrors)) {
                header('location: /succes.php?name='. $_POST[$tableauTwo[0]].'&prénom='. $_POST[$tableauTwo[1]]);
            }else{
                foreach ($nameErrors as $key){
                  echo  "<div class='alert alert-danger' role='alert'>";
                  echo $key;
                    echo "<br>";
                    echo "</div>";
                }
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
/* fonction pour ajout d'un champ dans le formulaire*/
function contactTop($tableauThree){
    foreach($tableauThree as $users){
    echo " <label for= name> $users: </label>";
    echo "<input type=text name=$users  class=form-control>";
}
}


