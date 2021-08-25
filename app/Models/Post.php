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

    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
	    {
	        $query->when($filters['search'] ?? false, fn($query, $search) =>
	            $query->where(fn($query) =>
	                $query->where('title', 'like', '%' . $search . '%')
	                    ->orWhere('body', 'like', '%' . $search . '%')
	            )
	        );

            $query->when($filters['category'] ?? false, fn($query, $category) =>
	            $query->whereHas('category', fn ($query) =>
	                $query->where('slug', $category)
	            )
	        );

            $query->when($filters['author'] ?? false, fn($query, $author) =>
	            $query->whereHas('author', fn ($query) =>
	                $query->where('username', $author)
	            )
	        );

	    }

    public function category(){  //category_id
        // hasOne hasMany belongsTo belongsToMany

        return $this->belongsTo(Category::class);
    }
    // public function user(){  //user_id
    public function author(){

        return $this->belongsTo(User::class, 'user_id');
    }
}
