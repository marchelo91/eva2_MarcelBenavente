<?php

// Incluir el archivo de controlador desde la ubicación correcta
include_once 'controller.php';

// Crear una instancia del controlador de preguntas frecuentes
$controladorPreguntas = new ControladorPreguntasFrecuentes();

// Obtener las preguntas frecuentes llamando al método del controlador
$preguntasFrecuentes = $controladorPreguntas->obtenerPreguntasFrecuentes();

// Verificar si se obtuvieron las preguntas frecuentes correctamente
if (!empty($preguntasFrecuentes)) {
    // Establecer el código de estado HTTP a 200 (OK)
    http_response_code(200);

    // Retornar las preguntas frecuentes como respuesta JSON
    echo json_encode(["preguntas_frecuentes" => $preguntasFrecuentes]);
} else {
    // Si no se encontraron preguntas frecuentes, establecer el código de estado HTTP a 404 (No encontrado)
    http_response_code(404);

    // Retornar un mensaje de error como respuesta JSON
    echo json_encode(["mensaje" => "No se encontraron preguntas frecuentes"]);
}

?>
