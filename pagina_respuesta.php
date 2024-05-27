<?php
// Verifica si se ha pasado el parámetro 'status' en la URL
$status = isset($_GET['status']) ? $_GET['status'] : '';

// Define el mensaje y el título según el estado
$message = '';
$title = '';
if ($status === 'success') {
    $title = '¡Éxito!';
    $message = '¡Formulario enviado con éxito! Tu mensaje ha sido enviado correctamente. ¡Gracias por contactarnos!';
} elseif ($status === 'error') {
    $title = '¡Error!';
    $message = 'Hubo un problema al procesar tu solicitud. Por favor, inténtalo de nuevo más tarde.';
} else {
    // Si el estado no está definido o es incorrecto, redirige a la página de error
    header("Location: pagina_error.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        body {
            background-color: #13294B; /* Azul marino */
            color: black;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ccc; /* Azul */
            padding: 20px;
            border-radius: 10px;
        }
        .btn {
            display: inline-block;
            background-color: #13294B; /* Azul claro */
            color: white;
            font-size: 16px;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .btn:hover {
            background-color: #255997; /* Azul más oscuro al pasar el ratón */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2><?php echo $title; ?></h2>
        <p><?php echo $message; ?></p>
        <a href="index.html" class="btn">Regresar</a>
    </div>
</body>
</html>
