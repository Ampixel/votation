<?php
// DELETE
session_start();
require 'delprop.php';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Supprimer une proposition</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">

</head>

<body>
    <h1>Supprimer une proposition</h1>
    <div>
        <form method="POST" action="delprop.php?id=<?php echo $id; ?>">
            <input type="hidden" name="id" value="<?php echo $id;?>"/>
            <p>Êtes-vous sûr de vouloir supprimer ?</p>
            <button type="submit">Oui</button>
            <a href="dashboard.php">Non</a>
        </form>
    </div>

</body>

</html>