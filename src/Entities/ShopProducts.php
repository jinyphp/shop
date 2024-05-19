<?php

namespace Jiny\Shop\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Jiny\Shop\Entities\ShopCategory;

class ShopProducts extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table = "shop_products";

    protected static function newFactory()
    {
        return \Jiny\Shop\Database\factories\ShopProductsFactory::new();
    }

    public function category()
    {
        return $this->belongsTo(ShopCategory::class, 'category_id');
    }
}
