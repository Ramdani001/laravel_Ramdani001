<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function authLogin(Request $request){
        // dd($request);
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            $route = '/dashboard';

            return redirect()->intended($route);
            // dd("Berhasil");
        }

        // dd("gagal");
        return back()->with('error', "Username Atau Password Salah !!!");

    }

    public function authRegister(Request $request){

        $cekData = $this->validate($request, [
            'email' => 'required|email',
        ]);

        $cekEmail = User::where('email', $request->email)->first();

        if(!$cekEmail){
            
            $password = Hash::make($request->password);

            $dataRegist = New User();
            $dataRegist-> email = $request->email;
            $dataRegist-> username = $request->username;
            $dataRegist-> password = $password;
            $dataRegist->save();

            if($dataRegist){
                return redirect()->back()->with('success', 'Anda Berhasil Register!');
            }

            dd("Coba Lagi");

        }else{
            dd("Data Email Sudah ada");
        }

    }


    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('Logout Berhasil', "Anda Berhasil Keluar");

    }

}
