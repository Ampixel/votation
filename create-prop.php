<?php 
session_start();
//require('addprop.php');
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Ajouter une proposition</title>
</head>

<body>
    <div class="container mt-4">
        <h1>Soumettre une nouvelle proposition</h1>
        <form action="addprop.php" method="POST">
            <div class="form-group">
                <label for="titre">Titre : </label>
                <input class="form-control" type="text" name="title" id="title" placeholder="Entrez le titre de votre proposition">
            </div>
            <div class="form-group">
                <label for="propostion">Texte : </label>
                <textarea class="form-control" id="text" name="texte" placeholder="Entrez votre proposition ici" rows="3"></textarea>
                <small id="emailHelp" class="form-text text-muted mt-2">Lorque vous créez une proposition, vous votez forcément pour elle.</small>
            </div>
            <button class="btn btn-primary mt-2" type="submit">Créer la proposition</button>
            <div class="mt-2">
                <a href="dashboard.php">Retourner au tableau de bord</a>
            </div>
        </form>
    </div>

</body>

</html>