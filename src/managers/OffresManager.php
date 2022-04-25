<?php

class OffresManager extends Manager
{
    public const TABLE_offre = 'offres';


    public function getAllOffres()
    {    
        $sql = "SELECT * FROM " . self::TABLE_offre;
        $query = $this->getPdo()->query($sql);
        return $query->fetchAll();
    }


    public function addOffre(string $prix, string $kilometrage, string $heures, string $jours, string $caution)
    {
        $sql = "INSERT INTO " . self::TABLE_offre . " (prix,kilometrage,heures,jours,caution) VALUES (:prix,:kilometrage,:heures,:jours,:caution)";
        $query = $this->getPdo()->prepare($sql);
        $query->execute([
            'prix' => $prix,
            'kilometrage' => $kilometrage,
            'heures' => $heures,
            'jours' => $jours,
            'caution' => $caution
        ]);

        return $query->fetchAll();
    }
}