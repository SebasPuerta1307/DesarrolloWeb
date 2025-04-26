<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Tipos de Proyecto</title>
    <style>
        table {
            width: 50%;
            margin: auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>

    <h1>Listado de Tipos de Proyecto</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tipos as $tipo)
            <tr>
                <td>{{ $tipo->COD_tipo_proyecto }}</td>
                <td>{{ $tipo->tipo_proyecto }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
