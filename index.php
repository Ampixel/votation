<?php
session_start()
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Système de Votation</title>
</head>
<body>
    <!-- HEADER -->
    <div class="container">
        <h1>Page d'accueil</h1>
        <div class="row mt-4 text-center">
            <!-- ESPACE CONNECTION -->
            <div>
                <h2>Se connecter</h2>
                <?php 
                if(isset($_GET['error']))
                { ?><p>Problème de connexion</p>
                
                <?php }
                ?>
                <form method="POST" action="trait_connexion.php">
                    <table>
                        <tr>
                            <td>pseudo : </td>
                            <td><input type="text" name="pseudo" placeholder="Toto" required></td>
                        </tr>
                        <tr>
                            <td>Mot de passe : </td>
                            <td><input type="password" name="mdp" placeholder="Ex: *****" required></td>
                        </tr>
                    </table>
                    <div class="mt-4">
                        <input type="submit" value="Connexion" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>