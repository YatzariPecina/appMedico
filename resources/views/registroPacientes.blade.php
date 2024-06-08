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
                <form action="#" method="GET">
                    <div class="form-group">
                        <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre:</label>
                        <input type="text" id="nombre" class="form-control" placeholder="Ingrese el nombre">
                    </div>
                    <div class="form-group mt-3">
                        <label for="edad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Edad:</label>
                        <input type="number" id="edad" class="form-control" placeholder="Ingrese la edad">
                    </div>
                    <div class="form-group mt-3">
                        <label for="sexo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sexo:</label>
                        <input type="text" id="sexo" class="form-control" placeholder="Ingrese el sexo">
                    </div>
                    <div class="form-group mt-3">
                        <label for="telefono" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefono:</label>
                        <input type="text" id="telefono" class="form-control" placeholder="Ingrese el telefono">
                    </div>
                    <div class="mb-3">
                        <label class="block">
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
                        <button type="submit" class="btn btn-danger">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
