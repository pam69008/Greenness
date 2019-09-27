<?php

$errors = [];
if(!array_key_exists('Nom',$_POST)|| $_POST['Nom']==''AND $_POST['valider']){
    $errors['Nom'] = "Vous n'avez pas renseigné votre Nom";
}
if(!array_key_exists('Prénom',$_POST)|| $_POST['Prénom']==''){
    $errors['Prénom'] = "Vous n'avez pas renseigné votre Prénom";
}
if(!array_key_exists('Email',$_POST)|| $_POST['Email']==''){
    $errors['Email'] = "Vous n'avez pas renseigné votre Email";
}
if(!array_key_exists('Téléphone',$_POST)|| $_POST['Téléphone']==''){
    $errors['Téléphone'] = "Vous n'avez pas renseigné votre numéro";
}
if(!empty($errors)){
    session_start();
    $_SESSION['errors'] = $errors;
}




