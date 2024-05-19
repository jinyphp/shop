<?php

namespace Jiny\Shop\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ShopCoupons extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table = "shop_coupons";

    protected static function newFactory()
    {
        return \Jiny\Shop\Database\factories\ShopCouponsFactory::new();
    }
}
