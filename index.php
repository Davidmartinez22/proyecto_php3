<?php
// Aquí va el código php

require_once 'php/script/render.php';
require_once 'php/classes/ApiClient.php';
require_once 'php/classes/personajes.php';  // Cambié el nombre de la clase

// Crear una instancia de ApiClient con la URL de la API de Star Wars
$ApiClient = new ApiClient('https://swapi.dev/api/people/');
$data1 = $ApiClient->fetchData();  // Obtener los datos de la API

// Asumimos que la respuesta de la API es un array de personas, tomamos el primer personaje para mostrarlo
$characterData = $data1['results'][0];  // Obtener el primer personaje

$character = new StarWarsCharacter($characterData);  // Crear un nuevo objeto de StarWarsCharacter

?>
<!doctype html>
<html lang="en">
<?php render_template("head", $data = []) ?>
<?php render_template("body", $character->getData()) ?>  <!-- Usar getData() para enviar los datos al template -->
</html>


