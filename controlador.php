
<?php

include_once 'formulario.php';
include_once 'conexion.php'; 
include_once 'servicio.php';
include_once 'infraestructura.php';

$servicio = new Servicio();
//$servicio->getLastIdSolicitud();
echo($servicio->getLastIdSolicitud());

$nombre_solicitante = $_POST['nombre_solicitante'];
$area = $_POST['area'];
$tipo_cambio = $_POST['tipo'];
$descripcion_cambio = $_POST['descripcion_cambio'];
$justificacion = $_POST['justificacion'];
$nombre_validador = $_POST['nombre_validador'];
$nombre_autorizador = $_POST['nombre_autorizador'];
$motivo_rechazo = $_POST['motivo_rechazo'] ?? null;
$responsable_cambio = $_POST['responsable_cambio']?? null;
$descripcion_accion = $_POST['descripcion_accion']?? null;
$estado = ($_POST['estado'] == 'aprobado') ? 1 : 0;

$formulario = new Formulario(
    $nombre_solicitante,
    $tipo_cambio,
    $area,
    $descripcion_cambio,
    $justificacion,
    $nombre_validador,
    $nombre_autorizador,
    $descripcion_accion,
    $motivo_rechazo,
    $responsable_cambio,
    $estado
);



///////////// infraestructura opciones ////////////////
$id_solicitud = $servicio->getLastIdSolicitud();
$servidor_BD = isset($_POST['infraestructura1']) && $_POST['infraestructura1'] === 'servidor_BD' ? 1 : 0;
$servidor_web = isset($_POST['infraestructura2']) && $_POST['infraestructura2'] === 'servidor_web' ? 1 : 0;
$servidor_app = isset($_POST['infraestructura3']) && $_POST['infraestructura3'] === 'servidor_app' ? 1 : 0;
$BD = isset($_POST['infraestructura4']) && $_POST['infraestructura4'] === 'BD' ? 1 : 0;
$otros = isset($_POST['infraestructura5']) && $_POST['infraestructura5'] === 'otros' ? 1 : 0;

$infraestructura = new infraestructura(
    $id_solicitud+1, 
    $servidor_BD, 
    $servidor_web, 
    $servidor_app, 
    $BD, 
    $otros);

    $form =$servicio->insertSolicitud($formulario);

    if ($form) {
        if( $servicio->insertarInfraestructuras($infraestructura)){
            header("Location: pagina_respuesta.php?status=success");
            exit();
        }
    } else {
        header("Location: pagina_respuesta.php?status=error");
        exit();
    }

?>