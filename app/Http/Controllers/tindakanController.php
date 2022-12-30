<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tindakan;


class tindakanController extends Controller
{
    public function index(Request $request){
        $tindakan = tindakan::all();

        if($request->ajax()){
            return datatables()->of($tindakan)
                        ->addColumn('action', function($data){
                            $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" title="Edit Tindakan" class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i> </a>';
                            $button .= '&nbsp;';
                            $button .= '<button type="button" name="delete" id="'.$data->id.'" title="Delete Tindakan" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> </button>';     
                            return $button;
                        })
                        ->rawColumns(['action'])
                        ->addIndexColumn()
                        ->make(true);
        }

        return view('tindakan');
    }

    public function store(Request $request)
    {
        $id = $request->get('id');
        
        $post   =   tindakan::updateOrCreate(['id' => $id],
                    [
                      
                        'nama' => $request->nama,
                        'harga' => $request->harga,
                        
                    ]); 

        return response()->json($post);
    }

    public function edit($id)
    {
        // $where = array('id' => $id);
        $post  = tindakan::where('id',$id)->first();
     
        return response()->json($post);
    }

    public function destroy($id)
        {
            $post = tindakan::where('id',$id)->delete();
         
            return response()->json($post);
        }

}
