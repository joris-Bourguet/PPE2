<?PHP
    include_once('connexionBdd.php');  
    //On récupere les valeurs du formulaire
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $dateNaissance = $_POST['dateNaissance'];
    $sexe = $_POST['sexe'];
    $adresse = $_POST['adresse'];
    $cp = $_POST['cp'];
    $ville = $_POST['ville'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $idCategorie = $_POST['idCategorie'];

    $mysqli = mysqli_connect("localhost", "root", "", "testppe2");
    $requete = mysqli_query($mysqli,"SELECT * FROM adherents WHERE nom = '".$nom."' AND prenom = '".$prenom."'");

    if(mysqli_num_rows($requete) == true) {
        echo "Il y à déjà un compte au nom de " .'<b>'. $nom .'</b>'. " et au prenom de " .'<b>'. $prenom .'</b>'.'</br>' . '<a href="../../index.php">Revenir sur le site</a>';

    }else{
        $sql =  "INSERT INTO adherents (prenom, nom, dateNaissance, sexe, adresse, cp, ville, telephone, email, idCategorie) 
        VALUES ('".$prenom."', '".$nom."', '".$dateNaissance."', '".$sexe."', '".$adresse."', '".$cp."', '".$ville."', '".$telephone."', '".$email."', '".$idCategorie."')";
        echo "Fecilitation vous êtes désormais inscrit dans notre club. Vous allez recevoir votre licence d'ici peut." . '</br>' . '<a href="../../index.php">Revenir sur le site</a>';
        $dbh->exec($sql); 
        $dbh=NULL;
    }
?>