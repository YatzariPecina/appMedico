<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de pacientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('pacientes.create') }}"><button type="submit" 
                    class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Agregar paciente</button></a>
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
                                    Numero del paciente
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nombre del paciente
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Edad
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Sexo
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Telefono
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Expediente
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Acciones
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pacientes as $paciente)
                                <tr class="bg-white border-b">
                                    <th scope="col" class="p-4">
                                        <div class="flex items-center">
                                            <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                        </div>
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $paciente->id }}
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $paciente->nombre }}
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $paciente->edad }}
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $paciente->sexo }}
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $paciente->telefono }}
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        <a href="#" class="rounded-md bg-blue-500 text-gray-950 p-2 hover:bg-blue-400">Ver
                                            expediente</a>
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        <form action="{{ route('pacientes.destroy', $paciente->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('pacientes.show', $paciente->id) }}"
                                            class="font-medium text-green-600 mr-4">Ver</a>
                                            <a href="{{ route('pacientes.edit', $paciente->id) }}"
                                            class="font-medium text-blue-600 mr-4">Editar</a>
                                            <button type="submit" onclick="return confirm('Do you want to delete this product?');"
                                            class="font-medium text-red-600">Borrar</a>
                                    </td>
                                        </form>
                                    </th>
                                </tr>
                            @empty
                                <td colspan="6">
                                    <span class="text-danger">
                                        <strong>No hay pacientes</strong>
                                    </span>
                                </td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
