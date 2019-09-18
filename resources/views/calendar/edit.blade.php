<!-- Modal -->
<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Edit Kegiatan</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form id="form-edit">
                            <input type="hidden" name="id" id="data-id" value="">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Judul Meeting :</label>
                                <input id="title" type="text" class="form-control" name="title">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Pilihan Warna :</label>
                                <input id="color" type="color" class="form-control" name="color">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Keterangan :</label>
                                <textarea name="description" id="description" class="form-control" cols="30" rows="5" placeholder="Max 30 Word"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Waktu Awal :<small style="color:gold">*Harap Salin Data Waktu Akhir Terlebih Dahulu</small></label>
                                <input id="start_date" type="datetime" class="form-control" name="start_date">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Waktu Akhir :</label>
                                <input id="end_date" type="datetime" class="form-control" name="end_date">
                            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
