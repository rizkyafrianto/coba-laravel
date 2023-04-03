<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /* protected $fillable = ['title', 'slug', 'excerpt', 'body']; */
    protected $guarded = ['id'];

    // solve N+1 problem with() eager load 
    protected $with = ['category'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
