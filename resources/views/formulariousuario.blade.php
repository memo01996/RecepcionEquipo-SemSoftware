<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Formulario Usuario</title>
</head>
<body>
    <!--Creacion de usuario-->
    <h1 class="text-center bg-success text-white shadow">Fomulario Usuario</h1>
    <div class="container p-4">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-sm-8 ">
                <form class="card p-5 shadow" action="{{route('formulariousuario.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label"  for="nombre">Nombre</label>
            <input class="form-control" type="text" name="nombre" required>
        </div>
        <div class="mb-3">
            <label class="form-label"  for="rol">Rol</label>
            <input class="form-control" type="text" name="rol" required>
        </div>
        <div class=" w-100 d-flex justify-content-center align-content-center">
                <button type="submit" class="btn btn-success">Guardar Usuario</button>
            </div>

    </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
