<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado_Comuna</title>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Laravel Cecep</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/comunas">Comunas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/municipios">Municipios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/departamentos">Departamentos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/paises">Paises</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
    <div class="container">
      <h1>Listado de Comunas</h1>
      <a href="{{route('comunas.create')}}" class="btn btn-success">Add</a>
      <table class="table">
        <thead>
            <tr>
              <th scope="col">Codigo</th>
              <th scope="col">Comuna</th>
              <th scope="col">Municipalidad</th>
              <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($comunas as $comuna)
            <tr>
              <th scope="row">{{ $comuna->comu_codi }}</th>
              <td>{{ $comuna->comu_nomb }}</td>
              <td>{{ $comuna->muni_nomb }}</td>
              <td>
                  <a href="{{route('comunas.edit',['comuna'=>$comuna->comu_codi])}}"
                  class="btn btn-info">Edit</a>
                  
                  <form action="{{ route('comunas.destroy', ['comuna' => $comuna->comu_codi]) }}"
                    method='POST' style="display: inline-block">
                    @method('delete')
                    @csrf
                <input class="btn btn-danger" type="submit" value="delete">
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </body>
</html>