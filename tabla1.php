<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actividad 1: Creación dinámica de una tabla</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%; /* Ajusta el ancho según necesidad */
            margin: 20px auto;
            text-align: center;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            width: 10%; /* Ajusta el ancho de las celdas */
            font-weight: bold;
        }
        /* Estilos para la cabecera de la tabla (Números 50-60) */
        th {
            background-color: #7A52A3; /* Púrpura */
            color: white;
        }
        /* Estilo para la primera columna (Posibles divisores 1-10) */
        td:first-child {
            background-color: #87CEEB; /* Azul claro */
        }
        /* Estilos para los colores de las celdas de resultado */
        .es_divisor {
            background-color: #FFD700; /* Amarillo */
        }
        .no_es_divisor {
            background-color: #FFA07A; /* Salmón claro */
        }
    </style>
</head>
<body>


    <h1>Actividad 1: Creación dinámica de una tabla</h1>
    <p>Tabla de divisores de los números del 50 al 60 (incluido) para posibles divisores del 1 al 10.</p>
    
    <table>
        <thead>
            <tr>