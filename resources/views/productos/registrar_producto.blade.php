<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nuevo Productos') }}
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
                        <label for="descripcion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción:</label>
                        <input type="text" id="descripcion" class="form-control" placeholder="Ingrese la descripción">
                    </div>
                    <div class="form-group mt-3">
                        <label for="lote" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lote:</label>
                        <input type="number" id="lote" class="form-control" placeholder="Ingrese el lote">
                    </div>
                    <div class="form-group mt-3">
                        <label for="caducidad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Caducidad:</label>
                        <input type="date" id="caducidad" class="form-control" placeholder="Ingrese la caducidad">
                    </div>
                    <div class="form-group mt-3">
                        <label for="existencias" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Existencias:</label>
                        <input type="number" id="existencias" class="form-control" placeholder="Ingrese las existencias">
                    </div>
                    <div class="form-group mt-3">
                        <label for="precio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Precio Unitario:</label>
                        <input type="text" id="precio" class="form-control" placeholder="Ingrese el precio unitario">
                    </div>
                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-success mr-2">Aceptar</button>
                    </div>
                </form>
                <a href="crud_productos"><button type="submit" class="btn btn-danger">Cancelar</button></a>

            </div>
        </div>
    </div>
    </div>
</x-app-layout>
