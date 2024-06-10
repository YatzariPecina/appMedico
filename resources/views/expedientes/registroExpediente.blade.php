<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registrar pacientes') }}
        </h2>
    </x-slot>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <div class="py-10">
       <div class="container mt-2">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('pacientes.store') }}" method="POST">
                    @csrf
                    <!-- campo para ingresar el nombre del paciente -->
                    <div class="form-group">
                        <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingrese el nombre">
                    </div>
                    <div class="form-group mt-3">
                        <!-- campo para ingresar la edad del paciente -->
                        <label for="edad" class="block mb-2 text-sm font-medium text-gray-900">Edad:</label>
                        <input type="number" id="edad" name="edad" class="form-control" placeholder="Ingrese la edad">
                    </div>
                    <div class="form-group mt-3">
                        <!-- campo para ingresar el genero del paciente -->
                        <label for="sexo" class="block mb-2 text-sm font-medium text-gray-900">Sexo:</label>
                        <select name="sexo" id="sexo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="F">Femenino</option>
                            <option value="M">Masculino</option>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <!-- campo para ingresar el telefono del paciente -->
                        <label for="telefono" class="block mb-2 text-sm font-medium text-gray-900">Telefono:</label>
                        <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Ingrese el telefono">
                    </div>
                    <div class="mb-3">
                        <label class="block">
                            <!-- campo para ingresar el expediente del paciente -->
                            <label class="block mb-2 text-sm font-medium text-gray-900" for="file">Subir expediente existente: (opcional)</label>
                            <input type="file"
                                class="focus:outline-none block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4
                                file:rounded-full file:border-0 file:cursor-pointer cursor-pointer
                                file:text-sm file:font-semibold
                                file:bg-gray-900 file:text-white
                                hover:file:bg-gray-800
                                "
                                id="file" />
                        </label>
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
