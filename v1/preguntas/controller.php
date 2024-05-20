<?php

// Incluir el archivo version1.php para configurar la API y obtener datos comunes
include_once '../version1.php';

// Verificar si la versión de la API es la correcta y si el mantenimiento está habilitado
if ($_version == 'v1' && $_mantenedor == 'preguntas-frecuentes') {
    // Obtener el método de la solicitud HTTP
    $metodo = $_SERVER['REQUEST_METHOD'];

    // Manejar la solicitud dependiendo del método
    switch ($metodo) {
        case 'GET':
            // Definir las preguntas y respuestas
            $preguntasRespuestas = [
                [
                    "pregunta" => "¿Cómo puedo explorar las parcelas antes de decidirme por una compra?",
                    "respuesta" => "En Terrasol Parcelas ofrecemos un tour virtual de las parcelas, lo que permite a nuestros clientes explorar y visualizar cada rincón de sus futuras propiedades desde la comodidad de sus hogares."
                ],
                [
                    "pregunta" => "¿Qué opciones de financiamiento ofrecen para la compra de parcelas?",
                    "respuesta" => "Ofrecemos crédito directo sin necesidad de pasar por bancos, avales o requisitos complicados. Esta opción facilita la adquisición de parcelas, brindando mayor accesibilidad financiera a nuestros clientes."
                ],
                [
                    "pregunta" => "¿Qué incluye la inversión inicial de 1 millón de pesos?",
                    "respuesta" => "La inversión inicial de 1 millón de pesos es el monto mínimo para comenzar la compra de una parcela de 5000 metros cuadrados. Este monto asegura una entrada accesible para quienes desean invertir en tierras."
                ],
                [
                    "pregunta" => "¿Ofrecen parcelas con casas ya construidas?",
                    "respuesta" => "Sí, para aquellos que buscan una solución integral, Terrasol Parcelas ofrece la opción de adquirir parcelas que incluyen casas, proporcionando una alternativa llave en mano para una vida en armonía con la naturaleza sin sacrificar comodidades."
                ],
                [
                    "pregunta" => "¿Los terrenos cuentan con acceso a servicios básicos?",
                    "respuesta" => "La mayoría de nuestros terrenos están equipados con acceso a servicios básicos o tienen la infraestructura cercana para facilitar la conexión. Podemos proporcionar detalles específicos para cada propiedad durante su visita."
                ],
                [
                    "pregunta" => "¿Qué costos adicionales debo considerar al comprar un terreno?",
                    "respuesta" => "Además del precio del terreno, considere los costos de escrituración, impuestos, posibles conexiones de servicios públicos y, si es necesario, costos de limpieza o preparación del terreno. Nuestro equipo le proporcionará una estimación detallada de estos costos."
                ],
                [
                    "pregunta" => "¿Qué diferencia a Terrasol Parcelas de otras inmobiliarias?",
                    "respuesta" => "Lo que nos diferencia es nuestro enfoque innovador y centrado en el cliente, además de nuestro compromiso con la transparencia y la accesibilidad financiera. Ofrecemos tours virtuales y crédito directo, facilitando el proceso de compra de parcelas."
                ]
            ];

            // Retornar las preguntas y respuestas como respuesta JSON
            http_response_code(200);
            echo json_encode(["preguntas_frecuentes" => $preguntasRespuestas]);
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

