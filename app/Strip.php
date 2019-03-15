<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Strip extends Model
{
    protected $table = 'strip';

    public function strips()
    {
        return $this->belongsTo('App\StripCard', 'strip_card');
    }


}
