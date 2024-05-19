<?php

namespace Jiny\Shop\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HomeCategory extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table = "home_category";


    protected static function newFactory()
    {
        return \Jiny\Shop\Database\factories\HomeCategoryFactory::new();
    }
}
