<?php

namespace App\Models;

use App\Traits\ModelsCommonMethods;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Artist extends Model
{
    use ModelsCommonMethods;
    use HasFactory;

    protected $fillable = ["name", "slug", "user_id"];

    public function albums() {
        return $this->hasMany(Album::class);
    }

    public function songs() {
        return $this->hasMany(Song::class);
    }

    public function scopeSoloSongs(Builder $query) {
        return $this->songs()->doesntHave('album');
    }
}
