﻿<!DOCTYPE html>
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
            border: 1px solid #111; /* Borde simple */
        }
        
        /* 4. Estilo para el sombreado alternado (Posición impar-impar o par-par) */
        /* Esta clase simula el fondo amarillo de la imagen que deseas */
        .patron-claro {
            background-color: #FFFF99; /* Amarillo claro */
        }
        
        /* El fondo por defecto de las celdas de resultado será el color tostado/salmón de la imagen deseada */
        tbody td {
            background-color: #FFDDAA; /* Tostado/Salmón */
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
                // $j es el índice de columna virtual (1 a 11)
                $j_index = 0; 
                for ($j = 50; $j <= 60; $j++) {
                    $j_index++;
                    echo "<th>$j</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php 
            // $i es el índice de fila (1 a 10)
            for ($i = 1; $i <= 10; $i++) {
            ?>
                <tr>
                    <td><?php echo $i; ?></td> <?php 
                    $j_index = 0; // Reinicia el índice de columna para cada fila
                    for ($j = 50; $j <= 60; $j++) {
                        $j_index++;
                        
                        // Lógica de Divisibilidad
                        if ($j % $i == 0) {
                            $contenido = '*';
                        } else {
                            $contenido = '-';
                        }
                        
                        // LÓGICA DE SOMBREADO POR POSICIÓN: 
                        // Aplicamos el sombreado claro si la suma de los índices es par (ej. 1+1=2, 2+2=4)
                        $clase_posicion = (($i + $j_index) % 2 == 0) ? 'patron-claro' : '';
                    ?>
                        
                        <td class="<?php echo $clase_posicion; ?>">
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