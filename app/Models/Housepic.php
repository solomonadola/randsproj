<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Housepic extends Model
{
    use HasFactory;
    protected $table = 'housespic';
    protected $fillable = [
        'house_id', 'image'
    ];
}