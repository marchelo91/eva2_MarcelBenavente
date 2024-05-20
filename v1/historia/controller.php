<?php

// Incluir el archivo de conexión a la base de datos desde la ubicación correcta
include_once '../v1/conexion.php';

// Clase para manejar las operaciones relacionadas con la historia
class ControladorHistoria
{
    private $conexion;

    public function __construct()
    {
        // Inicializar la conexión a la base de datos
        $this->conexion = new Conexion();
    }

    // Método para obtener la historia
    public function obtenerHistoria()
    {
        // Establecer la conexión a la base de datos
        $this->conexion->conectar();

        // Aquí iría la lógica para obtener la historia desde la base de datos
        // Por ejemplo, ejecutar una consulta SQL y procesar los resultados

        // Cerrar la conexión a la base de datos
        $this->conexion->cerrarConexion();

        // Retornar la historia (simulado con datos de ejemplo)
        $historia = [
            "titulo" => "Nuestra Historia",
            "contenido" => "Terrasol Parcelas emerge como un referente en el mercado inmobiliario de la zona centro sur de Chile, ofreciendo una oportunidad única para aquellos que buscan invertir en la naturaleza y la tranquilidad de este idílico paisaje. Especializados en la venta de parcelas de 5000 metros cuadrados, Terrasol Parcelas facilita el acceso a la propiedad de tierras con una inversión inicial accesible, comenzando desde tan solo 1 millón de pesos.
            Lo que diferencia a Terrasol Parcelas es su enfoque innovador y centrado en el cliente. Con el objetivo de brindar una experiencia completa y transparente, la empresa ofrece un tour virtual de las parcelas, permitiendo a los clientes explorar y visualizar cada rincón de sus futuras propiedades desde la comodidad de sus hogares. Además, para aquellos que buscan una solución integral, Terrasol Parcelas también ofrece la opción de adquirir parcelas que incluyen casas, proporcionando una alternativa llave en mano para aquellos que desean una vida en armonía con la naturaleza sin sacrificar comodidades modernas.
            Una de las características más destacadas de Terrasol Parcelas es su compromiso con la accesibilidad financiera. Conscientes de las barreras que pueden enfrentar los compradores al buscar financiamiento tradicional, la empresa ofrece crédito directo sin necesidad de pasar por bancos, avales o requisitos complicados. Esta opción brinda a los clientes la libertad de realizar sus sueños de adquirir una parcela sin los obstáculos financieros típicos, convirtiendo la inversión en tierras en una posibilidad realista para una amplia gama de personas.
            En resumen, Terrasol Parcelas no solo ofrece tierras, sino también un estilo de vida. Con un enfoque en la transparencia, la comodidad y la accesibilidad financiera, la empresa se posiciona como un aliado confiable para aquellos que desean invertir en su futuro, tanto en términos de patrimonio como de calidad de vida. Con Terrasol Parcelas, el sueño de tener un pedazo de tierra en el pintoresco entorno del centro sur de Chile está al alcance de la mano.
            "
        ];

        return $historia;
    }

    // Otros métodos para manejar las operaciones CRUD de la historia...
}

?>
