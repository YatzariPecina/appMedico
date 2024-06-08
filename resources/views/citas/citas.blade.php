<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Lista de citas') }}
      </h2>
  </x-slot>

  <div class="p-3 relative overflow-x-auto">
      <!-- Añade responsive:breakpoint para ajustar el diseño en diferentes tamaños de pantalla -->
      <table class="w-full text-sm text-left rtl:text-right text-gray-500 responsive:table-fixed">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50">
              <tr>
                  <th scope="col" class="px-6 py-3 w-full sm:w-auto">
                      Numero de cita
                  </th>
                  <th scope="col" class="px-6 py-3 w-full sm:w-auto">
                      Nombre paciente
                  </th>
                  <th scope="col" class="px-6 py-3 w-full sm:w-auto">
                      Fecha
                  </th>
                  <th scope="col" class="px-6 py-3 w-full sm:w-auto">
                      Acciones
                  </th>
              </tr>
          </thead>
          <tbody>
              <tr class="bg-white border-b">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                      1234
                  </th>
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                      Yatzari Eduve Pecina Vidales
                  </th>
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                      12-02-2023
                  </th>
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    <div class="flex flex-wrap gap-2">
                      <a href="#" class="rounded-full bg-blue-500 text-gray-950 p-2 w-full sm:w-auto hover:bg-blue-400">Ver</a>
                      <a href="#" class="rounded-full bg-blue-500 text-gray-950 p-2 w-full sm:w-auto hover:bg-blue-400">Editar</a>
                      <a href="#" class="rounded-full bg-blue-500 text-gray-950 p-2 w-full sm:w-auto hover:bg-blue-400">Borrar</a>
                    </div>
                  </th>
              </tr>
          </tbody>
      </table>
  </div>
</x-app-layout>
