<html>
 <head>
 <meta charset="utf-8">
 <!-- importer le fichier de style -->
 <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
 </head>
 <body>
 <div id="container">
 <!-- zone de connexion -->
 
 <form action="verification.php" method="POST">
 <h1>Connexion</h1>
 
 <label><b>Nom d'utilisateur</b></label>
 <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

 <label><b>Mot de passe</b></label>
 <input type="password" placeholder="Entrer le mot de passe" name="password" required>

 <input type="submit" id='submit' value='LOGIN' >
 <label><b><a href=creer.php>Créer un compte</a></b></label><br><br>
 <label><b><a href=oubli.php>Mot de passe ou non d'utilisateur oubliés</a></b></label>
 <?php
 if(isset($_GET['erreur'])){
 $err = $_GET['erreur'];
 if($err==1 || $err==2)
 echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
 }
 if($err==3){
 echo "<p style='color:blue'>Votre compte a été crée avec succés vous pouvez se connecter dès maintenant</p>";
}
if($err==4){ 
    echo "<p style='color:orange'>Votre compte est à jour vous pouvez se connecter</p>";
   }
 ?>
 </form>
 </div>
 </body>
</html>