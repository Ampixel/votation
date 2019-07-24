<?php
session_start();
require('src/connection.php');
// include('proposition/trait_proposition.php');
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
        <div class="row">
            <h1 class="col-md-10">Bonjour <?= $_SESSION['pseudo'] ?></h1>
            <div class="col-md-2 mt-3"><a href="disconnection.php">Déconnexion</a></div>
        </div>
        <hr>
        <!-- VOS PROPOSITION -->
        <div class="mt-4">
            <h2>Vos propositions : </h2>
            <p>Nombre de propositions: </p>
            <div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titre</th>
                            <th scope="col">Soumise au vote</th>
                            <th scope="col">Pour</th>
                            <th scope="col">Contre</th>
                            <th scope="col">Modifier</th>
                            <th scope="col">Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = $db->prepare('SELECT * FROM proposition WHERE id_user = :id');
                        $query->bindValue(":id", $_SESSION['id_user']);
                        $query->execute();
                        $prop = $query->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($prop as $proposition => $props) { ?>
                            <tr>
                                <th scope="row"><?php echo $props['id'] ?></th>
                                <td><?php echo $props['title'] ?></td>
                                <td> boolean vote  </td>
                                <td> nbr pour </td>
                                <td> nbr contre </td>
                                <td><a role="button" class="btn btn-primary" href="update-prop.php?id=<?php echo $props['id']; ?>">Modifier</a></td>
                                <td><a role="button" class="btn btn-danger" href="delete-prop.php?id=<?php echo $props['id']; ?>">Supprimer</a></td>
                            </tr>
                <?php
                }
                ?>
                     </tbody>
                    </table>
            </div>
            <a role="button" class="btn btn-success" href="create-prop.php">Ajouter une proposition</a>
        </div>
        <hr>
        <!-- PROPOSITION VOTE -->
        <div class="mt-4">
            <h2>Propositions soumises au vote : </h2>
            <hr>
            <div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Utilisateur</th>
                            <th scope="col">Titre</th>
                            <th scope="col">Déjà voté</th>
                            <th scope="col">Pour</th>
                            <th scope="col">Contre</th>
                            <th scope="col">Voir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = $db->query('SELECT * FROM proposition ');
                        $prop = $query->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($prop as $proposition => $props) { ?>
                            <tr>
                                <th scope="row"><?php echo $props['id'] ?></th>
                                <td><?php echo $props['id_user'] ?></td>
                                <td><?php echo $props['title'] ?></td>
                                <td> nbr de vote </td>
                                <td> nbr pour </td>
                                <td>nbr de contre</td>
                                <td><a role="button" class="btn btn-primary" href="#">Voir</a></td>
                            </tr>
                <?php
                }
                ?>
                     </tbody>
                    </table>
            </div>
        </div>
    </div>
</body>

</html>