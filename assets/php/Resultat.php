<?php
    include_once('connexionBdd.php');

    $categorie = $_POST['categorie'];

    $sql =  "SELECT adherents.nom, adherents.prenom, adherents.sexe, fait.resultatTest, categorie.nomCategorie FROM adherents, fait, categorie WHERE categorie.idCategorie = '$categorie'";
    $sth = $dbh->query($sql); 
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    $dbh=NULL; 

    echo '<table border="1" width="100%">';
        echo '<thead>';
            echo '<th>' . '<b>Nom</b>' . '</th>';
            echo '<th>' . '<b>Prenom</b>' . '</th>';
            echo '<th>' . '<b>Sexe</b>' . '</th>';
            echo '<th>' . '<b>Resultat test</b>' . '</th>';
        echo '</thead>';
        echo '<tbody>';
            echo '<tr>';
                echo '<td>'; foreach ($result as $row) { echo $row['nom'] . '<br/>'; } echo '</td>';
                echo '<td>'; foreach ($result as $row) { echo $row['prenom'] . '<br/>'; } echo '</td>';
                echo '<td>'; foreach ($result as $row) { echo $row['sexe'] . '<br/>'; } echo '</td>';
                echo '<td>'; foreach ($result as $row) { echo $row['resultatTest'] . '<br/>'; } echo '</td>';
                echo '<td>'; foreach ($result as $row) { echo $row['nomCategorie'] . '<br/>'; } echo '</td>';
            echo '</tr>';
        echo '</tbody>';
    echo '</table>';
?>