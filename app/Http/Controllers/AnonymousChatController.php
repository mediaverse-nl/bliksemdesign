<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnonymousChatController extends Controller
{
    /**
     * Get room.
     *
     * @param Room $room
     *
     * @return bool
     */
    public function getRoom(  $room)
    {
        return view('site.chat', [
            'room' => $room,
            'user' => auth()->user()
        ]);
    }
}
