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

        $messages = Message::where('chat_session', '=', $chatSession)
            ->get(['message', 'user_id']);

        $data = [];

        foreach ($messages as $message){
            $data[] = [
                'author' => $message->user_id == null ? 'me' : $message->user_id,
                'type' => 'text',
                'data' => [
                    'text' => $message->message
                ]
            ];
        }

        return $data;
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

        $msgId = $messageInst->insertGetId($data);

        $msg = $messageInst->findOrFail($msgId);

        broadcast(new CustomerChatSent([
            'author' => $msg->user_id == null ? 'me' : $msg->user_id,
            'type' => 'text',
            'data' => [
                'text' => $msg->message
            ],
            'chat_session' => $chatSession,
        ]))->toOthers();

        return ['status' => 'Message Sent!'];
    }
}
