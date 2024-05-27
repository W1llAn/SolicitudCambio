<?php

class Servicio
{

    private $conexion;

    public function __construct()
    {
        $this->conexion = new Conexion();
    }

    public function insertSolicitud($f)
    {

        $sql = "INSERT INTO solicitud   (
                                        nombre_solicitante, 
                                        area, 
                                        tipo_cambio,
                                        descripcion_cambio, 
                                        justificacion, 
                                        nombre_validador, 
                                        nombre_autorizador, 
                                        motivo_rechazo, 
                                        descripcion_accion,
                                        responsable_cambio, 
                                        estado) 
                    VALUES             (
                                        '$f->nombre_solicitante', 
                                        '$f->area', 
                                        '$f->tipo_cambio', 
                                        '$f->descripcion_cambio', 
                                        '$f->justificacion', 
                                        '$f->nombre_validador', 
                                        '$f->nombre_autorizador', 
                                        '$f->motivo_rechazo', 
                                        '$f->descripcion_accion',
                                        '$f->responsable_cambio',  
                                        '$f->estado')";

        try {
            return $this->conexion->con->query($sql);
        } catch (mysqli_sql_exception $ex) {
            return false;
        }
    }

    public function getLastIdSolicitud()
    {
        $sql = "SELECT id FROM solicitud ORDER BY id DESC LIMIT 1;";
        $resultado = $this->conexion->con->query($sql);

        if ($resultado) {
            $fila = $resultado->fetch_assoc();
            $id = $fila ? (int)$fila['id'] : null;
        } else {
            $id = null;
        }

        return $id;
    }

    public function insertarInfraestructuras($i)
    {
        try {
            $sql = "INSERT INTO estructuras (id_solicitud, servidor_BD, servidor_web, servidor_app, BD, otros) 
            VALUES ('$i->id_solicitud', '$i->servidor_BD', '$i->servidor_web', '$i->servidor_app', '$i->BD', '$i->otros')";
            return $this->conexion->con->query($sql);
        } catch (mysqli_sql_exception $ex) {
            return false;
        }
    }

    public function eliminarSolicitud($id)
    {
        $sql = "DELETE FROM solicitud WHERE id_solicitud = '$id'";
        try {
            return $this->conexion->con->query($sql);
        } catch (mysqli_sql_exception $ex) {
            return false;
        }
    }
    
    public function selectSolicitud($id)
{
    $sql = "SELECT id, fecha_solicitud, tipo_cambio, nombre_solicitante, area, nombre_autorizador, estado FROM solicitud";
    try {
        $resultado = $this->conexion->con->query($sql);
        if ($resultado && $resultado->num_rows > 0) {
            // Convertir el resultado en un arreglo asociativo
            $registros = array();
            while ($fila = $resultado->fetch_assoc()) {
                $registros[] = $fila;
            }
            return $registros;
        } else {
            return array();
        }
    } catch (mysqli_sql_exception $ex) {
        return false;
    }
}
}
