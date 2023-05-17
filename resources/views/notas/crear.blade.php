<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notas') }}
        </h2>
    </x-slot>
    <div class="card">
        <div class="card-body">

            <form action="{{ url('notas') }}" method="post" class="w-full mt-8 text-center">
                {!! csrf_field() !!}
                <label class="block w-full text-xl text-gray-800 mt-6 mb-2">Titulo</label>
                <input type="text" name="titulo" id="titulo" value="{{ old('titulo') }}"
                    class="form-control w-96 text-center rounded-md border bg-white py-3 text-base font-medium text-gray-500 outline-none focus:border-blue-500 focus:shadow-md"></br>
                <label class="block w-full text-xl text-gray-800 mt-6 mb-2">Contenido</label>
                <input type="text" name="nota" id="nota" value="{{ old('nota') }}"
                    class="form-control w-96 text-center rounded-md border bg-white py-3 text-base font-medium text-gray-500 outline-none focus:border-blue-500 focus:shadow-md"></br>
                <label class="block w-full text-xl text-gray-800 mt-6 mb-2">palabras clave</label>
                <input type="text" name="p_clave" id="p_clave" value="{{ old('p_clave') }}"
                    class="form-control w-96 text-center rounded-md border bg-white py-3 text-base font-medium text-gray-500 outline-none focus:border-blue-500 focus:shadow-md"></br>
                <label class="block w-full text-xl text-gray-800 mt-6 mb-2">resumen</label>
                <input type="text" name="resumen" id="resumen" value="{{ old('resumen') }}"
                    class="form-control w-96 text-center rounded-md border bg-white py-3 text-base font-medium text-gray-500 outline-none focus:border-blue-500 focus:shadow-md"></br>
                <input type="hidden" name="id_usuario" id="id_usuario" class="form-control"
                    value="{{ Auth::user()->id }}">
                <label class="block w-full text-xl text-gray-800 mt-6 mb-2">id tema</label>
                <input type="number" name="id_tema" id="id_tema" value="{{ old('id_tema') }}"
                    class="form-control w-96 text-center rounded-md border bg-white py-3 text-base font-medium text-gray-500 outline-none focus:border-blue-500 focus:shadow-md"></br>
                @error('id_tema')
                    <small>{{ $message }}</small>
                    <br>
                @enderror
                <input type="submit" value="Save"
                    class="hover:cursor-pointer w-24 text-center uppercase my-4 mx-16 shadow bg-indigo-800 hover:bg-indigo-700 focus:shadow-outline focus:outline-none text-white text-xs py-3 rounded">
            </form>

        </div>
    </div>

    </x-app-layouts>
