<?php

include_once '../v1/conexion.php';

// Clase para manejar las operaciones relacionadas con la base de datos
class Controlador
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = new Conexion();
    }

    // Método para obtener todas las categorías de servicio
    public function getCategoriasServicio()
    {
        // lógica para obtener las categorías de servicio desde la base de datos
        // Se simula con datos de ejemplo en este caso
        $categorias = [
            ["id" => 1, "nombre" => "Categoria 1"],
            ["id" => 2, "nombre" => "Categoria 2"],
            
        ];

        // Retornar las categorías como respuesta JSON con código de estado 200 (OK)
        http_response_code(200);
        echo json_encode(["categorias_servicio" => $categorias]);
    }

    // Método para crear una nueva categoría de servicio
    public function crearCategoriaServicio($datos)
    {
        // Aquí iría la lógica para crear una nueva categoría de servicio en la base de datos
        // Se simula con un mensaje de éxito en este caso
        $mensaje = "Categoría de servicio creada correctamente";

        // Retornar el mensaje como respuesta JSON con código de estado 201 (Creado)
        http_response_code(201);
        echo json_encode(["mensaje" => $mensaje]);
    }

    // Método para actualizar una categoría de servicio existente
    public function actualizarCategoriaServicio($id, $datos)
    {
        // Aquí iría la lógica para actualizar la categoría de servicio en la base de datos
        // Se simula con un mensaje de éxito en este caso
        $mensaje = "Categoría de servicio actualizada correctamente";

        // Retornar el mensaje como respuesta JSON con código de estado 200 (OK)
        http_response_code(200);
        echo json_encode(["mensaje" => $mensaje]);
    }

    // Otros métodos para manejar las demás categorías de información...
}

// Instanciar la clase Controlador
$controlador = new Controlador();

// Obtener el método de la solicitud HTTP
$metodo = $_SERVER['REQUEST_METHOD'];

// Manejar la solicitud dependiendo del método
switch ($metodo) {
    case 'GET':
        // Endpoint para obtener todas las categorías de servicio
        $controlador->getCategoriasServicio();
        break;
    case 'POST':
        // Endpoint para crear una nueva categoría de servicio
        $datos = json_decode(file_get_contents("php://input"), true);
        $controlador->crearCategoriaServicio($datos);
        break;
    case 'PUT':
        // Endpoint para actualizar una categoría de servicio existente
        // El id de la categoría se debe pasar en la URL
        $id = $_GET['id'];
        $datos = json_decode(file_get_contents("php://input"), true);
        $controlador->actualizarCategoriaServicio($id, $datos);
        break;
    // Otros casos para manejar los métodos PATCH, DELETE y otras categorías de información...
    default:
        // Si se realiza una solicitud con un método no soportado, retornar un código de estado 405 (Método no permitido)
        http_response_code(405);
        echo json_encode(["mensaje" => "Método no permitido"]);
        break;
}
?>