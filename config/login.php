<?php
require_once './appConfig.php';
require_once './src/Repositories/';

if (isset($_POST['login']) && isset($_POST['passwd'])) {

    $login = $_POST['login'];
    $password = $_POST['passwd'];

    if (login($login, $password)) {
        $_SESSION['connexion'] = 'A FAIRE SI IL EST ADMIN OU PAS';
        header('Location: ../../accueil.php');
    }
}

function login($login, $pass): bool {

    $db = db_connect();
    $repo = new TuteurRepo($db);
    $set = $repo->getAll();

    foreach($set as $value) {
        echo $value->getMaiTut() . ' => ' . $value->getMdpTut() . '<br>';
        if ($value->getMaiTut() == $login && $value->getMdpTut() == $pass) {
            return true;
        }
    }

    return false;
}