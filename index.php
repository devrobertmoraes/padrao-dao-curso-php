<?php 

include_once("connection.php");

?>

<h1>Insira um carro: </h1>

<form action="process.php" method="POST">
    <div>
        <label for="brand">Marca do carro:</label>
        <input type="text" id="brand" name="brand">
    </div>

    <div>
        <label for="km">Quilometragem:</label>
        <input type="text" id="km" name="km">
    </div>

    <div>
        <label for="color">Cor do carro:</label>
        <input type="text" id="color" name="color">
    </div>

    <div>
        <input type="submit" value="Salvar">
    </div>
</form>