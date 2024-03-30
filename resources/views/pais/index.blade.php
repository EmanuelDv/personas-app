<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado Pais</title>
  </head>
  <body>
    <div class="container">
    <h1>Listado Pais</h1>
    <a href="{{route('paises.create')}}" class="btn btn-success">ADD</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">codigo</th>
      <th scope="col">pais</th>
      <th scope="col">capital</th>
      <th scope="col">acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($paises as $pais)
    <tr>
      <th scope="row">{{$pais->pais_codi}}</th>
      <td>{{$pais->pais_nomb}}</td>
      <td>{{$pais->muni_nomb}}</td>
      <td>
        <form action="{{route('paises.destroy', ['pais'=> $pais->pais_codi])}}"
        method="POST" style="display: inline-block">
      @method('delete')
      @csrf
      <input class="btn btn-danger" type="submit" value="Delete">
      </form>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>