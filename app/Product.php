<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    /**
     * Get all of the models that own comments.
     */
    public function orderable()
    {
        return $this->morphTo();
    }

    public function strips()
    {
        return $this->hasMany('App\Strip');
    }
}

