<?php

namespace App\Http\Controllers;

use App\Models\Truk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TrukController extends Controller
{
    public function index(){
        return view('truk.truk');
    }

    public function addTruk(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "id_buyer" => 'required|max:191',
            "id_user" => 'required|max:191',
            "plat" => 'required|max:191',
            "deskripsi" => 'required|max:191',
            "pic_truk" => 'required|max:191',
            "hp_pic" => 'required|max:191',
        ]);

        if($validator->fails()){
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages(),
            ]);
        }
        else
        {
            $truk = new Truk;
            $truk ->id_buyer = $request-> input('id_buyer');
            $truk ->id_user = $request-> input('id_user');
            $truk ->plat = $request-> input('plat');
            $truk ->deskripsi = $request-> input('deskripsi');
            $truk ->pic_truk = $request-> input('pic_truk');
            $truk ->hp_pic = $request-> input('hp_pic');
            $truk ->save();
            return response()->json([
                'status'=>230,
                'message' =>'Data Truk Berhasil Ditambahkan',
            ]);
        }
    }

    public function fetchtruk(){
        $truks = Truk::all();
        return response()->json([
        'truks' => $truks,
        ]);
    }

    public function editTruk($id){

        $truk = Truk::find($id);
        if($truk)
        {
            return response()->json([
                'status'=> 202,
                'truk' => $truk,
            ]);
        }

        else{
            return response()->json([
                'status'=> 202,
                'message' => 'Data Truk Tidak Ditemukan',
            ]);
        }
    }

    public function updateTruk(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            "id_buyer" => 'required|max:191',
            "id_user" => 'required|max:191',
            "plat" => 'required|max:191',
            "deskripsi" => 'required|max:191',
            "pic_truk" => 'required|max:191',
            "hp_pic" => 'required|max:191',
        ]);

        if($validator->fails()){
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages(),
            ]);
        }
        else
        {
            $truk = Truk::find($id);
            if($truk)
        {
            $truk ->id_buyer = $request-> input('id_buyer');
            $truk ->id_user = $request-> input('id_user');
            $truk ->plat = $request-> input('plat');
            $truk ->deskripsi = $request-> input('deskripsi');
            $truk ->pic_truk = $request-> input('pic_truk');
            $truk ->hp_pic = $request-> input('hp_pic');
            $truk ->update();

            return response()->json([
                'status'=>230,
                'message' =>'Data Truk Berhasil Di Ubah',
            ]);
        }

        else{
            return response()->json([
                'status'=> 202,
                'message' => 'Data Truk Tidak Ditemukan',
            ]);
        }

    }

    }

    public function deleteTruk($id){
        $truk = Truk::find($id);
        $truk ->delete();
        return response()->json([
            'status'=> 200,
            'message' => 'Data Berhasil Dihapus',
        ]);
    }
    }

