<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'subtitle',
        'page_content',
        'collumns',
        'active',
        'protected',
    ];

    protected $casts = [
        'protected' => 'boolean',
        'active' => 'boolean',
    ];
}
