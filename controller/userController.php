<?php
session_start();
require_once '../model/modelUser.php';
if (isset($_POST['connexion']))
{
    extract($_POST);
    $user = verifierConnexion($login, $mdp);
    if($user != null)
    {
        $_SESSION['nomComplet'] = $user['nomComplet'];
        $_SESSION['password'] = $user['password'];
        $_SESSION['login'] = $user['login'];
        $_SESSION['id'] = $user['id'];
        header('location:/mesprojets/BanqueDuPeuple/accueil');
    }
    else
    {
        header('location:/mesprojets/BanqueDuPeuple/index.php?connexion=0');
    }

}
if (isset($_GET['deconnexion']) && $_GET['deconnexion']==1)
{
    session_unset();
    $_SESSION[] = array();
    header('location:/mesprojets/BanqueDuPeuple/index.php');
}