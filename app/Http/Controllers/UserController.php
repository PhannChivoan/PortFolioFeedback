<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUser(){
        $users = User::all();
        return view('Admin.user',['users'=>$users]);
    }
    public function store(Request $rq){
        $ins = User::create([
            'name'=> $rq->name,
            'email'=> $rq->email,
            'password'=> $rq->password,
        ]);
        return redirect('/user');
    }

    public function updateUser(Request $request)
    {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;

        if (!empty($request->password)) {
            $user->password = bcrypt($request->password);
        }
        $user->save();
    }
    public function deleteUser(Request $request){
        $id = $request->id;
        User::destroy($id);
    }

}
