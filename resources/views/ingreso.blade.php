<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ingreso mascota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color: rgb(21, 47, 47)">
    <div class="container-sm ps-5 pe-5 pt-5 pb-3 text-center border border-3 border-black mt-3 bg-light">
        <h1>Mascotas.com</h1><br>
    </div>

    <div class="container-sm">
        <div class="row">
            <div class="col-2 border border-black border-3 mt-5 p-5 text-center bg-light">
                <h3><a href="{{ route('index') }}" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Lista de mascotas</a></h3><br>
                <h3><a href="{{ route('ingreso') }}" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">ingresar mascotas</a></h3>
            </div>

            <div class="col border border-black border-3 mt-5 ms-5 p-3 bg-light">
                <form action="{{ route('ingreso.store')}}" method="POST" enctype="multipart/form-data" class="text-start">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="tipo" class="form-label">Tipo</label>
                        <input type="text" class="form-control" id="tipo" name="tipo" required>
                    </div>
                    <div class="mb-3">
                        <label for="raza" class="form-label">Raza</label>
                        <input type="text" class="form-control" id="raza" name="raza" required>
                    </div>
                    <div class="mb-3">
                        <label for="edad" class="form-label">Edad</label>
                        <input type="text" class="form-control" id="edad" name="edad" required>
                    </div>
                    <div class="mb-3">
                        <label for="color" class="form-label">Color</label>
                        <input type="text" class="form-control" id="color" name="color" required>
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="file" class="form-control" id="foto" name="foto" required>
                    </div>
                    <div class="mb-3">
                        <label for="nombre_dueño" class="form-label">Nombre del dueño</label>
                        <input type="text" class="form-control" id="nombre_dueño" name="nombre_dueño" required>
                    </div>
                    <div class="mb-3">
                        <label for="foto_dueño" class="form-label">Foto del dueño</label>
                        <input type="file" class="form-control" id="foto_dueño" name="foto_dueño" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Ingresar mascota</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>