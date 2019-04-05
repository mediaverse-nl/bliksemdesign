<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';

    /**
     * Fields that are mass assignable
     *
     * @var array
     */
    protected $fillable = ['message'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getMessageArrayAttribute()
    {
        return [
            'author' => $this->user_id == null ? 'me' : $this->user_id,
            'type' => 'text',
            'data' => [
                'text' => $this->message
            ],
        ];
    }
}
