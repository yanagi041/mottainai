<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['user_id', 'pic', 'item_name', 'category_id', 'regular_price', 'discount_price', 'best_before', 'is_sold', 'customer_id', 'is_deleted'];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }


    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
