<x-app-layout>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Edit Pais') }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container">
                        <h1>Edit Pais</h1>
                        <form method="POST" action="{{route('paises.update', ['pais' => $pais->pais_codi])}}">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <label for="id" class="form-label">Id</label>
                                <input type="text" class="form-control" id="id" aria-describedby="codigoHelp" name="id" disabled="disabled" value="{{$pais->pais_codi}}">
                                <div id="codigoHelp" class="form-text">Pais Code</div>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Pais</label>
                                <input type="text" required class="form-control" id="name" name="name" placeholder="Pais Name." value="{{$pais->pais_nomb}}">
                            </div>
                            <label for="capital">Capital:</label>
                            <select class="form-select" name="code" id="capital" required>
                                <option selected disabled value="">Elija uno...</option>
                                @foreach ($municipios as $municipio)
                                    @if($municipio->muni_codi == $pais->muni_codi)
                                        <option selected value="{{$municipio->muni_codi}}">{{$municipio->muni_nomb}}</option>
                                    @else
                                        <option value="{{$municipio->muni_codi}}">{{$municipio->muni_nomb}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{route('paises.index')}}" class="btn btn-warning">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/path/to/bootstrap.bundle.min.js"></script>

</x-app-layout>