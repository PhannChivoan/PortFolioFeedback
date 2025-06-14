<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $userCount = User::count();
        $msgCount = Message::count();
        return view('Admin.home',['userCount'=>$userCount,'msgCount'=>$msgCount]);
    }
}
