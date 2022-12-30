<div class="modal fade" id="tambah-edit-modal-kasir" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-judul-kasir"></h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="form-tambah-edit-kasir" name="form-tambah-edit-kasir" class="form-horizontal">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-sm-12">

                            <input type="hidden" name="id" id="id-kasir">
{{-- 
                            <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">No Transaksi</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="no_transaksi" name="no_transaksi" value="" required>
                                </div>
                            </div> --}}

                            <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">Pasien</label>
                                <div class="col-sm-12">
                                    <select name="pasien" id="pasien" class="form-control required">
                                        <option value="">Pilih Pasien</option>
                                        @foreach ($pasien as $item)
                                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                        @endforeach
                                        {{-- <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option> --}}
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">Dokter</label>
                                <div class="col-sm-12">
                                    <select name="dokter" id="dokter" class="form-control required">
                                        <option value="">Pilih Dokter</option>
                                        @foreach ($dokter as $item)
                                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                        @endforeach
                                        {{-- <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option> --}}
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">Tindakan</label>
                                <div class="col-sm-12">
                                    <select name="tindakan" id="tindakan" class="form-control required">
                                        <option value="">Pilih Tindakan</option>
                                        @foreach ($tindakan as $item)
                                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                        @endforeach
                                        {{-- <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option> --}}
                                    </select>
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">Obat</label>
                                <div class="col-sm-12">
                                    <select name="obat" id="obat" class="form-control required">
                                        <option value="">Pilih Obat</option>
                                        @foreach ($obat as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                        {{-- <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option> --}}
                                    </select>
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">Jumlah Obat </label>
                                <div class="col-sm-12">
                                    <input type="number" class="form-control"  id="jumlah_obat" name="jumlah_obat" value="" required>
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
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>