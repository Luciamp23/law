﻿﻿<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actividad 1: Creación dinámica de una tabla</title>
    <style>
        table {
            border-collapse: collapse;
            width: fit-content;
            margin: 20px auto;
            text-align: center;
            font-family: Arial, sans-serif;
            font-size: 14px;
        }
        th, td {
            border: 1px solid #111;
            padding: 8px 10px;
            font-weight: bold;
        }

        thead th {
            background-color: #5d3f8a;
            color: white;
        }
        
        tbody td:first-child {
            background-color: #b0c4de; 
            color: #111;
        }
        
        th:empty {
            background-color: #5d3f8a; 
            border: 1px solid #111;
        }
        
        .fila-naranja { 
            background-color: #FFDDAA;
        }
        .fila-amarilla { 
            background-color: #FFFF99;
        }
        
        .fila-naranja td:first-child,
        .fila-amarilla td:first-child {
            background-color: #b0c4de; 
        }


    </style>
</head>
<body>


    <h1>Actividad 1: Creación dinámica de una tabla</h1>
    <p>Tabla de divisores de los números del 50 al 60 (incluido) para posibles divisores del 1 al 10.</p>
    
    <table>
        <thead>
            <tr>
                <th></th> <?php 
                for ($j = 50; $j <= 60; $j++) {
                    echo "<th>$j</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php 
            for ($i = 1; $i <= 10; $i++) {
                $clase_fila = ($i % 2 != 0) ? 'fila-amarilla' : 'fila-naranja';
            ?>
                <tr class="<?php echo $clase_fila; ?>">
                    <td><?php echo $i; ?></td> <?php 
                    for ($j = 50; $j <= 60; $j++) {
                        
                        if ($j % $i == 0) {
                            $contenido = '*';
                        } else {
                            $contenido = '-';
                        }
                    ?>
                        <td>
                            <?php echo $contenido; ?>
                        </td>
                        
                    <?php 
                    } 
                    ?>
                </tr>
            <?php 
            } 
            ?>
        </tbody>
    </table>


</body>
</html>