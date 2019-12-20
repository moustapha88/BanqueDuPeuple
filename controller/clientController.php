<?php
require '../model/modelClient.php';
session_start();
    if (isset($_POST['AddNewC'])){
        $dateCreation = date("d/m/Y");
        $nom = securisation($_POST['nom']);
        $prenom = securisation($_POST['prenom']);
        $adresse = securisation($_POST['adresse']);
        $telephone = securisation($_POST['telephone']);
        $idAgent = $_SESSION['id'];
        $etat = "activer";
        $idClient = insererClient($nom,$prenom,$adresse,$telephone,$idAgent,$etat);
        if ($idClient > 0){
            $solde = securisation($_POST['solde']);
            $numero = securisation($_POST['numero']);
            $idCompte = ajoutCompte($numero, $dateCreation, $solde, $idClient, $idAgent, $etat);
            if ($idCompte > 0) {
                header('location:/mesprojets/BanqueDuPeuple/view/indexProjet.php?view=AjoutClient&ok=1');
            }else{
                header('location:/mesprojets/BanqueDuPeuple/view/indexProjet.php?view=AjoutClient&ok=0');
            }
        }else{
            header('location:/mesprojets/BanqueDuPeuple/view/indexProjet.php?view=AjoutClient&ok=-1');
        }


    }
    if (isset($_POST['AddNewCompte'])){
        $dateCreation = date("d/m/Y");
        $numero = securisation($_POST['numero']);
        $solde = securisation($_POST['solde']);
        $idClient = securisation($_POST['idC']);
        $idAgent = $_SESSION['id'];
        $etat = "activer";
        $idCompte = ajoutCompte($numero, $dateCreation, $solde, $idClient, $idAgent, $etat);
        if ($idCompte > 0) {
            header('location:/mesprojets/BanqueDuPeuple/view/indexProjet.php?view=ListeClient&ok=1');
        }else{
            header('location:/mesprojets/BanqueDuPeuple/view/indexProjet.php?view=ListeClient&ok=0');
        }
    }