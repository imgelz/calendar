<!-- Modal -->
<div class="modal fade" id="edit-kategori" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background:#abdb5a">
                <center><h2 style="color:#477008" class="modal-title">Edit Kategori</h2></center>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body" style="background:honeydew">
                <form id="form-edit-kategori">
                    <input type="hidden" name="id" id="data-id" value="">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nama Kategori :</label>
                            <input id="nama_kategori" type="text" class="form-control" name="nama_kategori">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Foto</label>
                            <div class="custom-file">
                                <img id="foto" style="width:80px; height:80px;" alt="image preview"/>
                                <br/>
                                <input type="file" id="data-foto" name="foto"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Keterangan :</label>
                            <textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="5" placeholder="Max 50 Word"></textarea>
                        </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary btn-block">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>

<script>
    function previewImage() {
    document.getElementById("foto").style.display = "block";
    var oFReader = new FileReader();
     oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

    oFReader.onload = function(oFREvent) {
      document.getElementById("foto").src = oFREvent.target.result;
    };
  };
</script>
