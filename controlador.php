<?php

include_once 'formulario.php';
include_once 'conexion.php'; 



$formulario = new Formulario(
    '2024-05-25', '2024-05-25', 'Juan Perez', 'IT', 'Network',
    'Actualizar routers', 'Mejora de rendimiento', 'Pedro Gonzalez',
    'Maria Lopez', '', 'Ana Martinez', '2024-06-01', 1
);

$servicio = new Servicio();
$servicio->insert($formulario);

?>