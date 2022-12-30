<div class="modal fade" id="tambah-edit-modal-dokter" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-judul-dokter"></h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="form-tambah-edit-dokter" name="form-tambah-edit-dokter" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-12">

                            <input type="hidden" name="id" id="id-dokter">

                            {{-- <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">No Dokter</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="no_dokter" name="no_dokter" value="" required>
                                </div>
                            </div> --}}

                            <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">Nama</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="nama_dokter" name="nama" value="" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">Alamat </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control"  id="alamat_dokter" name="alamat" value="" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">No Handphone </label>
                                <div class="col-sm-12">
                                    <input type="number" class="form-control"  id="no_handphone" name="no_handphone" value="" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">Gender </label>
                                <div class="col-sm-12">
                                       <select name="gender" id="gender" class="form-control required">
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">Status </label>
                                <div class="col-sm-12">
                                       <select name="status" id="status" class="form-control required">
                                        <option value="">Pilih Status Dokter</option>
                                        <option value="umum">umum</option>
                                        <option value="spesialis">spesialis</option>
                                    </select>
                                </div>
                            </div>
                            



                        </div>

                        <div class="modal-footer  col-sm-offset-2 col-sm-12">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary " id="tombol-simpan"
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