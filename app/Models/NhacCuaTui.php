<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhacCuaTui extends Model
{
    use HasFactory;
    protected $fillable = [
        'artis',
        'title',
        'image',
        'audio',
    ];
}
