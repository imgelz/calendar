<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content" style="border-radius:9px">
            <div class="modal-header" style="background:#abdb5a">
                <center><h3 style="color:#477008" class="modal-title">Tambah Jadwal Kegiatan</h3></center>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
                <div class="modal-body" style="background:honeydew">
                    <form id="form-tambah">
                        <input type="hidden" name="id" id="id" value="">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nama Kegiatan :</label>
                                <input type="text" class="form-control" id="title" name="title" autocomplete="off" placeholder="Title">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Warna Pilihan :</label>
                                <input type="color" class="form-control" id="color" name="color" placeholder="Color">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Keterangan :</label>
                                <textarea name="description" id="description" class="form-control" cols="10" rows="2" placeholder="Max 50 Word"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Kategori :</label>
                                <select class="form-control" name="id_kategori" id="id_kategori">
                                    @php
                                        $kategori = \App\Kategori::all();
                                    @endphp
                                    <option value="">Pilih Kategori</option>
                                    @foreach ($kategori as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Orang Terkait :</label>
                                <select class="form-control select2" id="tag_user" name="tag_user[]" multiple="multiple">
                                    @php
                                        $user = \App\User::where('id_group', Auth::user()->id_group)->get();
                                    @endphp
                                    @foreach ($user as $data)
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Waktu Mulai :</label>
                                <input type="datetime-local" class="form-control" id="start_date" name="start_date" width="auto">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Waktu Selesai :</label>
                                <input type="datetime-local" class="form-control" id="end_date" name="end_date" width="auto">
                            </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-block">Tambahkan</button>
                </div>
            </form>
        </div>
    </div>
</div>
