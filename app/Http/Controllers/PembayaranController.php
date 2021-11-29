<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PembayaranController extends Controller
{
    public function index(){
        return view('pembayaran.pembayaran');
    }

    public function addPembayaran(Request $request){
        $validator = Validator::make($request->all(), [
            "pembayaran" => 'required|max:191',
           
        ]);

        if($validator->fails()){
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages(),
            ]);
        }
        else
        {
            $pembayaran = new Pembayaran;
            $pembayaran ->pembayaran = $request-> input('pembayaran');
            $pembayaran ->save();
            return response()->json([
                'status'=>230,
                'message' =>'Data Pembayaran Berhasil Ditambahkan',
            ]);
        }
    }

    public function fetchpembayaran(){
        $pembayarans = Pembayaran::all();
        return response()->json([
            'pembayarans'=> $pembayarans,
        ]);
    }

    public function editPembayaran($id){

        $pembayaran = Pembayaran::find($id);
        if($pembayaran)
        {
            return response()->json([
                'status'=> 202,
                'pembayaran' => $pembayaran,
            ]);
        }

        else{
            return response()->json([
                'status'=> 202,
                'message' => 'Data Pembayaran Tidak Ditemukan',
            ]);
        }
    }

    public function updatePembayaran(Request $request, $id){
        $validator = Validator::make($request->all(), [
            "pembayaran" => 'required|max:191',
        ]);

        if($validator->fails()){
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages(),
            ]);
        }
        else
        {
            $pembayaran = Pembayaran::find($id);
            if($pembayaran)
        {
            $pembayaran ->pembayaran = $request-> input('pembayaran');
            $pembayaran ->update();

            return response()->json([
                'status'=>230,
                'message' =>'Data Pembayaran Berhasil Di Ubah',
            ]);
        }

        else{
            return response()->json([
                'status'=> 202,
                'message' => 'Data Pembayaran Tidak Ditemukan',
            ]);
        }

    }
    }
    public function deletePembayaran($id){
        $pembayaran = Pembayaran::find($id);
        $pembayaran ->delete();
        return response()->json([
            'status'=> 200,
            'message' => 'Data Berhasil Dihapus',
        ]);
    }
}
