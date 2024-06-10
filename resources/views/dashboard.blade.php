<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @switch(Auth::user()->rol)
        @case('Administrador')
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            {{ __('Bienvenido adiministrador :nombre', ['nombre' => Auth::user()->name]) }}
                        </div>
                    </div>
                </div>
            </div>
        @break

        @case('Secretario/a')
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            {{ __('Bienvenido secretario(a) :nombre', ['nombre' => Auth::user()->name]) }}
                        </div>
                    </div>
                </div>
            </div>
        @break

        @case('Doctor')
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            {{ __('Bienvenido doctor(a) :nombre', ['nombre' => Auth::user()->name]) }}
                        </div>
                    </div>
                </div>
            </div>
        @break
    @endswitch
</x-app-layout>
