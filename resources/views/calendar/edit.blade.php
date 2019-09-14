<!-- Modal -->
<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Kegiatan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('event.update', 'test') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" id="data-id" value="">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Judul Meeting</label>
                                <input id="data-title" type="text" class="form-control" name="title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Pilihan Warna</label>
                                <input id="data-color" type="color" class="form-control" name="color">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Keterangan</label>
                                <textarea name="description" id="data-description" class="form-control" cols="30" rows="5" placeholder="Max 30 Word"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Waktu Awal</label>
                                <input id="data-start_date" type="datetime-local" class="form-control" name="start_date">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Waktu Akhir</label>
                                <input id="data-end_date" type="datetime-local" class="form-control" name="end_date">
                            </div>
            </div>
            <div class="modal-footer">
                {{ method_field('PUT') }}
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
