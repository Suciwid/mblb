<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProdukController extends Controller
{
    public function index()
    {
        return view('products.products');
    }

    public function addProduct(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "id_kategori" => 'required|max:191',
            "nama_produk" => 'required|max:191',
            "keterangan" => 'required|max:191',
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
            $product = new Product;
            $product ->id_kategori = $request-> input('id_kategori');
            $product ->nama_produk = $request-> input('nama_produk');
            $product ->keterangan = $request-> input('keterangan');
            $product ->status = $request-> input('status');
            $product ->save();
            return response()->json([
                'status'=>230,
                'message' =>'Data Produk Berhasil Ditambahkan',
            ]);
        }
    }

    public function fetchproduct() {
        $products = Product::all();
        return response()->json([
        'products' => $products,
        ]);
    }

    public function editProduct($id){

        $product = Product::find($id);
        if($product)
        {
            return response()->json([
                'status'=> 202,
                'product' => $product,
            ]);
        }

        else{
            return response()->json([
                'status'=> 202,
                'message' => 'Data Produk Tidak Ditemukan',
            ]);
        }
    }

    public function updateProduct(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            "id_kategori" => 'required|max:191',
            "nama_produk" => 'required|max:191',
            "keterangan" => 'required|max:191',
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
            $product = Product::find($id);
            if($product)
        {
            $product ->id_kategori = $request-> input('id_kategori');
            $product ->nama_produk = $request-> input('nama_produk');
            $product ->keterangan = $request-> input('keterangan');
            $product ->status = $request-> input('status');
            $product ->update();

            return response()->json([
                'status'=>230,
                'message' =>'Data Produk Berhasil Di Ubah',
            ]);
        }

        else{
            return response()->json([
                'status'=> 202,
                'message' => 'Data Produk Tidak Ditemukan',
            ]);
        }

    }

    }

    public function deleteProduct($id){
        $product = Product::find($id);
        $product ->delete();
        return response()->json([
            'status'=> 200,
            'message' => 'Data Berhasil Dihapus',
        ]);
    }


}
