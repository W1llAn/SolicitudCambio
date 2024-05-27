<?php

class Formulario {
    private $id;
    public $fecha_solicitud;
    public $fecha_registro;
    public $nombre_solicitante;
    public $area;
    public $infraestructura;
    public $descripcion_cambio;
    public $justificacion;
    public $nombre_validador;
    public $nombre_autorizador;
    public $motivo_rechazo;
    public $responsable_cambio;
    public $fecha_cambio;
    public $estado;

    public function __construct($fecha_solicitud, $fecha_registro, $nombre_solicitante, $area, $infraestructura, $descripcion_cambio, $justificacion, $nombre_validador, $nombre_autorizador, $motivo_rechazo, $responsable_cambio, $fecha_cambio, $estado) {
        $this->fecha_solicitud = $fecha_solicitud;
        $this->fecha_registro = $fecha_registro;
        $this->nombre_solicitante = $nombre_solicitante;
        $this->area = $area;
        $this->infraestructura = $infraestructura;
        $this->descripcion_cambio = $descripcion_cambio;
        $this->justificacion = $justificacion;
        $this->nombre_validador = $nombre_validador;
        $this->nombre_autorizador = $nombre_autorizador;
        $this->motivo_rechazo = $motivo_rechazo;
        $this->responsable_cambio = $responsable_cambio;
        $this->fecha_cambio = $fecha_cambio;
        $this->estado = $estado;
    }
}


?>