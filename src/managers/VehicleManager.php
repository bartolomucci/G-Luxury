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

}