<div class="modal fade" id="tambah-edit-modal-pasien" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-judul-pasien"></h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="form-tambah-edit-pasien" name="form-tambah-edit-pasien" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-12">

                            <input type="hidden" name="id" id="id-pasien">

                            {{-- <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">No Pasien</label>
                                <div class="col-sm-12">
                                    <input type="number" class="form-control" id="no_pasien" name="no_pasien" value="" required>
                                </div>
                            </div> --}}

                            <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">NIK</label>
                                <div class="col-sm-12">
                                    <input type="number" class="form-control" id="nik" name="nik" value="" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">Nama Pasien </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control"  id="nama_pasien" name="nama" value="" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">Alamat </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control"  id="alamat_pasien" name="alamat" value="" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">Tanggal Lahir </label>
                                <div class="col-sm-12">
                                    <input type="date" class="form-control"  id="tanggal_lahir" name="tanggal_lahir" value="" required>
                                </div>
                            </div>

                            
                            <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">No Handphone</label>
                                <div class="col-sm-12">
                                    <input type="number" class="form-control"  id="no_handphone" name="no_handphone" value="" required>
                                </div>
                            </div>

                            



                        </div>

                        <div class="modal-footer col-sm-offset-2 col-sm-12">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="tombol-simpan"
                                value="create">Simpan
                            </button>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>