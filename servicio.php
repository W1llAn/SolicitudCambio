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

        if ($this->conexion->con->query($sql)== true) {
            echo ("Se Inserto su solicitud");
        } else {
            echo("No se guardo");
        }
    }

    public function getLastIdSolicitud() {
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

    public function insertarInfraestructuras($i){
        $sql = "INSERT INTO estructuras (id_solicitud, servidor_BD, servidor_web, servidor_app, BD, otros) 
                VALUES ('$i->id_solicitud', '$i->servidor_BD', '$i->servidor_web', '$i->servidor_app', '$i->BD', '$i->otros')";
        if ($this->conexion->con->query($sql) === true) {
            echo ("Se Insertó");
        } else {
            echo("No se guardó: " . $this->conexion->con->error);
        }    
    }
    
}
?>
