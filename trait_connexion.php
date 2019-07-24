<?php
session_start();

require('src/connection.php');

if (!empty($_POST['pseudo']) && !empty($_POST['mdp'])) {
    //VARIABLES
    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['mdp'];

    $req = $db->prepare('SELECT * FROM user WHERE pseudo = ?');
    $req->execute(array($pseudo));

    $user = $req->fetch();

    if ($mdp == $user['mdp']) {
        $error = 0;
        $_SESSION['connect'] = 1;
        $_SESSION['pseudo'] = $user['pseudo'];
        $_SESSION['id_user'] = $user['id'];
        header('location: dashboard.php');
        exit();
    }

    // $req = $db->prepare('SELECT * FROM user WHERE pseudo = :pseudo AND mdp = :mdp');
    // $req->execute(array(
    //     ':pseudo' => $pseudor,
    //     ':mdp'=> $mdp
    // ));

    // $result = $req->fetch(PDO::FETCH_ASSOC);

    // if($req->rowCount() == 0)
    // {
    //     header('location: index.php');
    // }else if($result){
    //      $_SESSION['connect'] = 1;
    //      $_SESSION['pseudo'] = $user['pseudo'];
    // }

    header('location:index.php?error=1');
    exit();
}
