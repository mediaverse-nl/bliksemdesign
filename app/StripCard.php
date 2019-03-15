<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StripCard extends Model
{
    protected $table = 'strip_card';

    public function items()
    {
        return $this->morphMany('App\OrderedItems', 'orderable');
    }

    public function strips()
    {
        return $this->hasMany('App\Strip', 'strip_card_id');
    }
}
