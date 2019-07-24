<?php
session_start();
require_once('src/connection.php');

// VARIABLE
$title = isset($_POST['title']) ? $_POST['title'] : false;
$texte = isset($_POST['texte']) ? $_POST['texte'] : false; 
$id = isset($_POST['id']) ? $_POST['id'] : false;
// $variable = condition ? true : false; explication -> ? = if : = else

//AJOUTER UNE PROPOSITION
function addProp($db,$title,$texte)
{
    $req = $db->prepare('INSERT INTO proposition(title, texte) VALUE (:title, :texte)');
    $req->execute(array(
        ':title' => $title,
        ':texte' => $texte
    ));
}

//SUPPRIMER UNE PROPOSITION
function deleteProp($db, $id)
{
    $req = $db->prepare('DELETE FROM proposition WHERE id = :id'); //:id sans "" car ce n'est pas un string
    $req->execute(array(
        ':id'=>$id
    ));
}

// MODIFIER UNE PROPOSITION
function updateProp($db,$title, $texte, $id)
{
    $req = $db->prepare('UPDATE proposition SET title = :title, texte = :texte WHERE id = :id');
    $req->execute(array(
        ':title' => $title,
        ':texte' => $texte,
        ':id'=>$id
    ));
}

