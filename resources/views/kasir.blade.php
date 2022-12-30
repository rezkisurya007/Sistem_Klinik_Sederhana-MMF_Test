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
            <h1 class="m-0">Kasir</h1>
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
  
           
          <a href="javascript:void(0)" class="btn btn-primary" title="Tambah Transaksi" id="tombol-tambah-kasir"><i class='far fa-plus-square'></i></a>
                    {{-- <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#adduser" title="Add Pegawai"><i class="fas fa-plus"></i> </button>
                    @include('user.adduser') --}}

          @include('addupdatekasir')
          
           

        </div>
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped " id="tabel_kasir" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>No Transaksi</th>
                            <th>Pasien</th>
                            <th>Dokter</th>
                            <th>Tindakan</th>
                            <th>Obat</th>
                            <th>Jumlah Obat</th>
                            <th>Jumlah Total</th>
                            <th>Status</th>
                            <th>Created By</th>

                            
                            
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

        <div class="modal fade" tabindex="-1" role="dialog" id="konfirmasi-modal-kasir" data-backdrop="false">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">PERHATIAN</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <p><b>Jika menghapus Data Transaksi maka</b></p>
                      <p>*data Transaksi tersebut hilang selamanya, apakah anda yakin?</p>
                  </div>
                  <div class="modal-footer bg-whitesmoke br">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-danger" value="{{ csrf_token() }}" name="tombol-hapus-kasir" id="tombol-hapus-kasir">Hapus
                          Data</button>
                  </div>
              </div>
          </div>
      </div>




      <div class="modal fade" tabindex="-1" role="dialog" id="konfirmasi-modal-kasir-konfirm" data-backdrop="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">PERHATIAN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah akan yakin akan melakukan konfirmasi data ?</p>
                    {{-- <p>*data Obat tersebut hilang selamanya, apakah anda yakin?</p> --}}
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success" value="{{ csrf_token() }}" name="tombol-konfirm-kasir" id="tombol-konfirm-kasir">Konfirmasi Data</button>
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

 

        $('#tombol-tambah-kasir').click(function () {
            $('#button-simpan-kasir').val("create-post"); //valuenya menjadi create-post
            $('#id-kasir').val(''); //valuenya menjadi kosong
            $('#form-tambah-edit-kasir').trigger("reset"); //mereset semua input dll didalamnya
            $('#modal-judul-kasir').html("Tambah Kasir"); //valuenya tambah pegawai baru
            $('#tambah-edit-modal-kasir').modal('show'); //modal tampil
        });

    $(document).ready( function () {
    $('#tabel_kasir').DataTable({
      processing: true,
      serverSide: true, //aktifkan server-side 
      ajax: {
        url : "/kasir",
        type : "GET"
       
       
      },
      columns:[
        {
        data:'id',
        name:'id'
        },
        {
        data:'no_transaksi',
        name:'no_transaksi',
        },
        {
        data:'pasiens.nama',
        name:'pasiens.nama',
        },
        {
        data:'dokters.nama',
        name:'dokters.nama',
        },
        {
        data:'tindakans.nama',
        name:'tindakans.nama',
        },
        {
        data:'obats.name',
        name:'obats.name',
        },
        {
        data:'jumlah_obat',
        name:'jumlah_obat',
        },
        {
        data:'jumlah_total',
        name:'jumlah_total',
        },
        {
        data:'status',
        name:'status',
        },
        {
        data:'users.name',
        name:'users.name',
        },
        {
        data:'action',
        name:'action'
        },
    ],
    "columnDefs": [
    { "width": "120px", "targets": -1 }
  ]
    });

} );

// Tambah atau edit

if ($("#form-tambah-edit-kasir").length > 0) {
            $("#form-tambah-edit-kasir").validate({
                submitHandler: function (form) {
                    var actionType = $('#tombol-simpan').val();
                    $('#tombol-simpan').html('Sending..');
                    $.ajax({
                        data: $('#form-tambah-edit-kasir').serialize(), //function yang dipakai agar value pada form-control seperti input, textarea, select dll dapat digunakan pada URL query string ketika melakukan ajax request
                        url: "/addupdatekasir", //url simpan data
                        type: "POST", //karena simpan kita pakai method POST
                        dataType: 'json', //data tipe kita kirim berupa JSON
                        success: function (data) { //jika berhasil 
                            $('#form-tambah-edit-kasir').trigger("reset"); //form reset
                            $('#tambah-edit-modal-kasir').modal('hide'); //modal hide
                            $('#tombol-simpan').html('Simpan'); //tombol simpan
                            var oTable = $('#tabel_kasir').dataTable(); //inialisasi datatable
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
            var data_id_kasir = $(this).data('id');
            $.get('/kasir/' + data_id_kasir + '/edit', function (data) {
                $('#modal-judul-kasir').html("Edit Post");
                $('#tombol-simpan').val("edit-post");
                $('#tambah-edit-modal-kasir').modal('show');
                //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas               
                $('#id-kasir').val(data.id);
                // $('#no_transaksi').val(data.no_transaksi);
                $('#pasien').val(data.pasien);   
                $('#dokter').val(data.dokter);
                $('#tindakan').val(data.tindakan);
                $('#obat').val(data.obat);
                $('#jumlah_obat').val(data.jumlah_obat);    
                

             

            })
        });



        $(document).on('click', '.delete', function () {
            dataId = $(this).attr('id');
            $('#konfirmasi-modal-kasir').modal('show');
        });
        //jika tombol hapus pada modal konfirmasi di klik maka
        $('#tombol-hapus-kasir').click(function () {
                
            $.ajax({
                url: "deletekasir/" + dataId, //eksekusi ajax ke url ini
                type: 'delete',
                beforeSend: function () {
                    $('#tombol-hapus-kasir').text('Hapus Data'); //set text untuk tombol hapus
                },
                success: function (data) { //jika sukses
                    setTimeout(function () {
                        $('#konfirmasi-modal-kasir').modal('hide'); //sembunyikan konfirmasi modal
                        var oTable = $('#tabel_kasir').dataTable();
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


        $(document).on('click', '.konfirm', function () {
            datakonfirm = $(this).attr('id');
            $('#konfirmasi-modal-kasir-konfirm').modal('show');
        });
        //jika tombol hapus pada modal konfirmasi di klik maka
        $('#tombol-konfirm-kasir').click(function () {
                
            $.ajax({
                url: "konfirmkasir/" + datakonfirm, //eksekusi ajax ke url ini
                type: 'POST',
                beforeSend: function () {
                    $('#tombol-konfirm-kasir').text('Konfirm Data'); //set text untuk tombol hapus
                },
                success: function (data) { //jika sukses
                    if (data.status == false) {
                        iziToast.warning({ //tampilkan izitoast warning
                        title: 'jumlah obat tidak dapat melebihi stok',
                        message: '{{ Session(' delete ')}}',
                        position: 'bottomRight'
                    });
                    }
                    if (data.status == true) {
                        setTimeout(function () {
                        $('#konfirmasi-modal-kasir-konfirm').modal('hide'); //sembunyikan konfirmasi modal
                        var oTable = $('#tabel_kasir').dataTable();
                        oTable.fnDraw(false); //reset datatable
                    });
                    iziToast.success({ //tampilkan izitoast warning
                        title: 'Data Berhasil Di Update',
                        message: '{{ Session(' delete ')}}',
                        position: 'bottomRight'
                    });
                    }
                   
                }
            })
        });

</script>
    
@endpush




