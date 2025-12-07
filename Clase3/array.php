<!----array---->
<?php
$dias = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes");

echo $dias[0]; // Imprime "Lunes"
echo "<br>";
echo $dias[4]; // Imprime "Viernes"
echo "<br> mañana es $dias[2] y el $dias[4] es de descanso";
//longitud del array
echo "<br>la longitud del array es: " . count($dias);

//recorrer un array
for ($i = 0; $i < count($dias); $i++) {
    echo "<br> el dia $i es " . $dias[$i];
}
//array asociativo
$persona = array(
    "nombre" => "Ana",
    "apellido" => "Gomez",
    "edad" => 30,
    "ciudad" => "Madrid"
);
echo "<br> El nombre es: ", $persona["nombre"] . "y mi apellido es: " . $persona["apellido"] . " ,tengo " . $persona["edad"] . " años y vivo en " . $persona["ciudad"];

//bucle y array asociativo
foreach ($persona as $clave => $valor) {
    echo "<br> $clave : $valor";
}
//ejercicio:
//llenar un arreglo con frutas y mostrar cada fruta en pantalla

$frutas = array("Manzana", "Banana", "Naranja", "Uva", "Mango");
foreach ($frutas as $fruta) {
    echo "<br> Fruta: $fruta";
}
?>