<?php
session_start();
require_once('src/connection.php');

// VARIABLE
$title = isset($_POST['title']) ? $_POST['title'] : false;
$texte = isset($_POST['texte']) ? $_POST['texte'] : false;
$id_user = isset($_SESSION['id_user']) ? $_SESSION['id_user'] : false;

// $variable = condition ? true : false; explication -> ? = if : = else

//AJOUTER UNE PROPOSITION

$req = $db->prepare('INSERT INTO proposition(title, texte, id_user) VALUE (:title, :texte, :id_user)');
$req->execute(array(
    ':title' => $title,
    ':texte' => $texte,
    ':id_user' => $id_user
));
 

header('location: dashboard.php');
