<?php
include_once('connexionBdd.php');

$categorie = $_POST['categorie'];

$sql = "SELECT COUNT(*) AS 'effectif' FROM adherents WHERE idCategorie = '$categorie'";
$sth = $dbh->query($sql); 
$result = $sth->fetchAll(PDO::FETCH_ASSOC);
$dbh=NULL; 

foreach ($result as $row) 
{
    echo 'il y à ';echo $row['effectif']; echo ' adherent dans la categorie '; echo $categorie; 
}

?>