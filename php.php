
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
$NOM=$_POST['Nom'];
$PRENOM=$_POST['Prenom'];
$AGE=$_POST['Age'];
$PAYS=$_POST['Pays'];
$VILLE=$_POST['Ville'];
$EMAIL=$_POST['Email'];
$TELEPHONE=$_POST['Telephone'];
$NATIONALITE=$_POST['Nationalite'];
$COMMENTAIRES=$_POST['Commentaires'];
$FILE= $_FILES['file']['tmp_name'];
$FILEE= $_FILES['filee']['tmp_name'];
$namefile=$_FILES['file']['name'];
/*    $_FILES[‘mon_fichier’][‘tmp_name’] : le nom temporaire du fichier sur le serveur
    $_FILES[‘mon_fichier’][‘name’] : le nom original du fichier sur la machine cliente
    $_FILES[‘mon_fichier’][‘type’] : le type MIME du fichier
    $_FILES[‘mon_fichier’][‘size’] : la` taille du fichier
 */
// Create connection
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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Vérifier si le fichier a été correctement uploadé
        if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
            $targetDir = "./Filee/";
            $targetFile = $targetDir . basename($_FILES["file"]["name"]);
            $targetFilee = $targetDir . basename($_FILES["filee"]["name"]);
            // Déplacer le fichier uploadé vers le répertoire cible
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile) ) {
             
                // Insérer le chemin du fichier dans la base de données
$sql = "INSERT INTO Table1(Nom,Prenom,Age,Pays,Ville,Email,Telephone,Nationalite,Commentaires,filee,nomfile)
VALUES ('$NOM','$PRENOM','$AGE','$PAYS','$VILLE','$EMAIL','$TELEPHONE','$NATIONALITE','$COMMENTAIRES','$FILE','$namefile')";
                if ($conn->query($sql) === TRUE) {
                    move_uploaded_file($_FILES["filee"]["tmp_name"], $targetFilee);   
                //print_r($_FILES[file]);
                $retour = mail('4EducShare@gmail.com', 'Envoi depuis la page Contact du 4EducShare'/*.'//'.$_POST['email']*/,$_POST['email'].' a envoyé le message suivant :'.$_POST['message'].'message envoyé par:  '.$_POST['email'], 'From: 4EducShare');/*From: '.$_POST['email']*/
                echo "Votre message a bien été envoyé";
                //echo "Les fichiers ont été uploadé et enregistré dans la base de données.";

                } else {
                    echo "Une erreur est survenue lors de l'insertion dans la base de données : " . $conn->error;
                }
            } else {
                echo "Une erreur est survenue lors de l'upload du fichier.";
            }
        } else {
            echo "Une erreur est survenue lors de l'upload du fichier.";
        }
    }
    // Fermer la connexion à la base de données
    $conn->close();
    ?>
