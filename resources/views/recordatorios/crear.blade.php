<x-app-layout>
    <div class="card">
        <div class="card-header">recordatorios Page</div>
        <div class="card-body">
            
            <form action="{{ url('recordatorios') }}" method="post">
              {!! csrf_field() !!}
              <label>titulo</label></br>
              <input type="text" name="titulo" id="titulo" class="form-control"></br>
              <label>Contenido</label></br>
              <input type="text" name="contenido" id="contenido" class="form-control"></br>
              <label>importancia</label></br>
              <input type="text" name="importancia" id="importancia" class="form-control"></br>
              <input type="hidden" name="id_usuario" id="id_usuario" class="form-control" value="{{ Auth::user()->id }}"></br>
              <input type="submit" value="Save" class="btn btn-success"></br>
          </form>
         
        </div>
      </div>
</x-app-layouts>