<x-app-layout>
    <div class="card">
        <div class="card-header">Contactus Page</div>
        <div class="card-body">

            <form action="{{ url('notas/' . $notas->id) }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{ $notas->id }}" id="id" />
                <label>titulo</label></br>
                <input type="text" name="titulo" id="titulo" class="form-control"
                    value="{{ $notas->titulo }}"></br>
                <label>Contenido</label></br>
                <input type="text" name="nota" id="nota" class="form-control"
                    value="{{ $notas->nota }}"></br>
                <label>palabras clave</label></br>
                <input type="text" name="p_clave" id="p_clave" class="form-control"
                    value="{{ $notas->p_clave }}"></br>
                <label>resumen</label></br>
                <input type="text" name="resumen" id="resumen" class="form-control"
                    value="{{ $notas->resumen }}"></br>
                <input type="hidden" name="id_usuario" id="id_usuario" class="form-control" value="{{ Auth::user()->id }}"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>



        </div>
    </div>
    </x-app-layouts>
