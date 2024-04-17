<x-app-layout>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Add Municipio') }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container">
                        <h1>Add Municipio</h1>
                        <form method="POST" action="{{route('municipios.store')}}">
                            @csrf
                            <div class="mb-3">
                                <label for="id" class="form-label">Code</label>
                                <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled="disabled">
                                <div id="idHelp" class="form-text">Municipio Code</div>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Municipio</label>
                                <input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="name" placeholder="Municipio name.">
                            </div>
                            <label for="departamento">Departamento</label>
                            <select class="form-select" id="departamento" name="code" required>
                                <option selected disabled value="">Elige una...</option>
                                @foreach($departamentos as $departamento)
                                    <option value="{{$departamento->depa_codi}}">{{$departamento->depa_nomb}}</option>
                                @endforeach
                            </select>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="{{route('municipios.index')}}" class="btn btn-warning">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/path/to/bootstrap.bundle.min.js"></script>

</x-app-layout>