<?php
    require  '../model/modelClient.php';
    $numero=genererNumCompte();
    $idClient = $_GET['idClient'];
    $client = getClientById($idClient);
?>


<form method="post" action="/mesprojets/BanqueDuPeuple/clientController">
    <input type="hidden" value="<?=$client['id']?>" name="idC">
    <div class="jumbotron jumbotron-fluid" id="intro">
        <h3 class="display-4 text-center text-white section-header"> Banque Du Peuple</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-white">Nom</label>
                            <div class="input-group">
                                <input id="nom" class="form-control" name="nom" value="<?=$client['nom']?>" type="text" readonly>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-white">Prenom</label>
                            <div class="input-group">
                                <input id="prenom" class="form-control" name="prenom" type="text" value="<?=$client['prenom']?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-white">Adresse</label>
                            <div class="input-group">
                                <input id="adresse" class="form-control" name="adresse" type="text" value="<?=$client['adresse']?>" readonly>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-white">Telephone</label>
                            <div class="input-group">
                                <input id="telephone" class="form-control" name="telephone" type="tel" value="<?=$client['telephone']?>" readonly>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-white">Numero Compte</label>
                            <div class="input-group">

                                <input id="numero" class="form-control" name="numero" readonly value="<?=$numero?>">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-white">Solde</label>
                            <div class="input-group">
                                <input id="solde" class="form-control" name="solde" type="text" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button name="AddNewCompte" id="AddNewC" type="submit" class="btn btn-success">Ajouter</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
