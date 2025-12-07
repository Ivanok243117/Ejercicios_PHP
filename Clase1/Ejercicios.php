<?php

print "mi primer codigo";

echo "mi segundo codigo php", " mi tercer codigo";

?>
<?php

print "<h1> mi primer codigo </h1>";

echo "<p>mi segundo codigo php</p>", " mi tercer codigo";
echo "<br>";

?>
<?php

$numero = 5;

echo "$numero"

?>

<?php
echo "<br>";
$numero = 7;

echo " esto es una variable de numero: $numero"

?>

<html>

<head>
    <title>Prueba de PHP</title>
</head>

<body>
    <?php echo '<p>Hola Mundo</p>'; ?>
</body>

</html>

<?php phpinfo(); ?>

<?php
echo $_SERVER['HTTP_USER_AGENT'];
?>

<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== TRUE) {
    echo 'Está usando Internet Explorer.<br />';
}
?>

<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
?>
    <h3>strpos() debe haber devuelto no falso</h3>
    <p>Está usando Internet Explorer</p>
<?php
} else {
?>
    <h3>strpos() debe haber devuelto falso</h3>
    <p>No está usando Internet Explorer</p>
<?php
}
?>

<form action="accion.php" method="post">

    <p>Su nombre: <input type="text" name="nombre" /></p>

    <p>Su edad: <input type="text" name="edad" /></p>

    <p><input type="submit" /></p>

</form>

Hola <?php echo htmlspecialchars($_POST['nombre']); ?>.

Usted tiene <?php echo (int)$_POST['edad']; ?> años.