<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SKU extends Model
{
    use HasFactory;
    protected $table = 's_k_u_s';
    protected $fillable=['skuid','skucode','skuname','mrp','distributedprice','weight'];
}
