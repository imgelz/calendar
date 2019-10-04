<!-- Modal -->
<div class="modal fade" id="create-kategori" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background:#abdb5a">
                <center><h2 style="color:#477008" class="modal-title">Tambah Kategori</h2></center>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body" style="background:honeydew">
                <form id="form-tambah-kategori" >
                    <input type="hidden" name="id" id="id" value="">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama Kategori :</label>
                        <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Nama Kategori">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Foto</label>
                        <div class="custom-file">
                            <img id="image-preview" style="width:80px; height:80px;" alt="image preview"/>
                            <br/>
                            <input type="file" id="image-source" id="foto" name="foto" onchange="previewImage();"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Keterangan :</label>
                        <textarea name="keterangan" id="keterangan" class="form-control" cols="10" rows="2" placeholder="Max 50 Word"></textarea>
                    </div>

                </div>
            </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-block"><b>Tambahkan</b></button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function previewImage() {
    document.getElementById("image-preview").style.display = "block";
    var oFReader = new FileReader();
     oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

    oFReader.onload = function(oFREvent) {
      document.getElementById("image-preview").src = oFREvent.target.result;
    };
  };
</script>
