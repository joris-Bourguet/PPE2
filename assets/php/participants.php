<?php
    include_once('connexionBdd.php');

    $categorie = $_POST['categorie'];
    
    $sql =  "SELECT nom, prenom, sexe, pratiqueSki, nomMedaille FROM adherents WHERE nomMedaille = '$categorie'";
    $sth = $dbh->query($sql); 
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    $dbh=NULL; 

    echo '<table border="1">';
        echo '<thead>';
            echo '<th>' . '<b>Nom</b>' . '</th>';
            echo '<th>' . '<b>Prenom</b>' . '</th>';
            echo '<th>' . '<b>Sexe</b>' . '</th>';
            echo '<th>' . '<b>Déjà pratiqué</b>' . '</th>';
            echo '<th>' . '<b>Nom medaille</b>' . '</th>';
        echo '</thead>';
        echo '<tbody>';
            echo '<tr>';
                echo '<td>'; foreach ($result as $row) { echo $row['nom'] . '<br/>'; } echo '</td>';
                echo '<td>'; foreach ($result as $row) { echo $row['prenom'] . '<br/>'; } echo '</td>';
                echo '<td>'; foreach ($result as $row) { echo $row['sexe'] . '<br/>'; } echo '</td>';
                echo '<td>'; foreach ($result as $row) { echo $row['pratiqueSki'] . '<br/>'; } echo '</td>';
                echo '<td>'; foreach ($result as $row) { echo $row['nomMedaille'] . '<br/>'; } echo '</td>';
            echo '</tr>';
        echo '</tbody>';
    echo '</table>';
?>