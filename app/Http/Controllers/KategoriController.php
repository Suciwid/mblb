<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KategoriController extends Controller
{
    public function index(){
        return view('kategori.kategori');
    }

    public function addKategori(Request $request){
        $validator = Validator::make($request->all(), [
            "nama_kategori" => 'required|max:191',
            "status" => 'required|max:191',
           
        ]);

        if($validator->fails()){
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages(),
            ]);
        }
        else
        {
            $product = new Kategori;
            $product ->nama_kategori = $request-> input('nama_kategori');
            $product ->status = $request-> input('status');
            $product ->save();
            return response()->json([
                'status'=>230,
                'message' =>'Data Kategori Berhasil Ditambahkan',
            ]);
        }
    }

    public function fetchkategori(){
        $kategoris = Kategori::all();
        return response()->json([
            'kategoris'=> $kategoris,
        ]);
    }

    public function editKategori($id){

        $kategori = Kategori::find($id);
        if($kategori)
        {
            return response()->json([
                'status'=> 202,
                'kategori' => $kategori,
            ]);
        }

        else{
            return response()->json([
                'status'=> 202,
                'message' => 'Data Kategori Tidak Ditemukan',
            ]);
        }
    }

    public function updateKategori(Request $request, $id){
        $validator = Validator::make($request->all(), [
            "nama_kategori" => 'required|max:191',
            "status" => 'required|max:191',
        ]);

        if($validator->fails()){
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages(),
            ]);
        }
        else
        {
            $kategori = Kategori::find($id);
            if($kategori)
        {
            $kategori ->nama_kategori = $request-> input('nama_kategori');
            $kategori ->status = $request-> input('status');
            $kategori ->update();

            return response()->json([
                'status'=>230,
                'message' =>'Data Kategori Berhasil Di Ubah',
            ]);
        }

        else{
            return response()->json([
                'status'=> 202,
                'message' => 'Data Kategori Tidak Ditemukan',
            ]);
        }

    }
    }
    public function deleteKategori($id){
        $kategori = Kategori::find($id);
        $kategori ->delete();
        return response()->json([
            'status'=> 200,
            'message' => 'Data Berhasil Dihapus',
        ]);
    }

}
