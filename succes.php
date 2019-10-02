<?php include_once 'header.php';
include_once 'function.php'?>
    <!doctype html>
    <body>
<?php include_once 'navbar.php'; ?>

<div class="confirmation">
    <p>Bonjour <?php echo  $_GET['name']. " ".$_GET['prénom'];?></p><p>Nous avons bien reçu votre mail et revenons vers vous au plus vite.</p>
</div>
<div style="height: 400px;">
</div>


<?php include_once 'footer.php';
include_once 'age_check.php'; ?>
</body>
</html>
