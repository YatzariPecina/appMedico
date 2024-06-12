<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nueva cita') }}
        </h2>
    </x-slot>

    <form action="{{ route('citas.store') }}" method="POST">
        @csrf
        <div class="p-5">
            <div class="mb-3">
                <label for="id_paciente" class="block mb-2 text-sm font-medium text-gray-900">Elige al paciente de la
                    cita</label>
                <select required id="id_paciente"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value="">--</option>
                    @foreach ($pacientes as $paciente)
                        <option value="{{ $paciente->id }}">{{ $paciente->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <!-- campo para ingresar la edad del paciente-->
                <label for="fecha" class="block mb-2 text-sm font-medium text-gray-900">Fecha</label>
                <input type="datetime-local" id="fecha" name="fecha"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="" required />
            </div>
            <div class="form-group mt-4">
                <button type="submit" class="btn btn-success mr-2">Aceptar</button>
                <a href="{{ route('citas.index') }}" class="btn btn-danger">Cancelar</a>
            </div>
        </div>
    </form>

</x-app-layout>
