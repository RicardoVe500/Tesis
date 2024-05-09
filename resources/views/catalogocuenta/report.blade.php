<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reporte Catalogo de cuentas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<h2>Reporte de catalogo de cuentas</h2>
<p></p>

<body>

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Cuenta</th>
                    <th>Nombrecuenta</th>
                    <th>Nivelcuenta</th>
                    <th>Movimientos</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($catalogocuentas as $catalogocuenta)
                    <tr>
                        <td>{{ $catalogocuenta->n1 }}{{ $catalogocuenta->n2 }}{{ $catalogocuenta->n3 }}{{ $catalogocuenta->n4 }}{{ $catalogocuenta->n5 }}{{ $catalogocuenta->n6 }}{{ $catalogocuenta->n7 }}{{ $catalogocuenta->n8 }}
                        </td>
                        <td>{{ $catalogocuenta->nombreCuenta }}</td>
                        <td>{{ $catalogocuenta->nivelCuenta }}</td>
                        <td>{{ $catalogocuenta->movimiento->movimientos }}</td>
                    </tr>
                @endforeach
            </tbody>
</body>

</html>
