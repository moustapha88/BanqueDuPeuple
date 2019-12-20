<?php
require_once 'bd.php';
function securisation($donnees){
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = strip_tags($donnees);
    return $donnees;
}
function insererClient($nom,$prenom,$adresse,$telephone,$idAgent,$etat){
    global $bd;
    $sql= "INSERT INTO client values(null,'$nom','$prenom','$adresse',$telephone,$idAgent,'$etat')";
    $bd->exec($sql);
    return $bd->lastInsertId();
}
function ajoutCompte($numero, $dateCreation, $solde, $idClient, $idAgent, $etat)
{
    $insert = "INSERT INTO compte VALUES (null,'$numero','$dateCreation',$solde, $idClient, $idAgent, '$etat')";
    global $bd;
    $bd->exec($insert);
    return $bd->lastInsertId();
}
function genererNumCompte(){
    $sql = "SELECT max(id) FROM compte";
    global $bd;
    $array = $bd->query($sql)->fetch();
    if ($array == NULL) {
        $id = 1;
    }else{

        $id = ++$array[0];
    }
    $numero = "BDP_".date('d').date('m').date('Y')."C_".$id;
    return $numero;
}
function getCompteById($idClient){
    global $bd;
    $sql = "SELECT  compte.numero, compte.dateCreation, compte.solde, compte.etat, compte.id FROM compte, client WHERE compte.idClient = client.id and compte.idClient=$idClient";
    return $bd->query($sql)->fetchAll();
}
function getClientById($idClient){
    global $bd;
    $sql= "SELECT * FROM client WHERE id=$idClient";
    return $bd->query($sql)->fetch();
}
function bloquerCompter($id){
    global $bd;
    $sql = "UPDATE compte SET etat='bloquer' WHERE id=$id";
    $bd->exec($sql);
}
function activerCompter($id){
    global $bd;
    $sql = "UPDATE compte SET etat='activer' WHERE id=$id";
    $bd->exec($sql);

}
function modifierEtatClient($id){
    global $bd;
    $sql = "UPDATE client SET etat='supprimer' WHERE id=$id";
    $bd->exec($sql);
}
function getAllClients(){
    global $bd;
    $sql ="SELECT * FROM client where etat='activer'";
    return $bd->query($sql)->fetchAll();
}