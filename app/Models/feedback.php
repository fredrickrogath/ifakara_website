<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'created_at',
        'updated_at',
    ];
}