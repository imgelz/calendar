<!-- Modal -->
<div class="modal fade" id="edit-data-calendar" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Schedule</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form id="form-edit-calendar">
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
                                <textarea name="description" id="description" class="form-control" cols="30" rows="5" placeholder="Max 50 Word"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Kategori :</label>
                                <select class="form-control e-kategori" name="id_kategori" id="id_kategori" placeholder="Nama Kategori"></select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Orang Terkait :</label>
                                <select class="form-control select2" name="tag_user[]" id="tag_user" multiple></select>
                            </div>

                            <div class="form-group" style="float:left">
                                <label for="exampleInputPassword1">Waktu Awal :</label>
                                <input id="start_date" type="datetime" class="form-control" name="start_date">
                            </div>
                            <div class="form-group" style="float:right">
                                <label for="exampleInputPassword1">Waktu Akhir :</label>
                                <input id="end_date" type="datetime" class="form-control" name="end_date">
                            </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-block" style="background:#90c73e; color:#fff">Save</button>
            </div>
                </form>
        </div>
    </div>
</div>


<!-- Modal Hapus -->
<div class="modal modal fade in" id="hapus-data-calendar" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Schedule</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form id="form-hapus-calendar">
                    <input type="hidden" name="id" id="data-id-hapus" value="">
                    <div class="form-group">
                    <label style="color:black" >Do You Want To Delete This Schedule?</label>
                    </div>
            </div>
            <div class="modal-footer">
                <button style="background:#be0029" type="button" class="btn " data-dismiss="modal">No, Thanks!</button>
                <button style="background:#90c73e" type="submit" class="btn">Yes</button>
            </div>
                </form>
        </div>
    </div>
</div>
