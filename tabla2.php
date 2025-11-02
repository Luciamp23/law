<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actividad 2: Tabla de Divisores Dinámica</title>
    <style>
        /* CSS para la tabla con patrón de filas alternas */
        table { border-collapse: collapse; width: fit-content; margin: 20px auto 0; text-align: center; font-family: Arial, sans-serif; font-size: 14px; }
        th, td { border: 1px solid #111; padding: 8px 10px; font-weight: bold; }
        thead th { background-color: #5d3f8a; color: white; }
        tbody td:first-child { background-color: #b0c4de; color: #111; }
        th:empty { background-color: #5d3f8a; border: 1px solid #1px; }
        
        /* Estilos de Filas Alternas (Naranja/Tostado y Amarillo) */
        .fila-naranja { background-color: #FFDDAA; }
        .fila-amarilla { background-color: #FFFF99; }
        /* Mantiene el color de la primera columna */
        .fila-naranja td:first-child,
        .fila-amarilla td:first-child { background-color: #b0c4de; }
    </style>
</head>
<body>


    <h1>Actividad 2: Resultado de la Tabla Dinámica</h1>


    <?php
    
    // =========================================================================
    // FUNCIÓN DE RECUPERACIÓN (Punto clave de la actividad)
    // =========================================================================
    /**
     * Recupera y valida un valor numérico enviado por el método POST.
     * @param string $nombre_parametro El nombre del campo en el formulario (e.g., 'num1').
     * @return int|null El valor entero recuperado o null si no existe/es inválido.
     */
    function recupera(string $nombre_parametro): ?int {
        // 1. Verificar si el parámetro existe
        if (!isset($_POST[$nombre_parametro])) {
            return null;
        }


        // 2. Recuperar y sanitizar
        $valor = filter_input(INPUT_POST, $nombre_parametro, FILTER_SANITIZE_NUMBER_INT);


        // 3. Validar y asegurar que es un entero
        if ($valor === false || !is_numeric($valor) || $valor < 1) {
            return null; // O devuelve un valor predeterminado/lanza un error
        }


        return (int)$valor;
    }




    // =========================================================================
    // FUNCIÓN DE GENERACIÓN DE TABLA
    // =========================================================================
    /**
     * Genera una tabla de divisores para los números 50 a 60.
     * @param int $inicio El divisor inicial (mínimo 1).
     * @param int $fin El divisor final (mínimo 1).
     */
    function muestra_tabla_divisores(int $inicio, int $fin) {
        
        // 1. Ordenar los parámetros si están al revés (ej. 7 y 3)
        if ($inicio > $fin) {
            list($inicio, $fin) = [$fin, $inicio]; // Intercambio usando list()
        }
        
        echo "<p>Tabla generada con posibles divisores desde el **$inicio** hasta el **$fin**.</p>";
        echo "<table><thead><tr><th></th>";


        // Cabecera (Números 50-60)
        for ($j = 50; $j <= 60; $j++) {
            echo "<th>$j</th>";
        }
        echo "</tr></thead><tbody>";