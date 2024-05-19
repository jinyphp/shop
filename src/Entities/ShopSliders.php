<?php

namespace Jiny\Shop\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ShopSliders extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table = "shop_sliders";

    protected static function newFactory()
    {
        return \Jiny\Shop\Database\factories\ShopSlidersFactory::new();
    }
}
