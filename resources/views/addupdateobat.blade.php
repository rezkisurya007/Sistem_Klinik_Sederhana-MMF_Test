<div class="modal fade" id="tambah-edit-modal" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-judul"></h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="form-tambah-edit" name="form-tambah-edit" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-12">

                            <input type="hidden" name="id" id="id">

                            {{-- <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">kode </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="kode_obat" name="kode" value="" required>
                                </div>
                            </div> --}}

                            <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">Obat </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="nama_obat" name="name" value="" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">Stok </label>
                                <div class="col-sm-12">
                                    <input type="number" class="form-control" id="stok_obat" name="stok" value="" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">Harga </label>
                                <div class="col-sm-12">
                                    <input type="number" class="form-control" placeholder="Rp. " id="harga_obat" name="harga" value="" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">Satuan </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="satuan_obat" name="satuan" value="" required>
                                </div>
                            </div>



                        </div>

                        <div class="modal-footer col-sm-offset-2 col-sm-12">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary " id="tombol-simpan"
                                value="create">Simpan
                            </button>
                        </div>
                    </div>

                </form>
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"> Tambah </button>
              </div> --}}
            {{-- <div class="modal-footer">
            </div> --}}
        </div>
    </div>
</div>