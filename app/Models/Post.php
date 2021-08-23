<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'excerpt',
        'published_at',
        'body',
        'slug',
        'category_id',
    ];

    // public function getRouteKeyName() {
    //      return 'slug';
    //      }

    public function category(){  //category_id
        // hasOne hasMany belongsTo belongsToMany

        return $this->belongsTo(Category::class);
    }
    // public function user(){  //user_id
    public function author(){

        return $this->belongsTo(User::class, 'user_id');
    }
}
