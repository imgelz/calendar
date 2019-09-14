<div class="modal modal-danger fade in" id="modal-hapus" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Meeting</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('event.destroy', 'test') }}" method="POST">
                    <input type="hidden" name="id" id="data-id-hapus" value="">
                    @csrf
                    @method('DELETE')
                <div class="form-group">
                  <label for="">Apakah Anda Ingin Menghapus Jadwal Kegiatan Ini ?</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Ya</button>
            </div>
            </form>
        </div>
    </div>
</div>
