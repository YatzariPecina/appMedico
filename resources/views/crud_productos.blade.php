<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crud de Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __(".") }}
                </div>

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Código
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nombre
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Descripción
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Numero de Lote
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Fecha de Caducidad
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Existencias
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Precio Unitario
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Acciones
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    ID 1
                                </th>
                                <td class="px-6 py-4">
                                    Nombre 1
                                </td>
                                <td class="px-6 py-4">
                                    Descripcion 1
                                </td>
                                <td class="px-6 py-4">
                                    Lote 1
                                </td>
                                <td class="px-6 py-4">
                                    Caducidad 1
                                </td>
                                <td class="px-6 py-4">
                                    Existencias 1
                                </td>
                                <td class="px-6 py-4">
                                    precio 1
                                </td>
                                <td class="flex items-center px-6 py-4">
                                    <a href="edit_producto" class="font-medium text-blue-600">Edit</a>
                                    <a href="#" class="font-medium text-red-600">Remove</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
