<?PHP
    include_once('connexionBdd.php');  
    //On récupere les valeurs du formulaire
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $dateNaissance = $_POST['dateNaissance'];
    $lieuNaissance = $_POST['lieuNaissance'];
    $sexe = $_POST['sexe'];
    $adresse = $_POST['adresse'];
    $cpAdresse = $_POST['cpAdresse'];
    $numeroTelephone = $_POST['numeroTelephone'];
    $email = $_POST['email'];
    $pratiqueSki = $_POST['pratiqueSki'];
    $nomMedaille = $_POST['nomMedaille'];

    $mysqli = mysqli_connect("localhost", "root", "", "ppe2");
    $requete = mysqli_query($mysqli,"SELECT * FROM adherents WHERE nom = '".$nom."' AND prenom = '".$prenom."'");

    if(mysqli_num_rows($requete) == true) {
        echo "Il y à déjà un compte au nom de " .'<b>'. $nom .'</b>'. " et au prenom de " .'<b>'. $prenom .'</b>'.'</br>' . '<a href="../../index.php">Revenir sur le site</a>';

    }else{
        $sql =  "INSERT INTO adherents (prenom,nom,dateNaissance,lieuNaissance,sexe,adresse,cpAdresse,numeroTelephone,email,pratiqueSki,nomMedaille) VALUES ('".$prenom."', '".$nom."', '".$dateNaissance."', '".$lieuNaissance."', '".$sexe."', '".$adresse."', '".$cpAdresse."', '".$numeroTelephone."', '".$email."', '".$pratiqueSki."', '".$nomMedaille."')";
        echo "Fecilitation vous êtes désormais inscrit dans notre club. Vous allez recevoir votre licence d'ici peut." . '</br>' . '<a href="../../index.php">Revenir sur le site</a>';
        $dbh->exec($sql); 
        $dbh=NULL; 
    }
?>