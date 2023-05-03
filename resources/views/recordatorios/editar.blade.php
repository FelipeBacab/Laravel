<x-app-layout>
    <div class="card">
        <div class="card-header">Contactus Page</div>
        <div class="card-body">

            <form action="{{ url('recordatorios/' . $recordatorios->id) }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{ $recordatorios->id }}" id="id" />
                <label>titulo</label></br>
                <input type="text" name="titulo" id="titulo" class="form-control"
                    value="{{ $recordatorios->titulo }}"></br>
                <label>Contenido</label></br>
                <input type="text" name="contenido" id="contenido" class="form-control"
                    value="{{ $recordatorios->contenido }}"></br>
                <label>Importancia</label></br>
                <input type="text" name="importancia" id="importancia" class="form-control"
                    value="{{ $recordatorios->importancia }}"></br>
                <input type="hidden" name="id_usuario" id="id_usuario" class="form-control"
                    value="{{ Auth::user()->id }}"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>



        </div>
    </div>
    </x-app-layouts>
