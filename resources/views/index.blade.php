<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de mascotas</title>
    <link rel="stylesheet" href="{{ URL::asset('css/estilos.css') }} ">
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
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Foto</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Raza</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Color</th>
                        <th scope="col">Dueño</th>
                        <th scope="col">imagen dueño</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($mascotas as $mascota)
                            <tr>
                                <td><img type="file" src="{{ asset('storage/img/'.$mascota->foto) }}" alt="Foto" width="100"></td>
                                <td>{{ $mascota->nombre }}</td>
                                <td>{{ $mascota->tipo }}</td>
                                <td>{{ $mascota->raza }}</td>
                                <td>{{ $mascota->edad }}</td>
                                <td>{{ $mascota->color }}</td>
                                <td>{{ $mascota->nombre_dueño }}</td>
                                <td><img type="file" src="{{ asset('storage/dueño/'.$mascota->foto_dueño) }}" alt="Foto dueño" width="100"></td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>