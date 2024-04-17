<x-app-layout>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pais') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('paises.create') }}" class="btn btn-primary">Add</a>

                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Codigo</th>
                                <th scope="col">Pais</th>
                                <th scope="col">Capital</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($paises as $pais)
                            <tr>
                                <th scope="row">{{ $pais->pais_codi }}</th>
                                <td>{{ $pais->pais_nomb }}</td>
                                <td>{{ $pais->muni_nomb }}</td>
                                <td>
                                    <a href="{{ route('paises.edit', ['pais' => $pais->pais_codi]) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('paises.destroy', ['pais' => $pais->pais_codi]) }}" method='POST' style="display: inline-block">
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
            </div>
        </div>
    </div>
    <script src="/path/to/bootstrap.bundle.min.js"></script>

</x-app-layout>
