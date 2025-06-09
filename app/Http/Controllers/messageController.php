<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Message;
class messageController extends Controller
{
    public function storeMessage(Request $rq){
        $insert = Message::create([
            'name' => $rq->name,
            'email' => $rq->email,
            'subject' => $rq->subject,
            'message' => $rq->message,
        ]);
        return response()->json(['success'=>true,'data'=>$insert]);
    }
    public function showMessage(){
        $message = Message::all();
        return view('PortFolioMessage.show',['msg'=>$message]);
    }
}
