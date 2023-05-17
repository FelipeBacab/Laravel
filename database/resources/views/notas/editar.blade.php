<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar nota') }}
        </h2>
    </x-slot>
    <div class="card">
        <div class="card-body">
            @if ($errors->any())
                <div class="bg-red-500 w-96 p-4 mt-2 mx-auto text-white rounded-xl text-center">
                    <p>{{ $errors->first() }}</p>
                </div>
            @endif
            <form action="{{ url('notas/' . $nota->id) }}" method="post" class="w-full mt-8 text-center">
                {!! csrf_field() !!}
                @method('PATCH')
                <div class="grid grid-cols-5 w-full gap-2 px-4">
                    <h1 class="col-start-2 col-span-1 text-end mb-5"><strong>Asignatura:
                        </strong>{{ $asignatura->asignatura }}
                    </h1>
                    <h1 class="col-start-4 col-span-1 text-start mb-5"><strong>Tema: </strong>{{ $tema->tema }}
                    </h1>
                    <input type="text" name="titulo" id="titulo" value="{{ $nota->titulo }}" placeholder="Titulo"
                        autofocus
                        class="form-control col-span-5 w-full text-center rounded-md text-xl bg-gray-200 italic text-black py-3 font-medium outline-none focus:border-blue-500 focus:shadow-md @if ($errors->has('titulo')) border-2 border-red-600 @endif">
                    <textarea type="text" name="p_clave" id="p_clave" placeholder="Palabras clave"
                        class="form-control col-span-1 h-52 w-full text-center rounded-md text-xl bg-gray-200 italic text-black py-3 font-medium outline-none focus:border-blue-500 focus:shadow-md @if ($errors->has('p_clave')) border-2 border-red-600 @endif">{{ $nota->p_clave }}</textarea>
                    <textarea type="text" name="nota" id="nota" placeholder="Nota"
                        class="form-control col-span-4 h-52 w-full text-center rounded-md text-xl bg-gray-200 italic text-black py-3 font-medium outline-none focus:border-blue-500 focus:shadow-md @if ($errors->has('nota')) border-2 border-red-600 @endif">{{ $nota->nota }}</textarea>
                    <textarea type="text" name="resumen" id="resumen" placeholder="Resumen"
                        class="form-control col-span-5 h-52 w-full text-center rounded-md text-xl bg-gray-200 italic text-black py-3 font-medium outline-none focus:border-blue-500 focus:shadow-md @if ($errors->has('resumen')) border-2 border-red-600 @endif">{{ $nota->resumen }}</textarea>
                </div>
                <input type="submit" value="Update"
                    class="hover:cursor-pointer w-24 text-center uppercase my-4 mx-16 shadow bg-indigo-800 hover:bg-indigo-700 focus:shadow-outline focus:outline-none text-white text-xs py-3 rounded"></br>
            </form>
        </div>
    </div>
</x-app-layout>
