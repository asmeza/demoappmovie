<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';
    protected $primarykey = 'id';
    public $timestamps='false';
    protected $fillable = [
        'id', 'name', 'movie_types_id'
    ];

    public function movietype()
    {
        return $this->belongsTo('MovieType::class');
    }
}
