
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
<?php
    $retour = mail('4EducShare@gmail.com', 'Envoi depuis la page Contact du 4EducShare'/*.'//'.$_POST['email']*/,$_POST['Email'].' a envoyé le message suivant :'.$_POST['Commentaires'].'message envoyé par:  '.$_POST['Email']." Nom   :".$_POST['Nom']."Prenom :".$_POST['Prenom']." Ville :".$_POST['Ville']."Pays :".$_POST['Pays'] );/* 'From: 4EducShare' From: '.$_POST['email']*/
    if ($retour)
        echo '<p>Votre message a bien été envoyé.</p>';
    else {
           echo '<p>Votre message n\' a pas bien été envoyé.</p>'; # code...
        }
    ?>

</body>
</html>
   
