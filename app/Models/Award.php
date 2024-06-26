<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'title', 'desc', 'published', 'order'];

    public function scopePublished($query)
    {
        return $query->where('published', true);
    }
}
