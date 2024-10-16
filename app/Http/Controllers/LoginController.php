<?php

namespace App\Http\Controllers;

use App\Mail\ResetPasswordMail;
use App\Models\PasswordResetToken;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    public function index(){

        return view('auth.login');
    }
    public function forgot_password(){
        return view('auth.forgot-password');


    }

    public function forgot_password_act(Request $request){
        $customMessage=[
            'email.required'=> 'email tidak boleh kosong',
            'email.email'=> 'email tidak valid',
            'email.exists'=> 'email tidak terdaftar di database',

        ];

        $request->validate([

            'email'=> 'required|email|exists:users,email'
            
        ] ,$customMessage);

        $token =\Str::random(60);

        PasswordResetToken::updateOrCreate([
            'email'=> $request->email

        ],
        [
        'email'      => $request->email,
        'token'      => $token,
        'created_at' => now(),
        ]

    );

      Mail::to($request->email)->send(new ResetPasswordMail($token));


        return redirect()->route('forgot-password')->with('success','kamu telah mengirimkan link reset password ke email');
    }
    

    public function validasi_forgot_password(Request $request, $token){
        $cek = PasswordResetToken::where('token', $token)->fist();
        if ($cek){

            return redirect()->route('login')->with('failed', 'token tidak valid');

        }else{

            
        }
        return view('auth.validasi-forgot-password', compact('token'));


    }
    public function login_proses(Request $request){

     $request->validate([
        'email'=> 'required',
        'password'=> 'required', 
    ]); 

    $data=[
        'email' => $request-> email,
        'password'=> $request->password
    ];

    if (Auth::attempt($data)){

        return redirect()->route('about');
    }else{

        return redirect()->route('login')->with('failed', 'email atau password salah');
    }



    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success','kamu berhasil logout');

    }
    public function register(){

        return view('auth.register');
    }
    public function register_proses(Request $request){
     $request->validate([
        'nama'=> 'required',
        'email'=> 'required|email|unique:users,email',
        'password'=>'required|min:6'



     ]);
     $data['name']     = $request->nama;
     $data['email']    = $request->email;
     $data['password'] = Hash::make( $request->password);

     User::create($data);

     $login=[
        'email' => $request-> email,
        'password'=> $request->password
    ];

    if (Auth::attempt($data)){

        return redirect()->route('about');
    }else{

        return redirect()->route('login')->with('succes', 'email atau password sudah  tersimpan');
    }


    }
}
