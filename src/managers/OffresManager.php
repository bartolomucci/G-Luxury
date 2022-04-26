<?php

class OffresManager extends Manager
{
    public const TABLE_offre = 'offers';


    public function getAllOffres()
    {    
        $sql = "SELECT * FROM " . self::TABLE_offre;
        $query = $this->getPdo()->query($sql);
        return $query->fetchAll();
    }

    public function getOffersbyVehicleId()
    {
        $sql = "SELECT * FROM " . self::TABLE_offre . " WHERE id_vehicle = :id_vehicle";
        $query = $this->getPdo()->prepare($sql);
        $query->execute(['id_vehicle' => $_GET['id_vehicle']]);
        return $query->fetchAll();
    }

}