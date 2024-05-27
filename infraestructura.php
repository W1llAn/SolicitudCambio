<?php

    class infraestructura{

        public $id_solicitud;
        public $servidor_BD;
        public $servidor_web;
        public $servidor_app;
        public $BD;
        public $otros;

        public function __construct($id_solicitud, $servidor_BD, $servidor_web, $servidor_app, $BD, $otros)
    {
        $this->id_solicitud = $id_solicitud;
        $this->servidor_BD = $servidor_BD;
        $this->servidor_web = $servidor_web;
        $this->servidor_app = $servidor_app;
        $this->BD = $BD;
        $this->otros = $otros;
    }
    }
?>