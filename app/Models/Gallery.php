<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'category'];

    public static function getUniqueCategories()
    {
        return self::select('category')->distinct()->get();
    }
    
    public function scopeFilter($query, $category) {
        if(request()->has('category')) {
            return $query->where('category', $category);
        }
    }
}