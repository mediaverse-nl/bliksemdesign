<?php

namespace App\Http\Controllers\Site;

use App\Events\CustomerChatSent;
use App\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerChatController extends Controller
{
    public function fetchMessages()
    {
        if (!request()->session()->has('chat_session')){
            $chatSession = request()
                ->session()
                ->put('chat_session', uniqid('chat_'));
        }else{
            $chatSession = request()
                ->session()
                ->get('chat_session');
        }

        return Message::where('chat_session', '=', $chatSession)
            ->get();
    }

    public function sendMessage(Request $request)
    {
        if (!request()->session()->has('chat_session')){
            $chatSession = request()
                ->session()
                ->put('chat_session', uniqid('chat_'));
        }else{
            $chatSession = request()
                ->session()
                ->get('chat_session');
        }

        $data = [
            'message' => $request->data['text'],
            'chat_session' => $chatSession,
        ];

        $messageInst = new Message;

        $messageInst->insert($data);

        broadcast(new CustomerChatSent($data))->toOthers();

        return ['status' => 'Message Sent!'];
    }
}
