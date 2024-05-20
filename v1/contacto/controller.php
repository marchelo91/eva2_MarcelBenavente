<?php

// Incluir el archivo de conexión a la base de datos desde la ubicación correcta
include_once '../v1/conexion.php';

// Clase para manejar las operaciones relacionadas con las categorías de servicio
class ControladorCategoriaServicio
{
    private $conexion;

    public function __construct()
    {
        // Inicializar la conexión a la base de datos
        $this->conexion = new Conexion();
    }

    // Método para obtener todas las categorías de servicio
    public function obtenerCategoriasServicio()
    {
        // Establecer la conexión a la base de datos
        $this->conexion->conectar();

        // Aquí iría la lógica para obtener las categorías de servicio desde la base de datos
        // Por ejemplo, ejecutar una consulta SQL y procesar los resultados

        // Cerrar la conexión a la base de datos
        $this->conexion->cerrarConexion();

        // Retornar las categorías de servicio (simulado con datos de ejemplo)
        $categorias = [
            ["id" => 1, "nombre" => "Categoría 1"],
            ["id" => 2, "nombre" => "Categoría 2"],
        
        ];

        return $categorias;
    }

    // Otros métodos para manejar las operaciones CRUD de las categorías de servicio...
}

?>
