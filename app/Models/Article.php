<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    const PATH = '/articles';

    protected $fillable = [
        'title',
        'slug',
        'content',
    ];
}
