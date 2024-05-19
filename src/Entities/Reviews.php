<?php

namespace Jiny\Shop\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reviews extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table = "reviews";

    protected static function newFactory()
    {
        return \Jiny\Shop\Database\factories\ReviewsFactory::new();
    }
}
