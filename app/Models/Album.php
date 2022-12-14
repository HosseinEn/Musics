<?php

namespace App\Models;

use App\Traits\ModelsCommonMethods;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Album extends Model
{
    use HasFactory;
    use ModelsCommonMethods;

    protected $fillable = [
        "name",
        "slug", 
        "user_id", 
        "released_date", 
        "artist_id", 
        "duration", 
        "published", 
        "publish_date", 
        "auto_publish"
    ];

    public function artist() {
        return $this->belongsTo(Artist::class);
    }

    public function songs() {
        return $this->hasMany(Song::class);
    }

    public function tags() {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function likes() {
        return $this->morphToMany(User::class, "likeable");
    }

    public function tagIDs() {
        return $this->tags()->get()->pluck('id')->toArray()?? [];
    }
    
    public function userLiked() {
        return $this->likes()->where('user_id', Auth::user()->id)->exists();
    }

    public function scopePublished(Builder $query) {
        return $query->where('published', true);
    }
}