<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class verse extends Model
{
    use HasFactory;
    protected $fillable = [
        'verse',
        'servant'
    ];
}