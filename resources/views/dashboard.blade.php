<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @vite('resources/css/app.css')
    <div>

        <ul role="list" class="divide-y divide-gray-100">
            @forelse($article as $articleItem)
            <li class="flex justify-between gap-x-6 py-5" style="margin: 5%;">
                <div class="flex min-w-0 gap-x-4" style="width:100%;">
                    <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg" style="width:100%;">
                        <p class="text-sm font-semibold leading-6 text-gray-900 dark:text-white">{{ $articleItem->descripcio }} </p>
                        <p class="text-sm font-semibold leading-6 text-gray-900 dark:text-white">ID: {{ $articleItem->id }} </p>
                        <br>
                        <a href="{{ route("modificar")}}" style="color: white">Modificar</a>
                        <br>
                        <a href="{{ route("eliminar")}}" style="color: white">Eliminar</a>
                    </div>
                </div>
            </li>
            @empty
            <li>No hay nignun articulo para mostrar</li> 
            @endforelse
        </ul>

        {{ $article->links() }}
    </div>
</x-app-layout>
