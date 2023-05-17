<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear notas') }}
        </h2>
    </x-slot>
    <div class="card">
        <div class="card-body">
            @if ($errors->any())
                <div class="bg-red-500 w-96 p-4 mt-2 mb-4 mx-auto text-white rounded-xl text-center">
                    <p>{{ $errors->first() }}</p>
                </div>
            @endif
            <form action="{{ url('notas') }}" method="post" class="w-full mt-8 text-center">
                {!! csrf_field() !!}
                <div class="grid grid-cols-5 w-full gap-2 px-4">
                    <div class="col-start-2 col-span-3">
                        <select name="asignatura" id="asignatura-select"
                            class="rounded-lg @if ($errors->has('asignatura')) border-2 border-red-600 @endif">
                            <option value="0">Asignatura</option>
                            @foreach ($asignaturas as $asignatura)
                                <option value="{{ $asignatura->id }}" @if (old('asignatura') == $asignatura->id) selected @endif>
                                    {{ $asignatura->asignatura }}</option>
                            @endforeach
                        </select>

                        <select name="tema" id="tema"
                            class="rounded-lg @if ($errors->has('tema')) border-2 border-red-600 @endif">
                            <option value="0">Tema</option>
                            @foreach ($temas as $tema)
                                <option value="{{ $tema->id }}" data-asignatura-id="{{ $tema->id_asignatura }}"
                                    @if (old('tema') == $tema->id) selected @endif
                                    class="tema-option tema-{{ $tema->id_asignatura }}"> {{ $tema->tema }}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="text" name="titulo" id="titulo" value="{{ old('titulo') }}" placeholder="Titulo"
                        class="form-control col-span-5 w-full text-center rounded-md text-xl bg-white py-3 font-medium text-black outline-none focus:border-blue-500 focus:shadow-md @if ($errors->has('titulo')) border-2 border-red-600 @endif">
                    <textarea type="text" name="p_clave" id="p_clave" placeholder="Palabras clave"
                        class="form-control col-span-1 h-52 w-full text-center rounded-md text-xl bg-white py-3 font-medium text-black outline-none focus:border-blue-500 focus:shadow-md @if ($errors->has('p_clave')) border-2 border-red-600 @endif">{{ old('p_clave') }}</textarea>
                    <textarea type="text" name="nota" id="nota" placeholder="Nota"
                        class="form-control col-span-4 h-52 w-full text-center rounded-md text-xl bg-white py-3 font-medium text-black outline-none focus:border-blue-500 focus:shadow-md @if ($errors->has('nota')) border-2 border-red-600 @endif">{{ old('nota') }}</textarea>
                    <textarea type="text" name="resumen" id="resumen" placeholder="Resumen"
                        class="form-control col-span-5 h-52 w-full text-center rounded-md text-xl bg-white py-3 font-medium text-black outline-none focus:border-blue-500 focus:shadow-md @if ($errors->has('resumen')) border-2 border-red-600 @endif">{{ old('resumen') }}</textarea>
                </div>


                <input type="submit" value="Guardar"
                    class="hover:cursor-pointer w-24 text-center uppercase my-4 mx-16 shadow bg-indigo-800 hover:bg-indigo-700 focus:shadow-outline focus:outline-none text-white text-xs py-3 rounded">
            </form>

        </div>
    </div>

</x-app-layout>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        actualizarTemas();

        $('#asignatura-select').on('change', function() {
            actualizarTemas();
        });
    });

    function actualizarTemas() {
        // Obtener el id de la asignatura seleccionada
        var asignatura_id = $('#asignatura-select').val();

        // Ocultar todas las opciones de tema
        $('.tema-option').hide();

        // Mostrar solo las opciones de tema que corresponden a la asignatura seleccionada
        $('.tema-' + asignatura_id).show();
    }
</script>
