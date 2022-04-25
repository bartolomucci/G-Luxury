<?php

class VehiculeManager extends Manager
{
    public const TABLE_vehicule = "vehicule";

    public function getAllVehicule()
    {

        $sql = "SELECT * FROM " . self::TABLE_vehicule;
        $query = $this->getPdo()->query($sql);
        return $query->fetchAll();
    }


    public function insertVehicule(string $marque, string $modele, string $couleur, string $carburant, string $prix, string $puissance_din, string $puissance_fiscale, string $image, string $vitesse_maximum, string $zero_a_cent)
    {
        $sql = "INSERT INTO " . self::TABLE_vehicule . " (marque,modele,couleur,carburant,prix,puissance_din,puissance_fiscale,image,vitesse_maximum,zero_a_cent) VALUES (:marque,:modele,:couleur,:carburant,:prix,:puissance_din,:puissance_fiscale,:image,:vitesse_maximum,:zero_a_cent)";
        $query = $this->getPdo()->prepare($sql);
        $query->execute([
            'marque' => $marque,
            'modele' => $modele,
            'couleur' => $couleur,
            'carburant' => $carburant,
            'prix' => $prix,
            'puissance_din' => $puissance_din,
            'puissance_fiscale' => $puissance_fiscale,
            'image' => $image,
            'vitesse_maximum' => $vitesse_maximum,
            'zero_a_cent' => $zero_a_cent,
        ]);

        return $query->fetchAll();
    }

}