<?php
    $host = "localhost";
    $dbname = "banquedupeuple";
    $user = "root";
    $mdp = "";
    try
    {
        $bd = new PDO('mysql:host='.$host.';dbname='.$dbname, $user,$mdp,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    }
    catch (PDOException $e)
    {
        die('Erreur de connexion a la base de donnees ..! Veuillez contacter votre administrateur');
    }