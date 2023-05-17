<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar recordatorio') }}
        </h2>
    </x-slot>
    <div class="card">
        <div class="card-body">
            @if ($errors->any())
                <div class="bg-red-500 w-96 p-4 mt-2 mx-auto text-white rounded-xl text-center">
                    <p>{{ $errors->first() }}</p>
                </div>
            @endif
            <form action="{{ url('recordatorios/' . $recordatorio->id) }}" method="post" class="w-full mt-8 text-center">
                {!! csrf_field() !!}
                @method('PATCH')
                <div class="flex w-full px-4 py-3 gap-2">
                    <input type="text" name="titulo" id="titulo" value="{{ $recordatorio->titulo }}"
                        placeholder="Titulo"
                        class="form-control w-4/5 text-center rounded-md text-xl bg-gray-200 italic py-3 font-medium text-black outline-none focus:border-blue-500 focus:shadow-md @if ($errors->has('titulo')) border-2 border-red-600 @endif">
                    <select name="importancia" id="importancia"
                        class="rounded-lg w-1/5 bg-gray-200 text-center text-xl italic font-medium @if ($errors->has('tema')) border-2 border-red-600 @endif">
                        <option value="0" class="bg-red-600 text-white"
                            {{ $recordatorio->importancia == '0' ? 'selected' : '' }}>Importancia</option>
                        <option value="Muy importante"
                            {{ $recordatorio->importancia == 'Muy importante' ? 'selected' : '' }}>Muy importante
                        </option>
                        <option value="Importante" {{ $recordatorio->importancia == 'Importante' ? 'selected' : '' }}>
                            Importante</option>
                        <option value="No importante"
                            {{ $recordatorio->importancia == 'No importante' ? 'selected' : '' }}>No importante</option>
                    </select>


                </div>
                <div class="w-full px-4">
                    <textarea type="text" name="contenido" id="contenido" placeholder="Contenido"
                        class="form-control h-52 w-full text-center rounded-md text-xl bg-gray-200 italic py-3 font-medium text-black outline-none focus:border-blue-500 focus:shadow-md @if ($errors->has('contenido')) border-2 border-red-600 @endif">{{ $recordatorio->contenido }}</textarea>
                </div>
                <div class="w-full text-center py-3">
                    <label for="fecha" class="text-xl">Fecha de evento:</label><br>
                    <input type="datetime-local" name="fecha" id="fecha" value="{{ $recordatorio->fecha }}"
                        class="form-control w-96 text-center rounded-md text-xl bg-gray-200 italic py-3 font-medium text-black outline-none focus:border-blue-500 focus:shadow-md @if ($errors->has('fecha')) border-2 border-red-600 @endif">
                </div>
                <input type="submit" value="Actualizar"
                    class="hover:cursor-pointer w-24 text-center uppercase my-4 mx-16 shadow bg-indigo-800 hover:bg-indigo-700 focus:shadow-outline focus:outline-none text-white text-xs py-3 rounded"></br>
            </form>
        </div>
    </div>
</x-app-layout>
