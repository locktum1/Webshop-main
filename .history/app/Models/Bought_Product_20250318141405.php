<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bought_Product extends Model
{
    use HasFactory;

    protected $fillable = ['price','category','brand'];
}
