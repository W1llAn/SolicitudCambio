<?php

class Formulario {
    public $nombre_solicitante;
    public $tipo_cambio;
    public $area;
    public $descripcion_cambio;
    public $justificacion;
    public $nombre_validador;
    public $nombre_autorizador;
    public $motivo_rechazo;
    public $descripcion_accion;
    public $responsable_cambio;
    public $estado;

    public function __construct( $nombre_solicitante, $tipo_cambio,$area, $descripcion_cambio, $justificacion, $nombre_validador, $nombre_autorizador, $descripcion_accion,$motivo_rechazo, $responsable_cambio, $estado) {
        $this->nombre_solicitante = $nombre_solicitante;
        $this->tipo_cambio = $tipo_cambio;
        $this->area = $area;
        $this->descripcion_cambio = $descripcion_cambio;
        $this->justificacion = $justificacion;
        $this->nombre_validador = $nombre_validador;
        $this->nombre_autorizador = $nombre_autorizador;
        $this->motivo_rechazo = $motivo_rechazo;
        $this->responsable_cambio = $responsable_cambio;
        $this->estado = $estado;
        $this->descripcion_accion =$descripcion_accion;
    }
}


?>