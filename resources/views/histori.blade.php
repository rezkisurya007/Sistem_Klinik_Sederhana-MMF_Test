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
            <h1 class="m-0">Histori Transaksi</h1>
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
  
           
          
          
           

        </div>
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped " id="tabel_histori" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>No Transaksi</th>
                            <th>Pasien</th>
                            <th>Dokter</th>
                            <th>Tindakan</th>
                            <th>H.Tindakan</th>
                            <th>Obat</th>
                            <th>H.Obat</th>
                            <th>Jumlah Obat</th>
                            <th>Jumlah Total</th>
                            <th>Status</th>
                            <th>Created By</th>
                            
                        
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
   
    $(document).ready( function () {
    $('#tabel_histori').DataTable({
      processing: true,
      serverSide: true, //aktifkan server-side 
      ajax: {
        url : "/histori",
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
        data:'pasien',
        name:'pasien',
        },
        {
        data:'dokter',
        name:'dokter',
        },
        {
        data:'tindakan',
        name:'tindakan',
        },
        {
        data:'harga_tindakan',
        name:'harga_tindakan',
        },
        {
        data:'obat',
        name:'obat',
        },
        {
        data:'harga_obat',
        name:'harga_obat',
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
        data:'created_by',
        name:'created_by',
        },
    ]
    });

} );

// Tambah atau edit



</script>
    
@endpush




