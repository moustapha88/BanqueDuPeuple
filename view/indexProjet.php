<?php
session_start();
if ($_SESSION == NULL) {
    header('location :/mesprojets/BanqueDuPeuple/index.php');
}
else {
        include_once '../menu.php';
        if (isset($_GET['view'])) {
            switch ($_GET['view']) {
                case 'Accueil':
                    include 'accueil.php';
                    break;
                case 'AjoutClient':
                    if (isset($_GET['ok'])){
                        if ($_GET['ok']==1){
                            echo "Client Ajouter avec succes";
                        }else if ($_GET['ok']==0){
                            echo "Erreur lors de l'insertion du compte";
                        }else{
                            echo "Erreur lors de l'insertion du client";
                        }
                    }
                    include 'AjoutClient.php';
                    break;
                case 'ListeClient':
                    if (isset($_GET['ok'])){
                        if ($_GET['ok']==1){
                            echo "Compte Ajouter avec succes";
                        }else{
                            echo "Erreur lors de l'ajout du compte";
                        }
                    }
                    include 'ListeClient.php';
                    break;
                case 'mescomptes':
                    if (isset($_GET['idClient'])){
                        $idClient = $_GET['idClient'];
                        header('location:/mesprojets/BanqueDuPeuple/view/mescomptes.php?idClient='.$idClient);
                    }
                case 'nouveaucompte':
                    include 'nouveaucompte.php';
                    break;
                default:
                    include 'Erreur.php';
                    break;
            }
        }
        else{
            include 'accueil.php';
        }
        include_once '../footer.php';

    }
