<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de medicos') }}
        </h2>
    </x-slot>

    <div class="p-3 relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Id de medico
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nombre del medico
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Correo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Telefono
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Profesion
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tipo de medico
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        1234
                    </th>
                    <td class="px-6 py-4">
                        Yatzari Eduve Pecina Vidales
                    </td>
                    <td class="px-6 py-4">
                        yatzq
                    </td>
                    <td class="px-6 py-4">
                      <button class="rounded-full bg-blue-500 text-gray-950 p-2 w-1/4 hover:bg-blue-400">Ver</button>
                      <button class="rounded-full bg-blue-500 text-gray-950 p-2 w-1/4 hover:bg-blue-400">Editar</button>
                      <button class="rounded-full bg-blue-500 text-gray-950 p-2 w-1/4 hover:bg-blue-400">Borrar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</x-app-layout>
