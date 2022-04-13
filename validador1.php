<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$extension = pathinfo($_FILES['problema1']['name'], PATHINFO_EXTENSION);
//echo("The extension is $extension. <br>"); 

if ( $extension != 'txt') {
    echo 'Error, extension de archivo invalida. <br>';
} else {
    echo 'Procesando. <br>';
    move_uploaded_file($_FILES['problema1']['tmp_name'], "Temporal1.txt");

    $contenido = array();
    $fp = fopen("Temporal1.txt", "r");
    while (!feof($fp)){
        array_push($contenido, fgets($fp));
    }
    var_dump($contenido);

    //Definir variables para manejo de datos
    $parametros =  explode(' ', $contenido[0]);
    echo '<br>';
    var_dump($parametros);

    //Tamaño primer mensaje, Validar 2 y 50
    $m1 = intval( $parametros[0] );
    //Tamaño segundo mensaje, Validar 2 y 50
    $m2 = intval( $parametros[1] );
    //Tamaño mensaje a validar, Validar 3 y 5000
    $n = intval( $parametros[2] );

    $cadena1 = $contenido[1];
    $cadena2 = $contenido[2];
    $mensaje = $contenido[3];
    echo '<br>'.$cadena1;
    echo '<br>'.$cadena2;
    echo '<br>'.$mensaje;
    if (preg_match("/^[a-zA-Z0-9]+$/", $mensaje)) {
        echo "<br>Cadena correcta caracteres validos";
    } else {
        echo "<br>Cadena invalida";
    }

    echo '<br>mmmm'. preg_match("/X{3,}/", $mensaje);

    $chars1 = str_split($cadena1);
    echo '<br>';
    var_dump($chars1);

    $charsm = str_split($mensaje);
    echo '<br>';
    var_dump($charsm);

    $pos = strpos($mensaje, $chars1[0]);
    echo '<br>-iniciar en '.$pos;
    
    fclose($fp);
    unlink("Temporal1.txt");
}
?>