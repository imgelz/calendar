<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Jadwal Kegiatan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <form action="{{route('event.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama Kegiatan</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Keterangan</label>
                        <textarea name="description" id="description" class="form-control" cols="30" rows="5" placeholder="Max 30 Word"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Warna Piliham</label>
                        <input type="color" class="form-control" id="color" name="color" placeholder="Color">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Waktu Mulai</label>
                        <input type="datetime-local" class="form-control" id="start_date" name="start_date" placeholder="Start Date">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Waktu Selesai</label>
                        <input type="datetime-local" class="form-control" id="end_date" name="end_date" placeholder="End Date">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
