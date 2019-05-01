<?php
    include_once('connexionBdd.php');

    $categorie = $_POST['categorie'];
    
    $sql =  "SELECT nom, prenom, sexe FROM adherents WHERE idCategorie = '$categorie'";
    $sth = $dbh->query($sql); 
    $categorieAdherent = $sth->fetchAll(PDO::FETCH_ASSOC);
    $dbh=NULL; 

    echo '<h1>Participants</h1>';

    echo '<table border="1" width="100%">';
        echo '<thead>';
            echo '<th>' . '<b>Nom</b>' . '</th>';
            echo '<th>' . '<b>Prenom</b>' . '</th>';
            echo '<th>' . '<b>Sexe</b>' . '</th>';
        echo '</thead>';
        echo '<tbody>';
            echo '<tr>';
                echo '<td>'; foreach ($categorieAdherent as $row) { echo $row['nom'] . '<br/>'; } echo '</td>';
                echo '<td>'; foreach ($categorieAdherent as $row) { echo $row['prenom'] . '<br/>'; } echo '</td>';
                echo '<td>'; foreach ($categorieAdherent as $row) { echo $row['sexe'] . '<br/>'; } echo '</td>';
            echo '</tr>';
        echo '</tbody>';
    echo '</table>';
?>