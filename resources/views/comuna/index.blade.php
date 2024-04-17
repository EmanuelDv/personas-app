<x-app-layout>
    <!-- CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Comunas') }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('comunas.create') }}" class="btn btn-primary mb-3">Add</a>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Codigo</th>
                                <th scope="col">Comuna</th>
                                <th scope="col">Municipio</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comunas as $comuna)
                            <tr>
                                <th scope="row">{{ $comuna->comu_codi }}</th>
                                <td>{{ $comuna->comu_nomb }}</td>
                                <td>{{ $comuna->muni_nomb }}</td>
                                <td>
                                    <a href="{{ route('comunas.edit', ['comuna' => $comuna->comu_codi]) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('comunas.destroy', ['comuna' => $comuna->comu_codi]) }}" method='POST' style="display: inline-block">
                                        @method('delete')
                                        @csrf
                                        <input class="btn btn-danger btn-sm" type="submit" value="Delete">
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