<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\obat;


class obatController extends Controller
{
    public function index(Request $request){
        $obat = obat::all();
        if($request->ajax()){
            return datatables()->of($obat)
                        ->addColumn('action', function($data){
                            $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" title="Edit Obat" class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i> </a>';
                            $button .= '&nbsp;';
                            $button .= '<button type="button" name="delete" id="'.$data->id.'" title="Delete Obat" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> </button>';     
                            return $button;
                        })
                        ->rawColumns(['action'])
                        ->addIndexColumn()
                        ->make(true);
        }

        return view('home');
    }


        public function store(Request $request)
        {
            $id = $request->get('id');
            
            $post   =   obat::updateOrCreate(['id' => $id],
                        [
                     
                            'name' => $request->name,
                            'stok' => $request->stok,
                            'harga' => $request->harga,
                            'satuan' => $request->satuan,
                        ]); 
    
            return response()->json($post);
        }

        public function edit($id)
        {
            // $where = array('id' => $id);
            $post  = obat::where('id',$id)->first();
         
            return response()->json($post);
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $post = obat::where('id',$id)->delete();
         
            return response()->json($post);
        }
    
}
