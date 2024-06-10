<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar medico') }}
        </h2>
    </x-slot>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <div class="py-10">
        <div class="container mt-2">
            <!-- marcar un mensaje de error al capturar los datos del medico -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('medicos.update', $medico->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <!-- campo para actualizar el nombre del medico -->
                            <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" value="{{ $medico->nombre }}"
                                class="form-control" placeholder="Ingrese el nombre">
                        </div>
                        <div class="form-group mt-3">
                            <!-- campo para actualizar el correo del medico -->
                            <label for="correo" class="block mb-2 text-sm font-medium text-gray-900">Correo
                                electronico:</label>
                            <input type="email" id="correo" name="correo" value="{{ $medico->correo }}"
                                class="form-control" placeholder="Ingrese su correo electronico">
                        </div>
                        <div class="form-group mt-3">
                            <!-- campo para actualizar el telefono del medico -->
                            <label for="telefono" class="block mb-2 text-sm font-medium text-gray-900">Telefono:</label>
                            <input type="text" id="telefono" name="telefono" value="{{ $medico->telefono }}"
                                class="form-control" placeholder="Ingrese su telefono">
                        </div>
                        <div class="form-group mt-3">
                            <!-- campo para actualizar la profesion del medico -->
                            <label for="profesion"
                                class="block mb-2 text-sm font-medium text-gray-900">Profesion:</label>
                            <input type="text" id="profesion" name="profesion" value="{{ $medico->profesion }}"
                                class="form-control" placeholder="Ingrese su profesion">
                        </div>
                        <div class="form-group mt-3">
                            <!-- campo para actualizar el tipo del medico -->
                            <label for="tipo_medico" class="block mb-2 text-sm font-medium text-gray-900">Tipo de
                                medico:</label>
                            <input type="text" id="tipo_medico" name="tipo_medico" value="{{ $medico->tipo_medico }}"
                                class="form-control" placeholder="Ingrese el tipo de medico">
                        </div>
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-success mr-2">Aceptar</button>
                            <a href="{{ route('medicos.index') }}" class="btn btn-danger">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
