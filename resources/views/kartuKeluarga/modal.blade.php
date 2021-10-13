<!-- Modal -->
<div class="modal fade" id="modakKartuKeluarga" tabindex="-1" aria-labelledby="modalKKLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalKKLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="formKartuKeluarga" method="POST">
        @csrf
        <div class="modal-body">
            <input autocomplete="off" class="form-control mb-3 @error('nokk')is-invalid @enderror" type="text" placeholder="Nomor Kartu Keluarga" id="nokk" name="nokk" value="{{ old('nokk') }}">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Input</button>
        </div>
        </form>
      </div>
    </div>
  </div>