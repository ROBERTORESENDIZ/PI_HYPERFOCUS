<!-- Modal -->
<div class="modal fade" id="Act{{ $id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content text-center">
      <div class="modal-header d-flex ">
        <h1 class="modal-title fs-5 text-danger flex-fill " id="staticBackdropLabel">Eliminar Cliente</h1>
        <button type="button flex-fill" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/mi-semana/eliminar/{{ $id }}/{{ $nombre }}" method="POST">
            @csrf
        <p>¿Estas seguro que quieres eliminar la actividad: <strong>{{ $nombre }}</strong>?</p>
        
        <small><strong>Esta opción no podra revertirse</strong></small>
       
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="sumit" class="btn btn-success">Confirmar</button>
        </form>
      </div>
    </div>
  </div>
</div>