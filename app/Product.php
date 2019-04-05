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


    public function products()
    {
        return [
            'kaartjes' => [
                'price' => 49.99,
                'units' => 500,
                'unity_kind' => 'aantal',
                'icon' => 'paper-plain',
                'options' => [
                    'normaal' => 2.00,
                    'glas' => 3.00,
                    'hoogglans' => 4.00,
                ]
            ]
        ];
    }

}


