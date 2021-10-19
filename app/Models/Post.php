<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model implements TranslatableContract, HasMedia
{
    use HasFactory, Translatable, InteractsWithMedia, Sluggable;

    public $translatedAttributes = ['title', 'content'];
    //protected $fillable = ['author'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
