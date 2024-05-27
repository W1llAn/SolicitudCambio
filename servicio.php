<?php

class Servicio
{
    
    private $conexion;

    public function __construct()
    {
        $this->conexion = new Conexion();
        
    }

    public function insert($f)
    {

        $sql = "INSERT INTO solicitud   (fecha_solicitud, 
                                        fecha_registro, 
                                        nombre_solicitante, 
                                        area, 
                                        infraestructura, 
                                        descripcion_cambio, 
                                        justificacion, 
                                        nombre_validador, 
                                        nombre_autorizador, 
                                        motivo_rechazo, 
                                        responsable_cambio, 
                                        fecha_cambio, 
                                        estado) 
                    VALUES             ('$f->fecha_solicitud', 
                                        '$f->fecha_registro', 
                                        '$f->nombre_solicitante', 
                                        '$f->area', 
                                        '$f->infraestructura', 
                                        '$f->descripcion_cambio', 
                                        '$f->justificacion', 
                                        '$f->nombre_validador', 
                                        '$f->nombre_autorizador', 
                                        '$f->motivo_rechazo', 
                                        '$f->responsable_cambio', 
                                        '$f->fecha_cambio', 
                                        '$f->estado')";

        if ($this->conexion->con->query($sql)== true) {
            echo ("Se guardo");
        } else {
            echo("No se guardo");
        }
        echo "Registro insertado con éxito";
    }

    
}
?>
