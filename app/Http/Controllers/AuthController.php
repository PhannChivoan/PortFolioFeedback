<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register(Request $rq){
         $rq->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:6',
        ]);
        $user = User::create([
            'name' => $rq->name,
            'email' => $rq->email,
            'password' => $rq->password,
        ]);
        return redirect('/');   
    }
    public function login(){
        $attrs = request()->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);
        if(!Auth::attempt($attrs)){
            throw ValidationException::withMessages([
                'email' => 'Username or Password is incorrect!'
            ]);
        }
       
        request()->session()->regenerate();
         $user = Auth::user();
        session(['user_name' => $user->name]);
        return redirect('/home');
    }
    public function destroy(){
        Auth::logout();
        return redirect('/');
    }
}
