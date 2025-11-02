<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actividad 1: Creación dinámica de una tabla</title>
    <style>
        /* Estilos CSS */
        table {
            border-collapse: collapse;
            width: fit-content; /* Ajuste al contenido */
            margin: 20px auto;
            text-align: center;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #111;
            padding: 8px 10px;
            font-weight: bold;
            font-size: 14px;
        }
        /* Estilos específicos para la Cabecera y la Primera Columna */
        thead th {
            background-color: #5d3f8a; /* Púrpura oscuro */
            color: white;
            border-top: 3px solid #5d3f8a;
            border-bottom: 3px solid #5d3f8a;
            /* Estilo para simular la imagen */
            border-left: none; 
        }
        tbody td:first-child {
            background-color: #b0c4de; /* Azul grisáceo para divisores 1-10 */
            color: #111;
            border-left: 3px solid #b0c4de;
            border-right: 3px solid #b0c4de;
        }
        /* Celda vacía en la esquina */
        th:empty {
            background-color: #f0f0f0;
            border-right: none;
            border-top: none;
        }
        /* Estilos para los colores de las celdas de resultado */
        .es_divisor {
            background-color: #ffffe0; /* Amarillo muy claro */
            color: #000;
        }
        .no_es_divisor {
            background-color: #eedd82; /* Tostado claro */
            color: #666; 
        }
    </style>
</head>
<body>


    <h1>Actividad 1: Creación dinámica de una tabla</h1>
    <p>Tabla de divisores de los números del 50 al 60 (incluido) para posibles divisores del 1 al 10.</p>
    
    <table>
        <thead>
            <tr>
                <th></th> <?php for ($j = 50; $j <= 60; $j++): ?>
                    <th><?php echo $j; ?></th>
                <?php endfor; ?>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 1; $i <= 10; $i++): ?>
                <tr>
                    <td><?php echo $i; ?></td> <?php for ($j = 50; $j <= 60; $j++): ?>
                        
                        <?php 
                            // Lógica PHP: Comprobamos si $j es divisible por $i
                            if ($j % $i == 0) {
                                $clase = 'es_divisor';
                                $contenido = '*'; // Asterisco si es divisor
                            } else {
                                $clase = 'no_es_divisor';
                                $contenido = '-'; // Guion si no es divisor
                            }
                        ?>
                        
                        <td class="<?php echo $clase; ?>">
                            <?php echo $contenido; ?>
                        </td>
                        
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>


</body>
</html>