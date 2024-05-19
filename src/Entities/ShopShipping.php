<?php

namespace Jiny\Shop\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ShopShipping extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table = "shop_shipping";

    public function order()
    {
        return $this->belongsTo(ShopOrder::class);
    }

    protected static function newFactory()
    {
        return \Jiny\Shop\Database\factories\ShopShippingFactory::new();
    }
}
