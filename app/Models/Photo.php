<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'title',
        'category',
        'description',
        'file_path',
        'size_kb',
    ];
}
