<?php
    require_once 'bd.php';
    function verifierConnexion($login, $mdp){
        $sql = "SELECT * FROM agent WHERE login = '$login' and password = '$mdp'";
        global $bd;
        return $bd -> query($sql) -> fetch();
    }