<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actividad 2: Tabla de Divisores Dinámica</title>
    <style>
        /* CSS para la tabla*/
        table { border-collapse: collapse; width: fit-content; margin: 20px auto 0; text-align: center; font-family: Arial, sans-serif; font-size: 14px; }
        th, td { border: 1px solid #111; padding: 8px 10px; font-weight: bold; }
        thead th { background-color: #5d3f8a; color: white; }
        tbody td:first-child { background-color: #b0c4de; color: #111; }
        th:empty { background-color: #5d3f8a; border: 1px solid #1px; }
        .fila-naranja { background-color: #FFDDAA; }
        .fila-amarilla { background-color: #FFFF99; }
        .fila-naranja td:first-child,
        .fila-amarilla td:first-child { background-color: #b0c4de; }
    </style>
</head>
<body>


    <h1>Actividad 2: Resultado de la Tabla Dinámica</h1>


    <?php
    
    // =========================================================================
    // FUNCIÓN DE RECUPERACIÓN (reutilizable)
    // =========================================================================
    function recupera(string $nombre_parametro): ?int {
        $valor = $_POST[$nombre_parametro] ?? null; 
        if ($valor !== null && is_numeric($valor) && (int)$valor >= 1) {
            return (int)$valor;
        }
        return null;
    }




    // =========================================================================
    // FUNCIÓN DE GENERACIÓN DE TABLA
    // =========================================================================
    function muestra_tabla_divisores(int $inicio, int $fin) {
        
        // Ordenar los parámetros
        if ($inicio > $fin) {
            [$inicio, $fin] = [$fin, $inicio];
        }
        
        // Imprimir Cabecera
        echo "<p>Tabla generada con posibles divisores desde el **$inicio** hasta el **$fin**.</p>";
        echo "<table><thead><tr><th></th>";
        for ($j = 50; $j <= 60; $j++) {
            echo "<th>$j</th>";
        }
        echo "</tr></thead><tbody>";


        // Imprimir Filas
        $i_index = 0; 
        for ($i = $inicio; $i <= $fin; $i++) {
            $i_index++;
            $clase_fila = ($i_index % 2 != 0) ? 'fila-amarilla' : 'fila-naranja';
            echo "<tr class=\"$clase_fila\">";
            echo "<td>$i</td>"; 
            for ($j = 50; $j <= 60; $j++) {
                $contenido = ($j % $i == 0) ? '*' : '-';
                echo "<td>$contenido</td>";
            }
            echo "</tr>";
        }
        echo "</tbody></table>";
    }


    // =========================================================================
    // EJECUCIÓN PRINCIPAL
    // =========================================================================
    
    // Verificamos si los datos vienen de un POST
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
        $num_inicio = recupera('num1');
        $num_fin = recupera('num2');
        
        if ($num_inicio !== null && $num_fin !== null) {
            muestra_tabla_divisores($num_inicio, $num_fin);
            
        } else {
            echo "<p style='color: red; font-weight: bold;'>Error: No se han recibido los números válidos del formulario.</p>";
            echo "<p>Por favor, regrese al <a href='tabla_1.html'>formulario</a> para ingresar los valores.</p>";
        }
    } else {
         echo "<p>Por favor, ingrese los números desde el <a href='tabla_1.html'>formulario de la Actividad 2</a>.</p>";
    }
    ?>


</body>
</html>