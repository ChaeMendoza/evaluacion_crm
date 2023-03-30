<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>¿Cuantos pares existen?</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />
    <style>
        body {
            background-color: #282828;
            font-family: 'Nunito', sans-serif;
            color: #cccccc;
        }

        h1, h2 {
            color: #1b8ce8;
        }

        th,tbody {
            color: #ceced0;
        }

        th,tbody:hover {
            color: #ceced0;
        }
    </style>
</head>

<body>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center mb-5">Contar pares de elementos en una matriz</h1>
            <form id="pairs-form">
                <div class="form-group">
                    <label for="matrix">Matriz:</label>
                    <input type="text" class="form-control" id="matrix" name="matrix" placeholder="Ej: 1,2,3,4" />
                </div>
                <div class="form-group">
                    <label for="k">Valor objetivo:</label>
                    <input type="text" class="form-control" id="k" name="k" placeholder="Ej: 2" />
                </div>
                <button type="submit" class="btn btn-primary btn-block mt-2 mx-auto">Contar pares</button>
            </form>
            <hr class="my-5">
            <h2 class="text-center mb-4">Resultados acumulados:</h2>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Matriz</th>
                    <th scope="col">Valor objetivo</th>
                    <th scope="col">Pares encontrados</th>
                </tr>
                </thead>
                <tbody id="results"></tbody>
            </table>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#pairs-form').submit(function(event) {
                // Prevenir el envío del formulario
                event.preventDefault();
                // Obtener los valores del formulario
                var matrix = $('#matrix').val();
                var k = $('#k').val();
                // Enviar una solicitud GET a la API
                $.get('/pairs/' + matrix.split(',').length + '/' + k + '/' + matrix, function(data) {
                    // Agregar los resultados a la tabla
                    $('#results').prepend('<tr><td>' + matrix + '</td><td>' + k + '</td><td>' + data.count + '</td></tr>');
                });
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
</body>

</html>
