<?PHP
    //Inclusion du fichier contenant la connexion à la base 
    include_once('connexionBdd.php'); 
    //On récupere les valeurs du formulaire
    $email = $_POST['email'];
    $pseudo = $_POST['pseudo'];
    $motPasse = $_POST['motPasse'];
    $confirmMotPasse = $_POST['confirmMotPasse'];
    
    $mysqli = mysqli_connect("localhost", "root", "", "ppe2");
    $requete = mysqli_query($mysqli,"SELECT * FROM inscriptionSite WHERE pseudo = '".$pseudo."'");

    if(mysqli_num_rows($requete) == true) {
        echo "Pseudo déjà utilisé" . '</br>' . '<a href="../../index.php">Revenir sur le site</a>';

    } else{
        $sql =  "INSERT INTO inscriptionSite (email,pseudo,motPasse,confirmMotPasse)  
        VALUES ('".$email."','".$pseudo."','".$motPasse."','".$confirmMotPasse."')";

        echo "Vous avez bien était inscrit" . '</br>' . '<a href="../../index.php">Revenir sur le site</a>';
        $dbh->exec($sql); 
        $dbh=NULL; 
    }
    //Insertion d'un enregistrement 
?>