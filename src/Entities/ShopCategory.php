<?php

namespace Jiny\Shop\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ShopCategory extends Model
{
    use HasFactory;
    protected $table = "shop_categories";

    protected $fillable = [];

    protected static function newFactory()
    {
        return \Jiny\Shop\Database\factories\ShopCategoryFactory::new();
    }
}
