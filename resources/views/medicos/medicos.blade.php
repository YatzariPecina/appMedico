<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de medicos') }}
        </h2>
    </x-slot>

    <div class="p-3 relative overflow-x-auto">
        <div class="my-4">
            <a href="{{ route('medicos.create') }}"
                class="rounded-md bg-blue-500 text-gray-950 p-2 hover:bg-blue-400">Añadir medico</a>
        </div>
        <!-- ver la tabla de medicos existentes -->
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
                <!-- Mostrar datos -->
                @forelse ($medicos as $medico)
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $medico->id }}
                        </th>
                        <th class="px-6 py-4">
                            {{ $medico->nombre }}
                        </th>
                        <th class="px-6 py-4">
                            {{ $medico->correo }}
                        </th>
                        <th class="px-6 py-4">
                            {{ $medico->telefono }}
                        </th>
                        <th class="px-6 py-4">
                            {{ $medico->profesion }}
                        </th>
                        <th class="px-6 py-4">
                            {{ $medico->tipo_medico }}
                        </th>
                        <th class="px-6 py-4 flex flex-col items-start">
                            <a href="{{ route('medicos.show', $medico->id) }}"
                                class="mb-1 rounded-full bg-blue-500 text-gray-950 p-2 hover:bg-blue-400">Ver</a>
                            <a href="{{ route('medicos.edit', $medico->id) }}"
                                class="mb-1 rounded-full bg-blue-500 text-gray-950 p-2 hover:bg-blue-400">Editar</a>
                            <form action="{{ route('medicos.destroy', $medico->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <!-- confirmar al eliminar un doctor -->
                                <button type="submit"
                                    onclick="return confirm('¿Seguro que quieres eliminar a este doctor?');"
                                    class="mb-1 rounded-full bg-blue-500 text-gray-950 p-2 hover:bg-blue-400">Borrar</button>
                            </form>
                        </th>
                    </tr>
                @empty
                    <td colspan="6">
                        <span class="text-danger">
                            <strong>No hay medicos</strong>
                        </span>
                    </td>
                @endforelse
            </tbody>
        </table>
        {{ $medicos->links() }}
    </div>
</x-app-layout>
