<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    public function index(){
        return view('company.company');    
}

    public function addCompany(Request $request){
        $validator = Validator::make($request->all(), [
            "id_user" => 'required|max:191',
            "perusahaan" => 'required|max:191',
            "telp" => 'required|max:191',
            "alamat" => 'required|max:191',
            "email" => 'required|max:191',
            "name_pic" => 'required|max:191',
            "hp_pic" => 'required|max:191',
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
            $company = new Company;
            $company ->id_user = $request-> input('id_user');
            $company ->perusahaan = $request-> input('perusahaan');
            $company ->telp = $request-> input('telp');
            $company ->alamat = $request-> input('alamat');
            $company ->email = $request-> input('email');
            $company ->name_pic = $request-> input('name_pic');
            $company ->hp_pic = $request-> input('hp_pic');
            $company ->keterangan = $request-> input('keterangan');
            $company ->status = $request-> input('status');
            $company ->save();
            return response()->json([
                'status'=>230,
                'message' =>'Data Company Berhasil Ditambahkan',
            ]);
        }
    }

    public function fetchcompany() {
        $companies = Company::all();
        return response()->json([
        'companies' => $companies,
        ]);
    }

    public function editCompany($id){

        $company = Company::find($id);
        if($company)
        {
            return response()->json([
                'status'=> 202,
                'company' => $company,
            ]);
        }

        else{
            return response()->json([
                'status'=> 202,
                'message' => 'Data Company Tidak Ditemukan',
            ]);
        }
    }

    public function updateCompany(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            "id_user" => 'required|max:191',
            "perusahaan" => 'required|max:191',
            "telp" => 'required|max:191',
            "alamat" => 'required|max:191',
            "email" => 'required|max:191',
            "name_pic" => 'required|max:191',
            "hp_pic" => 'required|max:191',
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
            $company = Company::find($id);
            if($company)
        {
            $company ->id_user = $request-> input('id_user');
            $company ->perusahaan = $request-> input('perusahaan');
            $company ->telp = $request-> input('telp');
            $company ->alamat = $request-> input('alamat');
            $company ->email = $request-> input('email');
            $company ->name_pic = $request-> input('name_pic');
            $company ->hp_pic = $request-> input('hp_pic');
            $company ->keterangan = $request-> input('keterangan');
            $company ->status = $request-> input('status');
            $company ->update();

            return response()->json([
                'status'=>230,
                'message' =>'Data Company Berhasil Di Ubah',
            ]);
        }

        else{
            return response()->json([
                'status'=> 202,
                'message' => 'Data Company Tidak Ditemukan',
            ]);
        }

    }

    }

    public function deleteCompany($id){
        $company = Company::find($id);
        $company ->delete();
        return response()->json([
            'status'=> 200,
            'message' => 'Data Berhasil Dihapus',
        ]);
    }
}
