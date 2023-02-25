<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parish extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'head',
        'image',
        'p_o_box',
        'location',
    ];
}