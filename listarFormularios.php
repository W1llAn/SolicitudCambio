<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Solicitudes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 18px;
            text-align: left;
            background-color: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #b3e5fc;
            color: #333;
        }
        tr:nth-child(even) {
            background-color: #e3f2fd;
        }
        tr:hover {
            background-color: #bbdefb;
        }
        h2 {
            color: #039be5;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding-top: 50px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #039be5;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            margin-top: 20px;
        }
        .btn:hover {
            background-color: #0288d1;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Lista de Solicitudes</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Fecha Solicitud</th>
                <th>Tipo Cambio</th>
                <th>Nombre Solicitante</th>
                <th>Área</th>
                <th>Nombre Autorizador</th>
                <th>Estado</th>
            </tr>
            <?php
            include "conexion.php";
            $conexion = new Conexion();
            $sql = "SELECT id, fecha_solicitud, tipo_cambio, nombre_solicitante, area, nombre_autorizador, estado FROM solicitud";
            $response = $conexion->con->query($sql);
            if ($response->num_rows > 0) {
                while ($row = $response->fetch_array()) {
                    echo "<tr>";
                    echo "<td>{$row['id']}</td>";
                    echo "<td>{$row['fecha_solicitud']}</td>";
                    echo "<td>{$row['tipo_cambio']}</td>";
                    echo "<td>{$row['nombre_solicitante']}</td>";
                    echo "<td>{$row['area']}</td>";
                    echo "<td>{$row['nombre_autorizador']}</td>";
                    echo "<td>{$row['estado']}</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No hay Datos</td></tr>";
            }
            ?>
        </table>
        <a href="index.html" class="btn">Regresar</a>
    </div>
</body>
</html>
