<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;
    protected $fillable = ['image', 'title', 'desc', 'published'];

    public function scopePublished($query)
    {
        return $query->where('published', true);
    }
}
