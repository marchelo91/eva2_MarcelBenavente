<?php

// Incluir el archivo version1.php para configurar la API y obtener datos comunes
include_once '../version1.php';

// Incluir el archivo controller.php para manejar las operaciones relacionadas con la historia
include_once 'controller.php';

// Verificar si la versión de la API es la correcta y si el mantenimiento está habilitado
if ($_version == 'v1' && $_mantenedor == 'historia') {
    // Obtener el método de la solicitud HTTP
    $metodo = $_SERVER['REQUEST_METHOD'];

    // Instanciar la clase ControladorHistoria
    $controlador = new ControladorHistoria();

    // Manejar la solicitud dependiendo del método
    switch ($metodo) {
        case 'GET':
            // Obtener la historia y retornarla como respuesta JSON
            $historia = $controlador->obtenerHistoria();
            http_response_code(200);
            echo json_encode(["historia" => $historia]);
            break;
        // Otros casos para manejar otros métodos HTTP (POST, PUT, PATCH, DELETE) si es necesario...
        default:
            // Si se realiza una solicitud con un método no soportado, retornar un código de estado 405 (Método no permitido)
            http_response_code(405);
            echo json_encode(["mensaje" => "Método no permitido"]);
            break;
    }
} else {
    // Si la versión o el mantenedor no son los correctos, retornar un código de estado 404 (No encontrado)
    http_response_code(404);
    echo json_encode(["mensaje" => "Endpoint no encontrado"]);
}

?>
