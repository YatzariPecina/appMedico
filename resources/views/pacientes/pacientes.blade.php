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
            <a href="{{ route('pacientes.create') }}"
                class="rounded-md bg-blue-500 text-gray-950 p-2 hover:bg-blue-400">Añadir paciente</a>
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
                @forelse ($pacientes as $paciente)
                    <tr class="bg-white border-b">
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
                                    class="rounded-md bg-blue-500 text-gray-950 p-2 hover:bg-blue-400">Ver</a>
                                <a href="{{ route('pacientes.edit', $paciente->id) }}"
                                    class="rounded-md bg-blue-500 text-gray-950 p-2 hover:bg-blue-400">Editar</a>
                                <button type="submit" onclick="return confirm('Do you want to delete this product?');"
                                    class="rounded-md bg-red-500 text-gray-950 p-2 hover:bg-red-400">Borrar</a>
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
        {{ $pacientes->links() }}
    </div>
</x-app-layout>
