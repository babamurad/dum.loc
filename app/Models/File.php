<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'file', 'order', 'published', 'filename', 'contract'];

    public function scopePublished($query)
    {
        return $query->where('published', true);
    }

    public function scopeContract($query)
    {
        return $query->where('contract', true);
    }
}
