<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('name', $request->name)->first();
       
        if (!$user) {
            return response()->json(['error'=>'User Tidak Ditemukan!']);
        }
        if (empty($request->name)||empty($request->password)) {
            return response()->json(['error'=>'Username Dan Pasword Tidak Boleh Kosong!']);
        }
        if (!\Hash::check($request->password, $user->password)) {
            return response()->json(['error'=>'Password Salah']);
        }
        if (\Auth::attempt($request->only('name', 'password'))) {
            return response()->json(['success'=>'Login Sukses!']);
        }

        return response()->json(['error'=>'Ooops! something went wrong!']);
    }

    public function register(Request $request)
    {
        // if ($request->password !== $request->passconfirm) {
        //     return response()->json(['error'=>'passwords do not match']);
        // }
        if (empty($request->name)||empty($request->email)||empty($request->password)) {
            return response()->json(['error'=>'No field should be empty!']);
        }
        $user = new User;
        $user->name= $request->name;
        $user->email= $request->email;
        $user->password= \Hash::make($request->password);
        if ($user->save()) {
            return response()->json(['success'=>'User Registered Successfully!']);
        };
    }


    // public function login(){
    //     return view('login');
    // }

    // public function register(){
    //     return view('register');
    
    // }

    // public function loginproses(Request $request){
    //     if(Auth::attempt($request->only('name', 'password'))){
    //         return redirect('products');
    //     }

    //     return redirect('login');
    // }

    // public function registeruser(Request $request)
    // {
    //     User::create([
    //         'name' => $request -> name,
    //         'email' => $request -> email,
    //         'password' => bcrypt($request->password),
    //         'remember_token' => Str::random(60)
    //     ]);

    //     return redirect('login');
    // }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}

