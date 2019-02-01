<?PHP
    //Inclusion du fichier contenant la connexion à la base 
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

    //Insertion d'un enregistrement 
    $sql =  "INSERT INTO inscriptionForm (prenom,nom,dateNaissance,lieuNaissance,sexe,adresse,cpAdresse,numeroTelephone,email,pratiqueSki,nomMedaille)  
        VALUES ('".$prenom."','".$nom."','".$dateNaissance."','".$lieuNaissance."','".$sexe."','".$adresse."','".$numeroTelephone."','".$email."','".$pratiqueSki."','".$nomMedaille."')"; 
    //Exécution de la requête 
    $dbh->exec($sql); 
    $dbh=NULL; 
?>