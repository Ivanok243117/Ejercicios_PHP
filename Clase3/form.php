<?php
$ruta = __DIR__ . '/frutas.txt';                           


if ($_SERVER['REQUEST_METHOD'] === 'POST') {               
    $fruta = trim($_POST['fruta'] ?? '');                                                 
        file_put_contents(                                 
            $ruta,                                      
            $fruta . PHP_EOL,                                   
            FILE_APPEND | LOCK_EX                               
        );
        header('Location: ' . $_SERVER['PHP_SELF']);          
        exit;                                                 
}
?>                                            
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post"> 
        <input name="fruta" placeholder="Ej: Manzana"> 
        <button>Guardar</button> 
    </form>

</body>
</html>

