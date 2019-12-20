<?php
require '../model/modelClient.php';
if (isset($_GET['idAsupprimer'])){
    $id = $_GET['idAsupprimer'];
    modifierEtatClient($id);

    header('location:/mesprojets/BanqueDuPeuple/view/indexProjet.php?view=ListeClient');
}
if (isset($_GET['idAbloquer'])){
    $id = $_GET['idAbloquer'];
    bloquerCompter($id);
    header('location:/mesprojets/BanqueDuPeuple/view/indexProjet.php?view=ListeClient');
}
if (isset($_GET['idActiver'])){
    $id = $_GET['idActiver'];
    activerCompter($id);
    header('location:/mesprojets/BanqueDuPeuple/view/indexProjet.php?view=ListeClient');
}

?>