<?php 

include_once("connection.php");
include_once("dao/dao/CarDAO.php");
include_once("dao/models/Car.php");

$carDAO = new CarDAO($connection);

$brand = $_POST["brand"];
$km = $_POST["km"];
$color = $_POST["color"];

$newCar = new Car();

$newCar->setBrand($brand);
$newCar->setKm($km);
$newCar->setColor($color);

$carDAO->create($newCar);

header("Location: index.php");