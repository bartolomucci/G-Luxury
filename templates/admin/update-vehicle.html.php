<h1 class="text-center text-dark text-uppercase pb-3 uppercase">Création d'un véhicule</h1>

<form class="form" action="/?controller=admin&action=updateVehiclePOST&id_vehicle=<?= $_GET['id_vehicle'] ?>" method="post">
<?php foreach($vehicle as $key) : ?>
    <div class="form-group">
        <label for="marque">Marque</label>
        <input class="form-control" type="text" name="brand" id="marque" value="<?= $key['brand'] ?>">
    </div>

    <div class="form-group">
        <label for="modele">Modèle</label>
        <input class="form-control" type="text" name="model" id="modele" value="<?= $key['model'] ?>">
    </div>

    <div class="form-group">
        <label for="couleur">Couleur</label>
        <input class="form-control" type="text" name="color" id="couleur" value="<?= $key['color'] ?>">
    </div>

    <div class="form-group">
        <label for="carburant">Carburant</label>
        <input class="form-control" type="text" name="fuel" id="carburant" value="<?= $key['fuel'] ?>">
    </div>

    <div class="form-group">
        <label for="puissance_din">Puissance DIN (uniquement le nombre)</label>
        <input class="form-control" type="text" name="horsepower" id="puissance_din" value="<?= $key['horsepower'] ?>">
    </div>

    <div class="form-group">
        <label for="puissance_fiscale">Puissance FISCALE (uniquement le nombre)</label>
        <input class="form-control" type="text" name="fiscalpower" id="fiscalpower" value="<?= $key['fiscalpower'] ?>">
    </div>

    <div class="form-group">
        <label for="vitesse_max">Vitesse Maximum (uniquement le nombre)</label>
        <input class="form-control" type="text" name="maximum_speed" id="vitesse_max" value="<?= $key['maximum_speed'] ?>">
    </div>

    <div class="form-group">
        <label for="image">Image (lien)</label>
        <input class="form-control" type="text" name="car_image" id="image" value="<?= $key['car_image'] ?>">
    </div>

    <div class="form-group">
        <label for="zero_a_cent">0 à 100 km/h (uniquement les décimal)</label>
        <input class="form-control" type="text" name="zero_hundred" id="zero_a_cent" value="<?= $key['zero_hundred'] ?>">
    </div>
    <?php endforeach; ?>
    <div class="text-center">
        <input class="btn btn-success mt-5" type="submit" name="submit" value="Créer">
    </div>
</form>