<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF Usuarios</title>
    <style>
        body {
            font-family: "Gill Sans Extrabold", sans-serif;
            color: rgb(71, 75, 78);
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f8f9fa;
        }

        h1 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1.5em;
            margin-bottom: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 600px;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 10px;
            border: 1px solid #dee2e6;
            text-align: left;
        }

        th {
            background-color: #343a40;
            color: white;
            font-size: 0.8em;
        }

        td {
            font-size: 0.85em;
        }
    </style>
</head>
<body>

    <h1>PDF Usuarios</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Identificación</th>
                <th>Dirección</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$userFind["id"]}}</td>
                <td>{{$userFind["name"]}}</td>
                <td>{{$userFind["identification"]}}</td>
                <td>{{$userFind["address"]}}</td>
                <td>{{$userFind["phone"]}}</td>
            </tr>
        </tbody>
    </table>

</body>
</html>
