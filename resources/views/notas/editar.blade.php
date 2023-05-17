
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edita nota') }}
            </h2>
        </x-slot>
        <div class="card">
            <div class="card-body">
    
                <form action="{{ url('notas/' . $notas->id) }}" method="post" class="w-full mt-8 text-center">
                    {!! csrf_field() !!}
                    @method('PATCH')
                    <input type="hidden" name="id" id="id" value="{{ $notas->id }}" id="id" />
                    <label class="block w-full text-xl text-gray-800 mt-6 mb-2">Titulo</label>
                  <input type="text" name="titulo" value="{{ $notas->titulo }}" id="titulo" class="form-control w-96 text-center rounded-md border bg-white py-3 text-base font-medium text-gray-500 outline-none focus:border-blue-500 focus:shadow-md"></br>
                  <label class="block w-full text-xl text-gray-800 mt-6 mb-2">Contenido</label>
                  <input type="text" name="nota" value="{{ $notas->nota }}" id="nota" class="form-control w-96 text-center rounded-md border bg-white py-3 text-base font-medium text-gray-500 outline-none focus:border-blue-500 focus:shadow-md"></br>
                  <label class="block w-full text-xl text-gray-800 mt-6 mb-2">palabras clave</label>
                  <input type="text" name="p_clave" value="{{ $notas->p_clave }}" id="p_clave" class="form-control w-96 text-center rounded-md border bg-white py-3 text-base font-medium text-gray-500 outline-none focus:border-blue-500 focus:shadow-md"></br>
                  <label class="block w-full text-xl text-gray-800 mt-6 mb-2">resumen</label>
                  <input type="text" name="resumen" value="{{ $notas->resumen }}" id="resumen" class="form-control w-96 text-center rounded-md border bg-white py-3 text-base font-medium text-gray-500 outline-none focus:border-blue-500 focus:shadow-md"></br>
                  <input type="hidden" name="id_usuario" id="id_usuario" class="form-control" value="{{ Auth::user()->id }}">
                    <input type="submit" value="Update" class="hover:cursor-pointer w-24 text-center uppercase my-4 mx-16 shadow bg-indigo-800 hover:bg-indigo-700 focus:shadow-outline focus:outline-none text-white text-xs py-3 rounded"></br>
                </form>
    
    
    
            </div>
        </div>
        </x-app-layout>
    
