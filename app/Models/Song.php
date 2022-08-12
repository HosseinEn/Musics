<?php

namespace App\Models;

use App\Traits\ModelsCommonMethods;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    use ModelsCommonMethods;

    protected $fillable = ["name", "slug", "released_date", "artist_id", "user_id", "published"];

    public function artist() {
        return $this->belongsTo(Artist::class);
    }

    public function album() {
        return $this->belongsTo(Album::class);
    }

    public function scopeSoloSongs(Builder $query) {
        return $query->doesntHave('album');
    }

    public function tags() {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function tagIDs() {
        return $this->tags()->get()->pluck('id')->toArray()?? [];
    }


    public function songFiles() {
        // songs can be 128 or 320
        return $this->hasMany(SongFile::class);
    }
}
