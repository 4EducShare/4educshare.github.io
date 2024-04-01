
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta htt-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Formulaire de connexion</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <section>
        <h1>Créer mon compte</h1>
        <form action="add.php" method="POST">
            <label> Adresse Mail</label>
            <input type="text" name="email" >
            <label> Mot de passe</label>
            <input type="password" name="mdp" >
            <label> Confirmer le mot de passe</label>
            <input type="password" name="mdp2" >
            <input type="submit" value="Créer"  >
</form>
    </section>
</body>
</html>