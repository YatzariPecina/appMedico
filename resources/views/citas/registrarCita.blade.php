<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nueva cita') }}
        </h2>
    </x-slot>

    <form>
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
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Agregar</button>
        </div>
    </form>

</x-app-layout>
