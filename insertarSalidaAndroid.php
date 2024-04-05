<?php

$conexion =mysqli_connect('74.208.110.170', 'luisito', 'LuisitoPassword', 'Luisito');
if (!$conexion) {
    echo "Error en la conexion";
} else {
    echo "Conexion exitosa";
}
    //$id=$_POST['id'];
    $unidad=$_POST['unidad']; 
    $fecha=$_POST['fecha']; 
    $hora=$_POST['hora'];
    $latitud=$_POST['latitud'];
    $longitud=$_POST['longitud'];

    // Realiza la consulta SQL solo si los datos son válidos
    $consulta="INSERT INTO Salidas(unidad,fecha,hora,latitud,longitud) VALUES('".$unidad."', '".$fecha."', '".$hora."', '".$latitud."', '".$longitud."')";
    $resultado =mysqli_query($conexion,$consulta);
    
    if ($resultado){
        echo "datos registrados";
    } else {
        echo "error de datos";
    }
?>