<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderedItems extends Model
{
    protected $table = 'ordered_items';

    /**
     * Get all of the models that own comments.
     */
    public function orderable()
    {
        return $this->morphTo();
    }
}
