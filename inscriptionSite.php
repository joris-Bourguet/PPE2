<?PHP
    //Inclusion du fichier contenant la connexion à la base 
    include_once('connexionBdd.php'); 
    //On récupere les valeurs du formulaire
    $email = $_POST['email'];
    $pseudo = $_POST['pseudo'];
    $motPasse = $_POST['motPasse'];
    $confirmMotPasse = $_POST['confirmMotPasse'];

    //Insertion d'un enregistrement 
    $sql =  "INSERT INTO inscriptionSite (email,pseudo,motPasse,confirmMotPasse)  
        VALUES ('".$email."','".$pseudo."','".$motPasse."','".$confirmMotPasse."')"; 
    //Exécution de la requête
    header('Location: index.php');
    $dbh->exec($sql); 
    $dbh=NULL; 
?>