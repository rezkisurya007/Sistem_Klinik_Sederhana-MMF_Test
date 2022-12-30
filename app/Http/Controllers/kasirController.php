<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kasir;
use App\dokter;
use App\obat;
use App\pasien;
use App\tindakan;
use App\histori;
use Carbon\Carbon;

class kasirController extends Controller
{
    public function index(Request $request){
        $kasir = kasir::with('pasiens','dokters','tindakans','users','obats')->get();
        $obat = obat::all();
        $pasien = pasien::all();
        $tindakan = tindakan::all();
        $dokter = dokter::all();

        if($request->ajax()){
            return datatables()->of($kasir)
                        ->addColumn('action', function($data){
                            $button = '';
                            if ($data->status == 'pending') {
                                $button .= '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" title="Edit Kasir" class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i> </a>';
                                $button .= '&nbsp;';
                                $button .= '<button type="button" name="delete" id="'.$data->id.'" title="Delete Kasir" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> </button>';     
                                $button .= '&nbsp;';
                                $button .= '<button type="button" name="konfirm" id="'.$data->id.'" title="Konfirmasi pembayaran" class="konfirm btn btn-success btn-sm"><i class="fas fa-check-circle"></i> </button>';     
                            }else {
                                $button .= '-';
                            }
                         
                                
                            
                           

                            return $button;
                        })
                        ->rawColumns(['action'])
                        ->addIndexColumn()
                        ->make(true);
        }

        return view('kasir')
        ->with('obat',$obat)
        ->with('pasien',$pasien)
        ->with('tindakan',$tindakan)
        ->with('dokter',$dokter)
        ;
    }

    public function store(Request $request)
    {
        $id = $request->get('id');

        $kasir = kasir::orderBy('id','desc')->first();
        $histori = histori::orderBy('id','desc')->first();



        $tindakan = tindakan::where('id',$request->tindakan)->first();
        $obat = obat::where('id',$request->obat)->first();

        $harga_tindakan = $tindakan->harga;
        $jumlah_obat = $request->jumlah_obat;
        $harga_obat = $obat->harga;

        $total_obat = $jumlah_obat * $harga_obat;

        $jumlah_total = $total_obat + $harga_tindakan;

        if ($histori == null) {
            $no_transaksi = 1;
        }
        if ($histori != null) {
            $no_transaksi = $histori->id + 1;
        }
        if ($kasir != null) {
            if ($no_transaksi <= $kasir->id) {

                $no_transaksi = $kasir->id + 1;
    
                # code...
            }
        }

        $payload = [
            'pasien' => $request->pasien,
            'dokter' => $request->dokter,
            'tindakan' => $request->tindakan,
            'harga_tindakan' => $tindakan->harga,
            'obat' => $request->obat,
            'jumlah_obat' => $request->jumlah_obat,
            'harga_obat' => $obat->harga,
            'jumlah_total' => $jumlah_total,
            'status' => 'pending',
            'created_by' => $request->user()->id,
        ];

        if(empty($id)){
            $payload['no_transaksi'] = 'TRSC-'.Carbon::now()->format('Y').'/'.Carbon::now()->format('m').'/'.$no_transaksi;
        }
     

        $post   =   kasir::updateOrCreate(['id' => $id], $payload); 

        return response()->json($post);
    }

    public function edit($id)
    {
        // $where = array('id' => $id);
        $post  = kasir::where('id',$id)->first();
     
        return response()->json($post);
    }

    public function destroy($id)
        {
            $post = kasir::where('id',$id)->delete();
         
            return response()->json($post);
        }

        
    public function konfirm(Request $request,$id)
    {
        $post = kasir::where('id',$id)->with('pasiens','dokters','tindakans','users','obats')->first();

        $obat = obat::where('id',$post->obat)->first();
        if ($post->jumlah_obat > $obat->stok) {
           return response()->json([
            'status' => false,
           ]);
        }else {
        $post->status = 'selesai';
        $post->save();

        $histori = new histori;
        $histori->no_transaksi = $post->no_transaksi;
        $histori->pasien = $post->pasiens->nama;
        $histori->dokter = $post->dokters->nama;
        $histori->tindakan = $post->tindakans->nama;
        $histori->harga_tindakan = $post->harga_tindakan;
        $histori->obat = $post->obats->name;
        $histori->jumlah_obat = $post->jumlah_obat;
        $histori->harga_obat = $post->harga_obat;
        $histori->jumlah_total = $post->jumlah_total;
        $histori->status = $post->status;
        $histori->created_by = $post->users->name;
        $histori->save();

        $stok = $obat->stok;
        $jumlah = $post->jumlah_obat;

        $pengurangan = $stok - $jumlah;

        $obat->stok = $pengurangan;
        $obat->save();

        

        return response()->json([
            'status' => true,
            'data' => $post,
        ]);
     
        }
        

        
        

        









     
        
    }

}
