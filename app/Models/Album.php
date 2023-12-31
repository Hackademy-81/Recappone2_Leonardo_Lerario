<?php

namespace App\Models;

use App\Models\User;
use App\Models\Genre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Album extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'artist', 'release', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function genres(){
        return $this->belongsToMany(Genre::class);
    }
}
