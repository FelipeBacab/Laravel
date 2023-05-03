<x-app-layout>
    <div class="card">
        <div class="card-header">recordatorios Page</div>
        <div class="card-body">
         
       
              <div class="card-body">
              <h5 class="card-title">titulo : {{ $recordatorios->titulo }}</h5>
              <p class="card-text">contenido : {{ $recordatorios->contenido }}</p>
              <p class="card-text">importancia : {{ $recordatorios->importancia }}</p>
        </div>
        </div>
      </div>
</x-app-layout>

