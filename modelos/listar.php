<?php
include "conexion.php";
$conexion = new Conexion();
$sql = "SELECT id, fecha_solicitud, tipo_cambio, nombre_solicitante, area, nombre_autorizador, estado FROM solicitud";
$response =$conexion ->con-> query($sql);
$result = array();
if($response -> num_rows>0){
    while($row = $response -> fetch_array())
    {
        array_push($result,$row);
    }
}else{
    $result ="No hay Datos";
}
echo json_encode($result);
?>