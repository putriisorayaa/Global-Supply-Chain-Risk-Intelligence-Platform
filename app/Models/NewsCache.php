<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsCache extends Model
{
    protected $fillable = [
        'country_id',
        'title',
        'description',
        'source',
        'url',
        'image',
        'published_at',
        'sentiment'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}