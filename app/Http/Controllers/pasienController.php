<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pasien;

class pasienController extends Controller
{
    public function index(Request $request){
        $pasien = pasien::all();

        if($request->ajax()){
            return datatables()->of($pasien)
                        ->addColumn('action', function($data){
                            $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" title="Edit Pasien" class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i> </a>';
                            $button .= '&nbsp;';
                            $button .= '<button type="button" name="delete" id="'.$data->id.'" title="Delete Pasien" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> </button>';     
                            return $button;
                        })
                        ->rawColumns(['action'])
                        ->addIndexColumn()
                        ->make(true);
        }

        return view('pasien');
    }

    public function store(Request $request)
    {
        $id = $request->get('id');
        
        $post   =   pasien::updateOrCreate(['id' => $id],
                    [
                      
                        'nik' => $request->nik,
                        'nama' => $request->nama,
                        'alamat' => $request->alamat,
                        'tanggal_lahir' => $request->tanggal_lahir,
                        'no_handphone' => $request->no_handphone,
                       
                        
                    ]); 

        return response()->json($post);
    }

    public function edit($id)
    {
        // $where = array('id' => $id);
        $post  = pasien::where('id',$id)->first();
     
        return response()->json($post);
    }

    public function destroy($id)
        {
            $post = pasien::where('id',$id)->delete();
         
            return response()->json($post);
        }
}
