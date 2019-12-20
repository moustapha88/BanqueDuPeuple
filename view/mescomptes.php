<?php
include '../menu.php';
require '../model/modelClient.php';
if (isset($_GET['idClient'])){
    $idClient = $_GET['idClient'];
    $comptes = getCompteById($idClient);
}
?>

<div class="jumbotron jumbotron-fluid" id="intro">
    <h3 class="display-4 text-center text-white section-header"> Banque Du Peuple</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <hr>
                <table class="table table-borderless">
                    <thead>
                    <th class="text-white">Numero</th>
                    <th class="text-white">Date Creation</th>
                    <th class="text-white">Solde</th>
                    </thead>
                    <tbody>
                    <!--A afficher si 0 produit-->
                    <?php  foreach ($comptes as $c) { ?>
                        <tr>
                            <td class="text-white"><?= $c['numero']?></td>
                            <td class="text-white"><?= $c['dateCreation']?></td>
                            <td class="text-white"><?= $c['solde']?></td>
                            <?php if($c['etat'] == "activer"){?>
                            <td>
                                <a href="supprimer.php?idAbloquer=<?= $c['id'] ?>"  class="btn btn-sm btn-danger text-white ml-2" id="ClASup">Bloquer</a>
                            </td>
                            <?php }else{?>
                            <td>
                                <a href="supprimer.php?idActiver=<?= $c['id'] ?>"  class="btn btn-sm btn-success text-white ml-2" id="ClASup">Activer</a>
                            </td>
                        </tr>
                        <?php } }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

