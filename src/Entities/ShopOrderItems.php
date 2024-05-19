<?php

namespace Jiny\Shop\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ShopOrderItems extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table = "shop_order_items";

    public function order()
    {
        return $this->belongsTo(ShopOrder::class);
    }

    protected static function newFactory()
    {
        return \Jiny\Shop\Database\factories\ShopOrderItemsFactory::new();
    }
}
