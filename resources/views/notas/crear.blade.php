<x-app-layout>
    <div class="card">
        <div class="card-header">notas Page</div>
        <div class="card-body">
            
            <form action="{{ url('notas') }}" method="post">
              {!! csrf_field() !!}
              <label>titulo</label></br>
              <input type="text" name="titulo" id="titulo" class="form-control"></br>
              <label>Contenido</label></br>
              <input type="text" name="nota" id="nota" class="form-control"></br>
              <label>palabras clave</label></br>
              <input type="text" name="p_clave" id="p_clave" class="form-control"></br>
              <label>resumen</label></br>
              <input type="text" name="resumen" id="resumen" class="form-control"></br>
              <input type="hidden" name="id_usuario" id="id_usuario" class="form-control" value="{{ Auth::user()->id }}"></br>
              <label>id tema</label></br>
              <input type="text" name="id_tema" id="id_tema" class="form-control"></br>
              <input type="submit" value="Save" class="btn btn-success"></br>
          </form>
         
        </div>
      </div>
</x-app-layouts>