<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar servicio') }}
        </h2>
    </x-slot>

    <form>
        <div class="p-5">
            <div class="mb-3">
                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">Nombre del servicio</label>
                <input type="text" id="nombre"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="John" required />
            </div>
            <div class="mb-3">
                <label for="precio" class="block mb-2 text-sm font-medium text-gray-900">Precio</label>
                <input type="number" id="precio"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="" required />
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Agregar</button>
        </div>
    </form>

</x-app-layout>
