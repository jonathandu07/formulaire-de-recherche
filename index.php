<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion d'un formulaire</title>
</head>
<body>
    <h1>
        Gestion d'un formulaire en PHP
    </h1>
    <form action="" method="get">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" autocomplete="off">

        <input type="submit" value="Soummettre">
    </form>

    <?php
    $users = [
        'izicode',
        'roger',
        'emma',
        'john',
        'lucie'
    ];
    if (!empty($_GET['nom'])){
        echo '<h3>' . 'vous avez recherché le therme: ' . $user . '</h3>';
        echo '<a href="/">' . 'réinitialiser' . "</a>";  
    }
    else{
        echo '<h3>' . 'vous avez recherché liste de tous les utilisateur' . '</h3>';
    }

    foreach ($users as $user){
        if(!empty($_GET['nom'])){
            
            if(str_contains($user, $_GET['nom'])){
                echo '<li>' . $user . "</li>"; 
            }
        }
        else{
            echo '<h3>' . 'vous avez recherché liste de tous les utilisateur'.'</h3>';
            echo '<li>' . $user."</li>";  
        }
        
    }
    ?>
</body>
</html>