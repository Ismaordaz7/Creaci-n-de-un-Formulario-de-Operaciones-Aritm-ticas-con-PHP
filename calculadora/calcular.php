<?php
// Funciones para realizar operaciones aritméticas
function sumar($num1, $num2) {
    return $num1 + $num2;
}

function restar($num1, $num2) {
    return $num1 - $num2;
}

function multiplicar($num1, $num2) {
    return $num1 * $num2;
}

function dividir($num1, $num2) {
    return $num2 != 0 ? $num1 / $num2 : "Error: No se puede dividir por cero";
}

// Validar los datos recibidos
function validar_numeros($num1, $num2) {
    return is_numeric($num1) && is_numeric($num2);
}


$num1 = isset($_POST['num1']) ? $_POST['num1'] : 0;
$num2 = isset($_POST['num2']) ? $_POST['num2'] : 0;
$operacion = isset($_POST['operacion']) ? $_POST['operacion'] : '';

// Validar los datos recibidos
if (!validar_numeros($num1, $num2)) {
    $resultado = "Ingrese números válidos.";
} else {
    switch ($operacion) {
        case 'suma':
            $resultado = sumar($num1, $num2);
            break;
        case 'resta':
            $resultado = restar($num1, $num2);
            break;
        case 'multiplicacion':
            $resultado = multiplicar($num1, $num2);
            break;
        case 'division':
            $resultado = dividir($num1, $num2);
            break;
        default:
            $resultado = 'Operación no válida';
            break;
    }
}

// Devolver el resultado 
echo $resultado;
?>

