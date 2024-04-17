<x-app-layout>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Edit Departamento') }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container">
                        <h1>Edit Departamento</h1>
                        <form method="POST" action="{{route('departamentos.update',['departamento'=> $departamento->depa_codi])}}">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <label for="codigo" class="form-label">Id</label>
                                <input type="text" class="form-control" id="codigo" aria-describedby="codigoHelp" name="id" disabled="disabled" value="{{ $departamento->depa_codi }}">
                                <div id="idHelp" class="form-text">Departamento Id</div>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Departamento</label>
                                <input type="text" class="form-control" id="name" placeholder="Departamento name." name="name" value="{{ $departamento->depa_nomb }}">
                            </div>
                            <label for="pais">Pais</label>
                            <select class="form-select" id="pais" name="code" required>
                                <option selected disabled value="">Elige una...</option>
                                @foreach($paises as $pais)
                                    @if($pais->pais_codi == $departamento->pais_codi)
                                        <option selected value="{{$pais->pais_codi}}">{{$pais->pais_nomb}}</option>
                                    @else
                                        <option value="{{$pais->pais_codi}}">{{$pais->pais_nomb}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{route('departamentos.index')}}" class="btn btn-warning">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/path/to/bootstrap.bundle.min.js"></script>
 
</x-app-layout>