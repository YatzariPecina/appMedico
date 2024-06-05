<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nuevo servicio') }}
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
                <label for="edad" class="block mb-2 text-sm font-medium text-gray-900">Edad</label>
                <input type="number" id="edad"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="" required />
            </div>
            <!-- Select sexo -->
            <div class="mb-3">
                <label for="sexo" class="block mb-2 text-sm font-medium text-gray-900">Elige el
                    sexo</label>
                <select required id="sexo"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value="">--</option>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Phone number</label>
                <input type="tel" id="phone"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required />
            </div>
            <div class="mb-3">
                <label class="block">
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="file">Subir expediente</label>
                    <input type="file"
                        class="focus:outline-none block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4
                          file:rounded-full file:border-0 file:cursor-pointer cursor-pointer
                          file:text-sm file:font-semibold
                          file:bg-gray-900 file:text-white
                          hover:file:bg-gray-800
                        "
                        id="file" />
                </label>
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Agregar</button>
        </div>
    </form>

</x-app-layout>
