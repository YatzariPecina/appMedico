<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ver el Paciente') }}
        </h2>
    </x-slot>

    <div class="p-6">
        <!-- campo para mostrar alertas de errores -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="m-auto w-1/2 p-4 rounded-md shadow-lg bg-slate-50">
            <div class="flex">
                <!-- campo para ver el nombre del medico -->
                <label for="nombre" class="block mb-2 mr-2 text-lg font-medium text-gray-900">Nombre:</label>
                <div class="col-md-6 text-lg">
                    {{ $medico->nombre }}
                </div>
            </div>
            <div class="flex">
                <!-- campo para ver la edad del medico -->
                <label for="edad" class="block mb-2 mr-2 text-lg font-medium text-gray-900">Edad:</label>
                <div class="col-md-6 text-lg">
                    {{ $medico->edad }}
                </div>
            </div>
            <div class="flex">
                <!-- campo para ver la correo del medico -->
                <label for="edad" class="block mb-2 mr-2 text-lg font-medium text-gray-900">Correo:</label>
                <div class="col-md-6 text-lg">
                    {{ $medico->correo }}
                </div>
            </div> 
            <div class="flex">
                <!-- campo para ver el genero del medico -->
                <label for="sexo" class="block mb-2 mr-2 text-lg font-medium text-gray-900">Sexo:</label>
                <div class="col-md-6 text-lg">
                    {{ $medico->telefono }}
                </div>
            </div>
            <div class="flex">
                <!-- campo para ver el telefono del medico -->
                <label for="telefono" class="block mb-2 mr-2 text-lg font-medium text-gray-900">Telefono:</label>
                <div class="col-md-6 text-lg">
                    {{ $medico->profesion }}
                </div>
            </div>
            <div class="flex">
                <!-- campo para ver el genero del medico -->
                <label for="telefono" class="block mb-2 mr-2 text-lg font-medium text-gray-900">Tipo:</label>
                <div class="col-md-6 text-lg">
                    {{ $medico->tipo_medico }}
                </div>
            </div>
            <div class="">
                <a href="{{ route('medicos.index') }}"
                    class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white focus:outline-none">
                    <span
                        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white rounded-md group-hover:bg-opacity-0">
                        Regresar
                    </span>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
