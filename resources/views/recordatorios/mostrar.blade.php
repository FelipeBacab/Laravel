<x-app-layout>
      <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Ver nota') }}
            </h2>
        </x-slot>
    <div class="card">
        <div class="card-body w-full mt-8 text-center">
         
       
              <div class="card-body">

            <label class="block w-full text-xl text-gray-800 mt-6 mb-2">Titulo:</label>
              <input value="{{ $recordatorios->titulo }}" class="form-control text-center w-96 rounded-md border bg-white py-3 text-base font-medium text-gray-500 outline-none focus:border-blue-500 focus:shadow-md" disabled></br>
              <label class="block w-full text-xl text-gray-800 mt-6 mb-2">Contenido:</label>
              <input value="{{ $recordatorios->contenido }}" class="form-control text-center w-96 rounded-md border bg-white py-3 text-base font-medium text-gray-500 outline-none focus:border-blue-500 focus:shadow-md" disabled></br>
              <label class="block w-full text-xl text-gray-800 mt-6 mb-2">Importancia:</label>
              <input value="{{ $recordatorios->importancia }}" class="form-control text-center w-96 rounded-md border bg-white py-3 text-base font-medium text-gray-500 outline-none focus:border-blue-500 focus:shadow-md" disabled></br>
        </div>
        </div>
      </div>
</x-app-layout>

