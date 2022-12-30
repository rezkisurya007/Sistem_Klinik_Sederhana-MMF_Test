<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class userController extends Controller
{
    public function index(Request $request){
        $user = User::all();

        if($request->ajax()){
            return datatables()->of($user)
                        ->addColumn('action', function($data){
                            $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" title="Edit Admin" class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i> </a>';
                            $button .= '&nbsp;';
                            $button .= '<button type="button" name="delete" id="'.$data->id.'" title="Delete Admin" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> </button>';     
                            return $button;
                        })
                        ->rawColumns(['action'])
                        ->addIndexColumn()
                        ->make(true);
        }

        return view('user');
    }

    public function store(Request $request)
    {
        $id = $request->get('id');
        
        $post   =   User::updateOrCreate(['id' => $id],
                    [
                        'name' => $request->name,
                        'email' => $request->email,
                        'password' => Hash::make($request->password),
                        
                    ]); 

        return response()->json($post);
    }

    public function edit($id)
    {
        // $where = array('id' => $id);
        $post  = User::where('id',$id)->first();
     
        return response()->json($post);
    }

    public function destroy($id)
        {
            $post = User::where('id',$id)->delete();
         
            return response()->json($post);
        }

}
