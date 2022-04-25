<h1 class="text-center text-secondary">Nos offres</h1>

<?php foreach($offres as $offre): ?>
    <div class="card w-75">
        <div class="card-header">
            <h4 class="card-title">Offre n°<?= $offre['id'] ?></h4>
        </div>
        <div class="card-body">
            <p class="card-text">Prix : <?= $offre['prix'] ?>€</p>
            <p class="card-text">Kilométrage : <?= $offre['kilometrage'] ?>km</p>
            <p class="card-text">Heures : <?= $offre['heures'] ?>h</p>
            <p class="card-text">Jours : <?= $offre['jours'] ?>j</p>
            <p class="card-text">Caution : <?= $offre['caution'] ?>€</p>
        </div>
    </div>
<?php endforeach; ?>
