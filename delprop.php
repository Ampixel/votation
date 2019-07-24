<?php
require_once('src/connection.php');

$id = isset($_GET['id']) ? $_GET['id'] : false;


//DELETE UNE PROPOSITION
if(!empty($_POST))
{
    $req = $db->prepare('DELETE FROM proposition WHERE id = :id'); //:id sans "" car ce n'est pas un string
    $req->execute(array(
        ':id'=>$id
    ));

    header('location: dashboard.php');
    exit();
}
    
    


