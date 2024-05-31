<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Movie extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $table = 'movies';

    protected $fillable = [
        'title',
        'director',
        'year',
        'genre',
        'time',
        'classification'
    ];

    public function registerMediaCollections(): void
    {
    }
}
