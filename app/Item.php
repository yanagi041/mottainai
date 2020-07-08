<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon; //現在時刻取得用


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

    //指定した価格帯の商品を取得
    public function scopeGetPriceRange($query, $minPrice, $maxPrice)
    {
        return $query->whereBetween('discount_price', [$minPrice, $maxPrice]);
    }

    // 賞味期限切れかを指定した場合の各商品取得
    public function scopeGetItemWithBestBy($query, $bestBy)
    {
        switch ($bestBy) {
                // 指定なし(全商品取得)
            case 0:
                return;
                break;
                // 賞味期限前
            case 'date_yet';
                return $query->whereDate('best_by', '>', Carbon::now());
                break;
                // 賞味期限切れ
            case 'date_over';
                return $query->whereDate('best_by', '<', Carbon::now());
                break;
        }
    }
}
