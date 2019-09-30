<?php
/* Tableau Navbar */
$menuNavigation = [
    'Accueil' => 'index.php',
    'Produits' => 'product.php',
    'Contact' => 'contact.php',



];

/* Tableau Contact */

$arrayForm = [
    'Nom', "Prénom", 'Email', 'Télephone',
];


/*fonction pour menu*/
function navbarOne($tableau)
{

    foreach ($tableau as $menu => $link) {
        echo "<li><a class ='nav-link' href ='$link'>$menu</a> </li>";

    }
}

/* fonction pour formulaire de contact */
  function contactTop($tableauTwo)
  {
      foreach ($tableauTwo as $users) {
          echo " <label for= name> $users: </label>";
          echo "<input type=text name=$users  class=form-control>";
          if ($_SERVER["REQUEST_METHOD"] === "POST") {
              if (empty($_POST['$users'])) {
                  echo "Veuillez rentrer vos informations";
              } else {
                  header('Location: contact.php');
              }
          }
      }
  }


