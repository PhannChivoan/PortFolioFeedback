<?php

namespace App\Http\Controllers\API;
use App\Models\Message;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageController extends Controller
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
}
