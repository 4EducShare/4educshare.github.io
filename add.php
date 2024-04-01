<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>
Test Formulaire 
</title>
</head>
<body>
<?php $servername = "localhost";
$username = "root";
$password = "rootroot";
$dbname = "root";
$email=$_POST['email'];
$mdp=$_POST['mdp'];

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die(mysqli_connect_error());

}
    // Créer une connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);
   // $conn = mysqli_connect($servername, $username, $password, $dbname);
   /* if (!$conn->connect_error) {
        die("La connexion a échoué : " . $conn->connect_error);
    }
*/
  //  if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Vérifier si le fichier a été correctement uploadé
       
$sql = "INSERT INTO utilisateur(nom_utilisateur,mot_de_passe )VALUES ('$email','$mdp')";
                if ($conn->query($sql) === TRUE) {
//echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>"¨;
                   //echo "Votre compte a été creé avec succés pour l'accéder il faut retourner à la page principale de notre site.";
                   header("Location:Login.php?erreur=3");
                } else {
                    echo "Une erreur est survenue lors de la création de votre compte merci d'essayer ultérierement : " . $conn->error;
                }
            
    //    }
    
    // Fermer la connexion à la base de données
    $conn->close();
    ?>
