<!-- Navbar -->
<?php
$menuNavigation = [
    'Accueil' => 'index.php',
    'Produits' => 'product.php',
    'Contact' => 'contact.php'
]
?>
<?php
$path = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$current = basename ($path);
?>
<nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top">
    <a href="index.php"><img class="glogo" src="images/glogo.png" "alt="logo greenness"></a>
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-center" id="navbarNav">
        <ul class="navbar-nav ml-auto mr-auto">
            <?php foreach ($menuNavigation as $menu => $link) {
                echo "<li><a class ='nav-link' href ='$link'>$menu</a> </li>";
            }
            ?>
        </ul>
    </div>
    <div id="panier">
        <div id="basket-container" class="position-relative">
            <span class="position-absolute fa fa-shopping-basket fa-lg"></span>
            <span id="nbItems"></div>
    </div>
    </div>
</nav>

