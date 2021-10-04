<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Territory extends Model
{
    use HasFactory;
    protected $table = 'territories';
    protected $fillable=['zone','region','territorycode','territoryname'];
}
