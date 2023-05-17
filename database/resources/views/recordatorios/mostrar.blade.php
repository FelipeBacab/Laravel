<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ver recordatorio') }}
        </h2>
    </x-slot>
    <div class="card">
        <div class="card-body">
            <div class="w-full mt-8 text-center">
                <div class="flex w-full px-4 py-3 gap-2">
                    <p
                        class="form-control break-words px-1 w-4/5 text-center rounded-md border bg-blue-200 py-3 text-xl font-medium text-black outline-none focus:border-blue-500 focus:shadow-md">
                        {{ $recordatorio->titulo }}</p>
                        <p
                        class="form-control break-words px-1 w-1/5 text-center rounded-md border bg-blue-200 py-3 text-xl font-medium text-black outline-none focus:border-blue-500 focus:shadow-md">
                        {{ $recordatorio->importancia }}</p>
                </div>
                <div class="w-full px-4">
                    <p
                        class="form-control break-words px-1 h-52  text-center rounded-md border bg-blue-200 py-3 text-xl font-medium text-black outline-none focus:border-blue-500 focus:shadow-md">
                        {{ $recordatorio->contenido }}</p>
                </div>
                <div class="w-full py-3 content-center">
                    <label for="fecha" class="text-xl">Fecha de evento:</label><br>
                    <h1
                        class="form-control mx-auto w-96 text-center rounded-md text-xl bg-blue-200 py-3 font-medium text-black outline-none focus:border-blue-500 focus:shadow-md">
                        {{ $recordatorio->fecha }}</h1>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
