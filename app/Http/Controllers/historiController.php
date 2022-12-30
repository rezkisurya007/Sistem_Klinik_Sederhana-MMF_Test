<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\histori;

class historiController extends Controller
{
    public function index(Request $request){
        $histori = histori::all();

        if($request->ajax()){
            return datatables()->of($histori)->make(true);
        }

        return view('histori');
    }
}
