<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$extension = pathinfo($_FILES['problema2']['name'], PATHINFO_EXTENSION);
//echo("The extension is $extension. <br>"); 

if ( $extension != 'txt') {
    echo 'Error, extension de archivo invalida. <br>';
} else {
    echo 'Procesando. <br>';
    move_uploaded_file($_FILES['problema2']['tmp_name'], "Temporal2.txt");

    $contenido = array();
    $fp = fopen("Temporal2.txt", "r");
    while (!feof($fp)){
        array_push($contenido, fgets($fp));
    }
    var_dump($contenido);

    //Definir variables para manejo de datos

    $rondas = $contenido[0];
    echo("<br>Son $rondas rondas.<br>");
    $lideres = array();
    $ventajas = array();
    for ($i=1; $i <= $rondas ; $i++) {
        $ronda = explode(' ', $contenido[$i]);
        echo '<br> Ronda '.$i;
        var_dump($ronda);

        if (intval($ronda[0]) == intval($ronda[1])) {
            //Son iguales como le hago?
            echo 'IGUALES';
        } else if(intval($ronda[0]) > intval($ronda[1])) {
            echo 'GANA JUGADOR 1';
            array_push($lideres, 1);
            array_push($ventajas, (intval($ronda[0]) - intval($ronda[1])) );
        } else {
            echo 'GANA JUGADOR 2';
            array_push($lideres, 2);
            array_push($ventajas, (intval($ronda[1]) - intval($ronda[0])) );
        }





        //array_push($lideres, fgets($fp));
        //array_push($ventajas, fgets($fp));
    }

    echo '<br>Lideres';
    var_dump($lideres);
    echo '<br>Ventajas';
    var_dump($ventajas);
    $mayor = max($ventajas);
    echo '<br>Mayor '.$mayor;
    $clave = array_search($mayor, $ventajas);
    echo '<br>Posicion '.$clave;

    echo '<br><br><br>SALIDA';
    echo '<br>'.$lideres[$clave].' '.$ventajas[$clave];

    fclose($fp);
    unlink("Temporal2.txt");
}









/*$cod_estudiante=$_POST['cod_estudiante'];
$dni=$_POST['dni'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];


$sql="INSERT INTO alumno VALUES('$cod_estudiante','$dni','$nombres','$apellidos')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
}else {
    echo "error";
}*/
?>