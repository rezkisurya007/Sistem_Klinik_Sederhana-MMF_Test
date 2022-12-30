<div class="modal fade" id="tambah-edit-modal-admin" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-judul-admin"></h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="form-tambah-edit-admin" name="form-tambah-edit-admin" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-12">

                            <input type="hidden" name="id" id="id-admin">

                            <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">Name</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="name_admin" name="name" value="" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">Email</label>
                                <div class="col-sm-12">
                                    <input type="email" class="form-control" id="email_admin" name="email" value="" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">Password</label>
                                <div class="col-sm-12">
                                    <input type="password" class="form-control" id="password_admin" name="password" value="" required>
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