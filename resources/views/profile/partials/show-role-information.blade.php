<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Rol Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Este es el rol que se le asigno.') }}
        </p>
    </header>

    <p class="text-xl">{{Auth::user()->rol}}</p>
</section>
