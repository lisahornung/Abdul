<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderedItem extends Model
{
    public function order()
    {
        return $this->belongsTo('App\Order');
    }
    protected $table = 'ordered_items';
}
