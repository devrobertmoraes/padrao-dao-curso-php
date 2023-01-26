<?php

include_once("CarDAOInterface.php");

class CarDAO implements CarDAOInterface
{
    private $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function create(Car $car)
    {
        $stmt = $this->connection->prepare("INSERT INTO cars (brand, km, color) VALUES (:brand, :km, :color)");

        $stmt->bindParam(":brand", $car->getBrand());
        $stmt->bindParam(":km", $car->getKm());
        $stmt->bindParam(":color", $car->getColor());

        $stmt->execute();
    }

    public function findAll()
    {

    }
}