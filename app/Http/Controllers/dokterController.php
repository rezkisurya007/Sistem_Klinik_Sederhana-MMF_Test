<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dokter;

class dokterController extends Controller
{
    public function index(Request $request){
        $dokter = dokter::all();

        if($request->ajax()){
            return datatables()->of($dokter)
                        ->addColumn('action', function($data){
                            $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" title="Edit Dokter" class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i> </a>';
                            $button .= '&nbsp;';
                            $button .= '<button type="button" name="delete" id="'.$data->id.'" title="Delete Dokter" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> </button>';     
                            return $button;
                        })
                        ->rawColumns(['action'])
                        ->addIndexColumn()
                        ->make(true);
        }

        return view('dokter');
    }

    public function store(Request $request)
    {
        $id = $request->get('id');
        
        $post   =   dokter::updateOrCreate(['id' => $id],
                    [
                     
                        'nama' => $request->nama,
                        'alamat' => $request->alamat,
                        'no_handphone' => $request->no_handphone,
                        'gender' => $request->gender,
                        'status' => $request->status,
                    ]); 

        return response()->json($post);
    }

    public function edit($id)
    {
        // $where = array('id' => $id);
        $post  = dokter::where('id',$id)->first();
     
        return response()->json($post);
    }

    public function destroy($id)
        {
            $post = dokter::where('id',$id)->delete();
         
            return response()->json($post);
        }
}
