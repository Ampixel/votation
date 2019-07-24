<?php
require_once('src/connection.php');

// VARIABLE
$title = isset($_POST['title']) ? $_POST['title'] : false;
$texte = isset($_POST['texte']) ? $_POST['texte'] : false; 
$id = isset($_GET['id']) ? $_GET['id'] : false;
// $variable = condition ? true : false; explication -> ? = if : = else


//UPDATE UNE PROPOSITION
if (!empty($_POST)) {
$req = $db->prepare('UPDATE proposition SET title = :title, texte = :texte WHERE id = :id');
    $req->execute(array(
        ':title' => $title,
        ':texte' => $texte,
        ':id'=>$id
    ));

header('location: dashboard.php');
} else {

//RECUPERER LA PROP0SITION
$req= $db->prepare('SELECT * FROM proposition WHERE id = :id');
$req->execute(array(':id'=>$id));
$prop = $req->fetch(PDO::FETCH_ASSOC);

    
 }


    
