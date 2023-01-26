<?php 

interface CarDAOInterface
{
    public function create(Car $car);
    public function findAll();
}