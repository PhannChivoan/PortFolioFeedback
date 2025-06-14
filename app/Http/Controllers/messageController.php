<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class messageController extends Controller
{
    public function store(Request $rq){
        $ins = Message::create([
            'name' => $rq->name,
            'email' => $rq->email,
            'subject' => $rq->Subject,
            'message' => $rq->Message   ,
        ]);
        return redirect("/getmessage");
    }
    public function showMessage(){
        $message = Message::all();
        $user = Auth::user();
        return view('Admin.message',['msg'=>$message,'user'=>$user]);
    }
    public function updateMessage(Request $rq){
        $msg = Message::find($rq->id);
        $msg->name = $rq->name;
        $msg->email = $rq->email;
        $msg->subject = $rq->Subject;
        $msg->message = $rq->Message;
        $msg->save();
    }
     public function deleteMessage(Request $rq){
        $id = $rq->id;
        Message::destroy($id);
    }
}
