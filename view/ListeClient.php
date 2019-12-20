<?php
require '../model/modelClient.php';
$clients = getAllClients();
$somme = 0;
if (isset($clients)) {
    foreach ($clients as $c) {
        $somme = $somme + $c['id'];
    }
}
?>
<div class="jumbotron jumbotron-fluid" id="intro">
    <h3 class="display-4 text-center text-white section-header"> Banque Du Peuple</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <hr>
                <table class="table table-borderless">
                    <thead >
                    <th class="text-white">Nom</th>
                    <th class="text-white">Prenom</th>
                    <th class="text-white">Adresse</th>
                    <th class="text-white">Telephone</th>
                    </thead>
                    <tbody>
                    <!--A afficher si 0 produit-->
                    <?php if($somme == 0){ ?>
                        <tr>
                            <td class="font-italic text-center text-white" colspan="5">
                                Aucun Client trouve dans la base de donnée!
                            </td>
                        </tr>
                    <?php }else{ foreach ($clients as $c) { ?>
                        <tr>
                            <td class="text-white"><?= $c['nom']?></td>
                            <td class="text-white"><?= $c['prenom']?></td>
                            <td class="text-white"><?= $c['adresse']?></td>
                            <td class="text-white"><?= $c['telephone']?></td>
                            <td>
                                <a href="view/indexProjet.php?view=mescomptes&idClient=<?= $c['id'] ?>"  class="btn btn-sm btn-info text-white ml-2" id="ClASup"><i class="fa fa-edit"> Mes Comptes</i></a>
                            </td><td>
                                <a href="view/indexProjet.php?view=nouveaucompte&idClient=<?= $c['id'] ?>"  class="btn btn-sm btn-info text-white ml-2" id="ClASup"><i class="fa fa-edit"> Nouveau Compte</i></a>
                            </td>
                            <td>
                                <a href="view/supprimer.php?idAsupprimer=<?= $c['id'] ?>"  class="btn btn-sm btn-danger text-white ml-2" id="ClASup"><i class="fa fa-trash"></i></a>
                            </td>

                        </tr>
                        <?php }} ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

