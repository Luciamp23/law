﻿﻿<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actividad 1: Creación dinámica de una tabla</title>
    <style>
        /* Estilos CSS Base */
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


        /* 1. Estilos de Cabecera (Números 50-60) */
        thead th {
            background-color: #5d3f8a; /* Púrpura oscuro */
            color: white;
        }
        
        /* 2. Estilo de la Primera Columna (Divisores 1-10) */
        tbody td:first-child {
            background-color: #b0c4de; /* Azul grisáceo */
            color: #111;
        }
        
        /* 3. Estilo para la celda vacía de la esquina */
        th:empty {
            background-color: #5d3f8a; /* Color de la cabecera */
            border: 1px solid #111;
        }
        
        /* 4. ESTILOS CLAVE PARA FILAS CONSECUTIVAS */
        /* Color Naranja/Tostado (Filas pares: 2, 4, 6...) */
        .fila-naranja { 
            background-color: #FFDDAA;
        }
        /* Color Amarillo (Filas impares: 1, 3, 5...) */
        .fila-amarilla { 
            background-color: #FFFF99;
        }
        
        /* Asegurarse de que el fondo de la primera columna sea siempre azul grisáceo, sin importar la clase de fila */
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
            // Bucle FOR exterior para las filas de 1 a 10
            for ($i = 1; $i <= 10; $i++) {
                // LÓGICA DE FILA: Impar (1, 3, 5...) = Amarillo; Par (2, 4, 6...) = Naranja
                $clase_fila = ($i % 2 != 0) ? 'fila-amarilla' : 'fila-naranja';
            ?>
                <tr class="<?php echo $clase_fila; ?>">
                    <td><?php echo $i; ?></td> <?php 
                    for ($j = 50; $j <= 60; $j++) {
                        
                        // Lógica de Divisibilidad (solo determina el contenido)
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
                    } // Fin del bucle $j
                    ?>
                </tr>
            <?php 
            } // Fin del bucle $i
            ?>
        </tbody>
    </table>


</body>
</html>