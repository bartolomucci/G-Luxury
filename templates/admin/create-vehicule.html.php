
<h1 class="text-center text-dark text-uppercase pb-3 uppercase">Création d'un véhicule</h1>

<form class="form" action="/?controller=admin&action=createVehiclePOST" method="post">

    <div class="form-group">
        <label for="marque">Marque</label>
        <input class="form-control" type="text" name="brand" id="marque">
    </div>

    <div class="form-group">
        <label for="modele">Modèle</label>
        <input class="form-control" type="text" name="model" id="modele">
    </div>

    <div class="form-group">
        <label for="couleur">Couleur</label>
        <input class="form-control" type="text" name="color" id="couleur">
    </div>

    <div class="form-group">
        <label for="carburant">Carburant</label>
        <input class="form-control" type="text" name="fuel" id="carburant">
    </div>

    <div class="form-group">
        <label for="puissance_din">Puissance DIN (uniquement le nombre)</label>
        <input class="form-control" type="text" name="horsepower" id="puissance_din">
    </div>

    <div class="form-group">
        <label for="puissance_fiscale">Puissance FISCALE (uniquement le nombre)</label>
        <input class="form-control" type="text" name="fiscalpower" id="fiscalpower">
    </div>

    <div class="form-group">
        <label for="vitesse_max">Vitesse Maximum (uniquement le nombre)</label>
        <input class="form-control" type="text" name="maximum_speed" id="vitesse_max">
    </div>

    <div class="form-group">
        <label for="image">Image (lien)</label>
        <input class="form-control" type="text" name="car_image" id="image">
    </div>

    <div class="form-group">
        <label for="zero_a_cent">0 à 100 km/h (uniquement les décimal)</label>
        <input class="form-control" type="text" name="zero_hundred" id="zero_a_cent">
    </div>

    <div class="text-center">
        <input class="btn btn-success mt-5" type="submit" name="submit" value="Créer">
    </div>


</form>