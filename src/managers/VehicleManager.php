<?php

class VehicleManager extends Manager
{
    public const TABLE_vehicule = "vehicles";

    public function getAllVehicles()
    {

        $sql = "SELECT * FROM " . self::TABLE_vehicule;
        $query = $this->getPdo()->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }


    public function insertVehicule(string $brand, string $model, string $color, string $fuel, string $horsepower, string $fiscalpower, string $maximum_speed, string $car_image, string $zero_hundred)
    {
        $sql = "INSERT INTO " . self::TABLE_vehicule . " (brand, model, color, fuel, horsepower, fiscalpower, maximum_speed, car_image, zero_hundred) VALUES (:brand, :model, :color, :fuel, :horsepower, :fiscalpower, :maximum_speed, :car_image, :zero_hundred)";
        $query = $this->getPdo()->prepare($sql);
        $query->execute([
            'brand' => $brand,
            'model' => $model,
            'color' => $color,
            'fuel' => $fuel,
            'horsepower' => $horsepower,
            'fiscalpower' => $fiscalpower,
            'maximum_speed' => $maximum_speed,
            'car_image' => $car_image,
            'zero_hundred' => $zero_hundred,

        ]);

        return $query->fetchAll();
    }

    public function getVehicleById()
    {
        $sql = "SELECT * FROM " . self::TABLE_vehicule . " WHERE id_vehicle = :id_vehicle";
        $query = $this->getPdo()->prepare($sql);
        $query->execute(['id_vehicle' => $_GET['id_vehicle']]);
        return $query->fetchAll();
    }

    public function updateVehicleById()
    {
        $sql = "UPDATE " . self::TABLE_vehicule . " SET brand = :brand, model = :model, color = :color, fuel = :fuel, horsepower = :horsepower, fiscalpower = :fiscalpower, maximum_speed = :maximum_speed, car_image = :car_image, zero_hundred = :zero_hundred WHERE id_vehicle = :id_vehicle";
        $query = $this->getPdo()->prepare($sql);
        $query->execute([
            'brand' => $_POST['brand'],
            'model' => $_POST['model'],
            'color' => $_POST['color'],
            'fuel' => $_POST['fuel'],
            'horsepower' => $_POST['horsepower'],
            'fiscalpower' => $_POST['fiscalpower'],
            'maximum_speed' => $_POST['maximum_speed'],
            'car_image' => $_POST['car_image'],
            'zero_hundred' => $_POST['zero_hundred'],
            'id_vehicle' => $_GET['id_vehicle']
        ]);
        return $query->fetchAll();
    }

    public function deleteVehiclebyId()
    {
        $sql = "DELETE FROM " . self::TABLE_vehicule . " WHERE id_vehicle = :id_vehicle";
        $query = $this->getPdo()->prepare($sql);
        $query->execute(['id_vehicle' => $_GET['id_vehicle']]);
        return $query->fetchAll();
    }

}