<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar paciente') }}
        </h2>
    </x-slot>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <div class="py-10">
        <div class="container mt-2">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('pacientes.update', $paciente->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group">
                            <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900">Nombre:</label>
                            <input type="text" value="{{ $paciente->nombre }}" id="nombre" name="nombre"
                                class="form-control" placeholder="Ingrese el nombre">
                        </div>
                        <div class="form-group mt-3">
                            <label for="edad" class="block mb-2 text-sm font-medium text-gray-900">Edad:</label>
                            <input type="number" value="{{ $paciente->edad }}" id="edad" name="edad"
                                class="form-control" placeholder="Ingrese la edad">
                        </div>
                        <div class="form-group mt-3">
                            <label for="sexo" class="block mb-2 text-sm font-medium text-gray-900">Sexo:</label>
                            <select name="sexo" id="sexo"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                @foreach (['F', 'M'] as $opcion)
                                    <option value="{{ $opcion }}"
                                        {{ $opcion == $paciente->sexo ? 'selected' : '' }}>
                                        @switch($opcion)
                                            @case('F')
                                                Femenino
                                            @break

                                            @case('M')
                                                Masculino
                                            @break
                                        @endswitch
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <label for="telefono" class="block mb-2 text-sm font-medium text-gray-900">Telefono:</label>
                            <input type="text" value="{{ $paciente->telefono }}" id="telefono" name="telefono"
                                class="form-control" placeholder="Ingrese el telefono">
                        </div>
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-success mr-2">Aceptar</button>
                            <a href="{{ route('pacientes.index') }}" class="btn btn-danger">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
