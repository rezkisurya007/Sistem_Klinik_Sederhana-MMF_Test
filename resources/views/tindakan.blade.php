@extends('layout.master')

@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css"
integrity="sha256-pODNVtK3uOhL8FUNWWvFQK0QoQoV3YA9wGGng6mbZ0E=" crossorigin="anonymous" />
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Tindakan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              {{-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"></li> --}}
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- Page Heading -->
    
   
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
  
           
          <a href="javascript:void(0)" class="btn btn-primary" title="Tambah Tindakan" id="tombol-tambah-tindakan"><i class='far fa-plus-square'></i></a>
                    {{-- <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#adduser" title="Add Pegawai"><i class="fas fa-plus"></i> </button>
                    @include('user.adduser') --}}

          @include('addupdatetindakan')
          
           

        </div>
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped " id="tabel_tindakan" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            
                            <th>Nama Tindakan</th>
                            <th>Harga</th>
                            
                            
                            <th>Action</th>
                            
                        
                            {{-- <th>Log</th> --}}

                            
                        </tr>
                    </thead>
                    <tbody>
                       
                        {{-- <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          
                          
                        
                                   
                        </tr> --}}
                  
                        
                    </tbody>
                    
                    
                </table>
                {{-- @include('sweetalert::alert') --}}
            </div>
        </div>

        <div class="modal fade" tabindex="-1" role="dialog" id="konfirmasi-modal-tindakan" data-backdrop="false">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">PERHATIAN</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <p><b>Jika menghapus Tindakan maka</b></p>
                      <p>*data Tindakan tersebut hilang selamanya, apakah anda yakin?</p>
                  </div>
                  <div class="modal-footer bg-whitesmoke br">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-danger" value="{{ csrf_token() }}" name="tombol-hapus-tindakan" id="tombol-hapus-tindakan">Hapus
                          Data</button>
                  </div>
              </div>
          </div>
      </div>


    </div>
    
</div>
</div>
</div>
      
</div>
    
    </section>

    

@endsection
@push('scripts')
{{-- <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script> --}}
<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>

<script type="text/javascript" language="javascript"
    src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" language="javascript"
    src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"
    integrity="sha256-sPB0F50YUDK0otDnsfNHawYmA5M0pjjUf4TvRJkGFrI=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.js"
    integrity="sha256-siqh9650JHbYFKyZeTEAhq+3jvkFCG8Iz+MHdr9eKrw=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

 

        $('#tombol-tambah-tindakan').click(function () {
            $('#button-simpan-tindakan').val("create-post"); //valuenya menjadi create-post
            $('#id-tindakan').val(''); //valuenya menjadi kosong
            $('#form-tambah-edit-tindakan').trigger("reset"); //mereset semua input dll didalamnya
            $('#modal-judul-tindakan').html("Tambah Tindakan"); //valuenya tambah pegawai baru
            $('#tambah-edit-modal-tindakan').modal('show'); //modal tampil
        });

    $(document).ready( function () {
    $('#tabel_tindakan').DataTable({
      processing: true,
      serverSide: true, //aktifkan server-side 
      ajax: {
        url : "/tindakan",
        type : "GET"
       
       
      },
      columns:[
      
        {
        data:'nama',
        name:'nama'
        },
        {
        data:'id',
        render: function(id, e, data){
          var output = ``;

           output += `Rp. `+data.harga+``;

          return output;
                 },
        },
       
        {
        data:'action',
        name:'action'
        },
    ]
    });

} );

// Tambah atau edit

if ($("#form-tambah-edit-tindakan").length > 0) {
            $("#form-tambah-edit-tindakan").validate({
                submitHandler: function (form) {
                    var actionType = $('#tombol-simpan').val();
                    $('#tombol-simpan').html('Sending..');
                    $.ajax({
                        data: $('#form-tambah-edit-tindakan').serialize(), //function yang dipakai agar value pada form-control seperti input, textarea, select dll dapat digunakan pada URL query string ketika melakukan ajax request
                        url: "/addupdatetindakan", //url simpan data
                        type: "POST", //karena simpan kita pakai method POST
                        dataType: 'json', //data tipe kita kirim berupa JSON
                        success: function (data) { //jika berhasil 
                            $('#form-tambah-edit-tindakan').trigger("reset"); //form reset
                            $('#tambah-edit-modal-tindakan').modal('hide'); //modal hide
                            $('#tombol-simpan').html('Simpan'); //tombol simpan
                            var oTable = $('#tabel_tindakan').dataTable(); //inialisasi datatable
                            oTable.fnDraw(false); //reset datatable
                            iziToast.success({ //tampilkan iziToast dengan notif data berhasil disimpan pada posisi kanan bawah
                                title: 'Data Berhasil Disimpan',
                                message: '{{ Session('
                                success ')}}',
                                position: 'bottomRight'
                            });
                        },
                        error: function (data) { //jika error tampilkan error pada console
                            console.log('Error:', data);
                            $('#tombol-simpan').html('Simpan');
                        }
                    });
                }
            })
        }

        $('body').on('click', '.edit-post', function () {
            var data_id_tindakan = $(this).data('id');
            $.get('/tindakan/' + data_id_tindakan + '/edit', function (data) {
                $('#modal-judul-tindakan').html("Edit Post");
                $('#tombol-simpan').val("edit-post");
                $('#tambah-edit-modal-tindakan').modal('show');
                //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas               
                $('#id-tindakan').val(data.id);
                $('#kode_tindakan').val(data.kode);
                $('#nama_tindakan').val(data.nama);   
                $('#harga_tindakan').val(data.harga);
             

            })
        });



        $(document).on('click', '.delete', function () {
            dataId = $(this).attr('id');
            $('#konfirmasi-modal-tindakan').modal('show');
        });
        //jika tombol hapus pada modal konfirmasi di klik maka
        $('#tombol-hapus-tindakan').click(function () {
                
            $.ajax({
                url: "deletetindakan/" + dataId, //eksekusi ajax ke url ini
                type: 'delete',
                beforeSend: function () {
                    $('#tombol-hapus-tindakan').text('Hapus Data'); //set text untuk tombol hapus
                },
                success: function (data) { //jika sukses
                    setTimeout(function () {
                        $('#konfirmasi-modal-tindakan').modal('hide'); //sembunyikan konfirmasi modal
                        var oTable = $('#tabel_tindakan').dataTable();
                        oTable.fnDraw(false); //reset datatable
                    });
                    iziToast.warning({ //tampilkan izitoast warning
                        title: 'Data Berhasil Dihapus',
                        message: '{{ Session('
                        delete ')}}',
                        position: 'bottomRight'
                    });
                }
            })
        });

</script>
    
@endpush




