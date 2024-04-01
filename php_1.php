
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
$dbname = "mydb";
$NOM=$_POST['Nom'];
$PRENOM=$_POST['Prenom'];
$EMAIL=$_POST['Email'];
$TELEPHONE=$_POST['Telephone'];
$AGE=$_POST['Age'];
$NATIONALITE=$_POST['Nationalite'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die(mysqli_connect_error());
}
$sql = "INSERT INTO Table1(Nom,Prenom,Email,Telephone,Age,Nationalite)
VALUES ('$NOM','$PRENOM','$EMAIL','$TELEPHONE','$AGE','$NATIONALITE')";
if (mysqli_query($conn, $sql)) {
  echo "Merci beaucoup ,votre information sont envoyés avec succès";
} else {
  echo "Error:";
}
?>
<div class="container"></div>
<h1> Merci pour remplir ce formulaire et pour votre temps   </h1>
<div class="container"></div>
</body>
</html>