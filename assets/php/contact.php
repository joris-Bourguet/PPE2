<?php
include_once('connexionBdd.php');
 
    //On récupere les valeurs du formulaire
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    //Inclusion du fichier contenant la connexion à la base 

    //Insertion d'un enregistrement 
    $sql =  "INSERT INTO contact (nom, email, message)  
        VALUES ('".$nom."','".$email."','".$message."')"; 
    //Exécution de la requête 
    $dbh->exec($sql); 
    $dbh=NULL; 

    header('Location: ../../index.php#three');
?>