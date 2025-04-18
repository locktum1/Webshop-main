<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductViewed extends Model
{
    use HasFactory;

    protected $table = 'product_visited';

    protected $fillable = ['user_id','product_id'];
}
