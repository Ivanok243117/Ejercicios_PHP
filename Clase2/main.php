
<?php
function ejemplos(){
$nombre = "Juan";
$edad = 25;
$altura = 1.75;
$esEstudiante = true;

echo "<h2>$nombre</h2>";
echo "br>";
echo "<h2>$edad</h2>";
echo $altura . "<br>". $esEstudiante;
//codigo para leer el tipo de dato
echo "br>";
echo gettype(value: $edad);
var_dump(value: $nombre); //codigo para saber el largo de una cadena

//arreglos
$carros = array("Toyota", "Honda", "Ford");
print_r($carros);
var_dump($carros);

//objeto
class Car{
    public $color;
    public $modelo;

    public function __construct($color, $modelo){
        $this->color = $color;
        $this->modelo = $modelo;
    }

    public function mensaje(){
        return "Mi carro es de color " . $this->color . " y modelo " . $this->modelo;
    }
}

// instancia de la clase
$auto1 = new Car("Rojo","Toyota");
echo $auto1->mensaje();
echo "<br>";
$auto2 = new Car("amarillo","Honda");
echo $auto2->mensaje();
echo "<br>";

//datos null
$variableNula = null;
var_dump($variableNula);
echo "<br>";
//Devuelve la logitud de una cadena
$cadena = "Hola Mundo";

echo strlen($cadena); // Salida: 10
echo "<br>";

//contar palabras

$frase = "Hola mundo desde PHP";
$numeroPalabras = str_word_count($frase);   

echo $numeroPalabras; // Salida: 4
echo "<br>";
//invertir cadena
echo strrev("Hola Mundo"); // Salida: odnuM aloH
echo "<br>";
//buscar cadena
echo strpos("Hola Mundo", "Mundo"); // Salida: 5
echo "<br>";
//reemplazar cadena
echo str_replace("Mundo", "PHP", "Hola Mundo"); // Salida: Hola PHP
echo "<br>";

//convertir a mayusculas
echo strtoupper("Hola Mundo"); // Salida: HOLA MUNDO
echo "<br>";
//convertir a minusculas
echo strtolower("HOLA MUNDO"); // Salida: hola mundo
echo "<br>";

//funciones matematicas
echo rand(1, 100); // Numero aleatorio entre 1 y 100
echo "<br>";
echo sqrt(16); // Raiz cuadrada de 16
echo "<br>";
echo round(3.6); // Redondea 3.6 a 4
echo "<br>";
echo ceil(3.2); // Redondea hacia arriba 3.2 a 4
echo "<br>";
echo floor(3.8); // Redondea hacia abajo 3.8 a 3
echo "<br>";
echo abs(-10); // Valor absoluto de -10
echo "<br>";
echo max(1, 2, 3, 4, 5); // Maximo valor
echo "<br>";
echo min(1, 2, 3, 4, 5); // Minimo valor
echo "<br>";
echo pow(2, 3); // 2 elevado a la 3
echo "<br>";
}
ejemplos();

// ejercicios
/*
1.Hacer un algoritmo que pida que se ingrese 2 numeros para sumarlos y dividirlos
*/

if(isset($_POST['ejercicio1'])){
    $num1 = $_POST['n1'];
    $num2 = $_POST['n2'];

    echo "La suma es: " . ($num1 + $num2) . "<br>";
    echo "La division es: " . ($num1/ $num2) . "<br>";
    
}
/*1. Hacer un algoritmo que pida que se ingrese dos número para sumarlos y un numero 
por el cual se desea dividir.*/
if (isset($_POST['ejercicio1'])) {
    $num1 = $_POST['n1'];
    $num2 = $_POST['n2'];
    $divisor = $_POST['divisor'];

    // Validación básica
    if (is_numeric($num1) && is_numeric($num2) && is_numeric($divisor)) {
        $suma = $num1 + $num2;

        if ($divisor != 0) {
            $resultado = $suma / $divisor;
            echo "La suma es: $suma<br>";
            echo "La división de la suma entre $divisor es: $resultado<br>";
        } else {
            echo "Error: No se puede dividir entre cero.";
        }
    } else {
        echo "Por favor ingrese solo números válidos.";
    }
}
echo "<br>";
/*2. Hacer un algoritmo que imprima la raiz cuadrada de un numeroX que es ingresado.*/
if (isset($_POST['ejercicio2'])) {
    $numeroX = $_POST['numeroX'];

    // Validación
    if (is_numeric($numeroX)) {
        if ($numeroX >= 0) {
            $raiz = sqrt($numeroX);
            echo "La raíz cuadrada de $numeroX es: $raiz<br>";
        } else {
            echo "Error: No se puede calcular la raíz cuadrada de un número negativo.";
        }
    } else {
        echo "Por favor ingrese un número válido.";
    }
}
/*3. Se necesita obtener el promedio de un estudiante apartir de 
sus tres notas parciales.*/
if (isset($_POST['ejercicio3'])) {
    $nombre = trim($_POST['nombre']);
    $nota1 = $_POST['n1'];
    $nota2 = $_POST['n2'];
    $nota3 = $_POST['n3'];

    // Validación
    if ($nombre !== "" && is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota3)) {
        $suma = $nota1 + $nota2 + $nota3;
        $promedio = $suma / 3;
        echo "Estudiante: <strong>$nombre</strong><br>";
        echo "Promedio: <strong>" . round($promedio, 2) . "</strong><br>";
    } else {
        echo "Por favor ingrese un nombre válido y tres notas numéricas.";
    }
}
/*4. Se requiere el algoritmo para elaborar la plantilla de un empleado para ello 
se dispone de sus horas laborales en el mes,asi como de la tarifa por horas.*/
if (isset($_POST['ejercicio4'])) {
    $nombre = trim($_POST['nombre']);
    $horas = $_POST['horas'];
    $tarifa = $_POST['tarifa'];

    // Validación
    if ($nombre !== "" && is_numeric($horas) && is_numeric($tarifa)) {
        $salario = $horas * $tarifa;
        echo "Empleado: <strong>$nombre</strong><br>";
        echo "Horas trabajadas: $horas<br>";
        echo "Tarifa por hora: $" . number_format($tarifa, 2) . "<br>";
        echo "Salario mensual: <strong>$" . number_format($salario, 2) . "</strong><br>";
    } else {
        echo "Por favor ingrese un nombre válido y valores numéricos para horas y tarifa.";
    }
}
/*5. escriba un algoritmo que permita conocer el area de un triangulo a partir de la base y la
altura.*/
if (isset($_POST['ejercicio5'])) {
    $base = $_POST['base'];
    $altura = $_POST['altura'];

    // Validación
    if (is_numeric($base) && is_numeric($altura)) {
        $area = ($base * $altura) / 2;
        echo "El área del triángulo es: " . round($area, 2) . "<br>";
    } else {
        echo "Por favor ingrese valores numéricos válidos para la base y la altura.";
    }
}
/*6. leer el sueldo de 3 empleados y aplicar un aunmento de 10, 12 y 15% 
respectivamente desplegar el resultado.*/
if (isset($_POST['ejercicio6'])) {
    $nombre1 = trim($_POST['nombre1']);
    $sueldo1 = $_POST['sueldo1'];
    $nombre2 = trim($_POST['nombre2']);
    $sueldo2 = $_POST['sueldo2'];
    $nombre3 = trim($_POST['nombre3']);
    $sueldo3 = $_POST['sueldo3'];

    // Validación
    if ($nombre1 !== "" && is_numeric($sueldo1) && $nombre2 !== "" 
    && is_numeric($sueldo2) && $nombre3 !== "" && is_numeric($sueldo3)) {
        $nuevoSueldo1 = $sueldo1 * 1.10; // Aumento del 10%
        $nuevoSueldo2 = $sueldo2 * 1.12; // Aumento del 12%
        $nuevoSueldo3 = $sueldo3 * 1.15; // Aumento del 15%

        echo "Empleado: <strong>$nombre1</strong> - Nuevo Sueldo: <strong>$" . number_format($nuevoSueldo1, 2) . "</strong><br>";
        echo "Empleado: <strong>$nombre2</strong> - Nuevo Sueldo: <strong>$" . number_format($nuevoSueldo2, 2) . "</strong><br>";
        echo "Empleado: <strong>$nombre3</strong> - Nuevo Sueldo: <strong>$" . number_format($nuevoSueldo3, 2) . "</strong><br>";
    } else {
        echo "Por favor ingrese nombres válidos y sueldos numéricos para los tres empleados.";
        
    } 
}
/*7. se lee un numero averiguar el cuadrado.*/
if (isset($_POST['ejercicio7'])) {
    $numero = $_POST['numero'];

    // Validación
    if (is_numeric($numero)) {
        $cuadrado = pow($numero, 2);
        echo "El cuadrado de $numero es: " . $cuadrado . "<br>";
    } else {
        echo "Por favor ingrese un número válido.";
    }
}
/*8. Realizar un algoritmo que lea cuatro valores numericos e informar 
su suma y su promedio.*/
if (isset($_POST['ejercicio8'])) {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $numero3 = $_POST['numero3'];
    $numero4 = $_POST['numero4'];

    // Validación
    if (is_numeric($numero1) && is_numeric($numero2) && is_numeric($numero3) && is_numeric($numero4)) {
        $suma = $numero1 + $numero2 + $numero3 + $numero4;
        $promedio = $suma / 4;
        echo "La suma de los números es: " . $suma . "<br>";
        echo "El promedio de los números es: " . round($promedio, 2) . "<br>";
    } else {
        echo "Por favor ingrese solo números válidos.";
    }
}
/*9. calcular una altura en pulgadas(1pulgada=2.54cm)y pies(1 pie=12 pulgadas),
a partirde la altura en cm que se introduce por el teclado.*/
if (isset($_POST['ejercicio9'])) {
    $alturaCm = $_POST['alturacm'];

    // Validación
    if (is_numeric($alturaCm)) {
        $alturaPulgadas = $alturaCm / 2.54;
        $alturaPies = $alturaPulgadas / 12;
        echo "La altura en pulgadas es: " . $alturaPulgadas . "<br>";
        echo "La altura en pies es: " . $alturaPies . "<br>";
    } else {
        echo "Por favor ingrese solo números válidos.";
    }
}
/*10. el costo de un automovil nuevo para un comprador es la suma del costo 
del vehiculo, porcentaje de la ganancia del vendedor y los impuestos locales
o estatales(sobre el precio de la venta).
Suponer ganancia del vendedor del 12% en las unidades y un impuesto del 6%.
Hacer un algoritmo que imprimalo siguientes valores: costo total vehiculo,
impuesto y ganacia del vendedor.*/
if (isset($_POST['ejercicio10'])) {
    $valorbase = $_POST['valorbase'];

    // Validación
    if (is_numeric($valorbase)) {
        $gananciaVendedor = $valorbase * 0.12;
        $impuestos = $valorbase * 0.06;
        $costoTotal = $valorbase + $gananciaVendedor + $impuestos;

        echo "Costo del vehículo: $" . number_format($valorbase, 2) . "<br>";
        echo "Ganancia del vendedor (12%): $" . number_format($gananciaVendedor, 2) . "<br>";
        echo "Impuestos (6%): $" . number_format($impuestos, 2) . "<br>";
        echo "Costo total del vehículo para comprador: <strong>$" . number_format($costoTotal, 2) . "</strong><br>";
    } else {
        echo "Por favor ingrese un valor numérico válido para el costo del vehículo.";
    }
}
/*11. Ingrese un numero muestre un mensaje que diga si se encuentra entre el rango
de 1 a 100.*/
if (isset($_POST['ejercicio11'])) {
    $numero = $_POST['numero'];

    // Validación
    if (is_numeric($numero)) {
        if ($numero >= 1 && $numero <= 100) {
            echo "El número " . $numero . " se encuentra entre el rango de 1 a 100.";
        } else {
            echo "El número " . $numero . " no se encuentra entre el rango de 1 a 100.";
        }
    } else {
        echo "Por favor ingrese un número válido.";
    }
}
/*12. Leer tres números diferentes e imprimir solo el número mayor de los tres.*/
if (isset($_POST['ejercicio12'])) {
    $num1 = $_POST['numero1'];
    $num2 = $_POST['numero2'];
    $num3 = $_POST['numero3'];

    // Validación
    if (is_numeric($num1) && is_numeric($num2) && is_numeric($num3)) {
        $mayor = max($num1, $num2, $num3);
        echo "El número mayor es: " . $mayor;
    } else {
        echo "Por favor ingrese números válidos.";
    }
}
/*13. Leer 2 números; si son iguales que los multiplique, si el primero es mayor
que el segundo que los reste y si no que los sume.*/
if (isset($_POST['ejercicio13'])) {
    $num1 = $_POST['numero1'];
    $num2 = $_POST['numero2'];

    // Validación
    if (is_numeric($num1) && is_numeric($num2)) {
        if ($num1 == $num2) {
            echo "El resultado de la multiplicación es: " . ($num1 * $num2);
        } elseif ($num1 > $num2) {
            echo "El resultado de la resta es: " . ($num1 - $num2);
        } else {
            echo "El resultado de la suma es: " . ($num1 + $num2);
        }
    } else {
        echo "Por favor ingrese números válidos.";
    }
}
/*14. Realizar un algoritmo casos para los 4 operadores aritméticos.*/
if (isset($_POST['ejercicio14'])) {
    $num1 = $_POST['numero1'];
    $num2 = $_POST['numero2'];
    $operador = $_POST['operador'];

    // Validación
    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operador) {
            case '+':
                echo "El resultado de la suma es: " . ($num1 + $num2);
                break;
            case '-':
                echo "El resultado de la resta es: " . ($num1 - $num2);
                break;
            case '*':
                echo "El resultado de la multiplicación es: " . ($num1 * $num2);
                break;
            case '/':
                if ($num2 != 0) {
                    echo "El resultado de la división es: " . ($num1 / $num2);
                } else {
                    echo "Error: No se puede dividir entre cero.";
                }
                break;
            default:
                echo "Operador no válido. Use +, -, * o /.";
        }
    } else {
        echo "Por favor ingrese números válidos.";
    }
}
/*15. Realizar un algoritmo que imprima del 1 al 10.*/
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}