<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bought_Product extends Model
{
    use HasFactory;

    protected $table = 'bought_products';

    protected $fillable = ['user_id','product_id','price','category','brand','created_at','updated_at'];
}
