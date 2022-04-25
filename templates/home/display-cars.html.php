<div>
<h1 class="text-center text-secondary">Nos véhicules</h1>
</div>

<?php foreach($vehicules as $key) : ?>
    <div class="text-center">
    <h2><?= $key['marque'] ?> <?= $key['modele'] ?></h2>
    <img src="<?= $key['image'] ?>" alt="">
    <p>Couleur : <?= $key['couleur'] ?></p>
    </div>

    <div class="text-center">
    <h3>Caractéristiques</h3>
    <p>Carburant : <?= $key['carburant'] ?></p>
    <p>Prix neuf : <?= $key['prix'] ?> €</p>
    <p>Puissance (DIN) : <?= $key['puissance_din'] ?> ch</p>
    <p>Puissance (FISCALE) : <?= $key['puissance_fiscale'] ?> CV</p>
    <p>Vitesse maximum : <?= $key['vitesse_maximum'] ?></p>
    <p>0 à 100km/h : <?= $key['zero_a_cent'] ?></p>
    <a href="?controller=home&action=offers&id=<?=$key['id'] ?>">Nos offres</a>
    <br>
    <br>
    <br>
    </div>
    <?php endforeach; ?>