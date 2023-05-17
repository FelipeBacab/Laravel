<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ver nota') }}
        </h2>
    </x-slot>
    <div class="card">
        <div class="card-body w-full mt-8 text-center">
            <div class="grid grid-cols-5 w-full gap-2 px-4 pb-10">
                <h1 class="col-start-2 col-span-1 text-end mb-5"><strong>Asignatura: </strong>{{ $asignatura->asignatura }}
                </h1>
                <h1 class="col-start-4 col-span-1 text-start mb-5"><strong>Tema: </strong>{{ $tema->tema }}
                </h1>
                <div class="col-span-5 w-full">
                    <p
                        class="form-control break-words px-1 text-center rounded-md border bg-orange-200 py-3 text-xl font-medium text-black outline-none focus:border-blue-500 focus:shadow-md">
                        {{ $nota->titulo }}</p>
                </div>
                <div class="col-span-1 w-full">
                    <p
                        class="form-control break-words px-1 h-52 text-center rounded-md border bg-orange-200 py-3 text-xl font-medium text-black outline-none focus:border-blue-500 focus:shadow-md">
                        {{ $nota->p_clave }}</p>
                </div>
                <div class="col-span-4 w-full">
                    <p
                        class="form-control break-words px-1 h-52  text-center rounded-md border bg-orange-200 py-3 text-xl font-medium text-black outline-none focus:border-blue-500 focus:shadow-md">
                        {{ $nota->nota }}</p>
                </div>
                <div class="col-span-5 w-full">
                    <p
                        class="form-control break-words px-1 h-52 text-center rounded-md border bg-orange-200 py-3 text-xl font-medium text-black outline-none focus:border-blue-500 focus:shadow-md">
                        {{ $nota->resumen }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
