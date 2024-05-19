<?php

namespace Jiny\Shop\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\User;

class ShopOrder extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table = "shop_orders";

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function orderItems()
    {
        return $this->hasMany(ShopOderItems::class);
    }

    public function shopping()
    {
        return $this->hasOne(ShopShpping::class);
    }

    public function transaction()
    {
        return $this->hasOne(ShopTransaction::class);
    }


    protected static function newFactory()
    {
        return \Jiny\Shop\Database\factories\ShopOrderFactory::new();
    }
}
