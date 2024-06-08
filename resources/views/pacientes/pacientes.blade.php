<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de pacientes') }}
        </h2>
    </x-slot>

    <div class="p-3 relative overflow-x-auto">
        <div class="my-4">
            @session('success')
                <div class="alert alert-success" role="alert">
                    {{ $value }}
                </div>
            @endsession
        </div>

        <div class="my-4">
            <a href="{{ route('pacientes.create') }}" class="rounded-md bg-blue-500 text-gray-950 p-2 hover:bg-blue-400">Añadir paciente</a>  
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Numero de paciente
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
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                       
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        <a href="#" class="rounded-md bg-blue-500 text-gray-950 p-2 hover:bg-blue-400">Ver expediente</a>  
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                      <a href="#" class="rounded-md bg-blue-500 text-gray-950 p-2 hover:bg-blue-400">Ver</a>
                      <a href="#" class="rounded-md bg-blue-500 text-gray-950 p-2 hover:bg-blue-400">Editar</a>
                      <a href="#" class="rounded-md bg-blue-500 text-gray-950 p-2 hover:bg-blue-400">Borrar</a>
                    </th>
                </tr>
                <td colspan="6">
                    <span class="text-danger">
                        <strong>No hay pacientes</strong>
                    </span>
                </td>
                
            </tbody>
        </table>
    </div>
</x-app-layout>
