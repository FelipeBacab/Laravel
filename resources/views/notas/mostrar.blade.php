<x-app-layout>
    <div class="card">
        <div class="card-header">notas Page</div>
        <div class="card-body">
         
       
              <div class="card-body">
              <h5 class="card-title">titulo : {{ $notas->titulo }}</h5>
              <p class="card-text">contenido : {{ $notas->nota }}</p>
              <p class="card-text">resumen : {{ $notas->resumen }}</p>
        </div>
        </div>
      </div>
</x-app-layout>

