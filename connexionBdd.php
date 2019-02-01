<?php 
$user = 'root'; $pass = ''; // ou 'root' ou rien // Data Source Name 
$dsn = "mysql:host=localhost;dbname=ppe2"; //choisir sa table : $dbname= $_POST['dbname']; $dsn = "mysql:host=localhost;dbname=$dbname";

try { //tentative de connexion :  création d’un objet de la classe PDO 
    $dbh= new PDO($dsn, $user, $pass); // S'il y a des erreurs de connexion, un objet PDOException est lancé. 
}  catch (PDOException $e) { // Gestion des erreurs 
    print "Erreur ! :".$e->getMessage()."<br/>"; 
    die(); 
}  
?>