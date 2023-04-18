<?php

namespace App\Models;

use Clockwork\Storage\Search;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    /* protected $fillable = ['title', 'slug', 'excerpt', 'body']; */
    protected $guarded = ['id'];

    // solve N+1 problem with() eager load 
    protected $with = ['category'];

    // using query scope for fitur search and search by filter
    public function scopeFilter($query, array $filters)
    {
        // using null coalescing operator
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%');
            });
        });

        // using fn arrow
        $query->when(
            $filters['category'] ?? false,
            fn ($query, $category) => $query->whereHas(
                'category',
                fn ($query) =>
                $query->where('slug', $category)
            )
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // untuk mengganti slug menjadi default key route bind
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    // sluggable ini merupakan package dari luar laravel
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
