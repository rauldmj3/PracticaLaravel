<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Insertar') }}
        </h2>
    </x-slot>
    <form method="POST" action="{{ route('insertar') }}">
        @vite('resources/css/app.css')
        @csrf
        <div>
            <x-input-label for="descripcio" :value="__('Article')" />
            <x-text-input id="descripcio" class="block mt-1 w-full" type="text" name="descripcio"  required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('descripcio')" class="mt-2" />
        </div>
        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ms-3">
                {{ __('Insertar') }}
            </x-primary-button>
        </div>
    </form>

</x-app-layout> 