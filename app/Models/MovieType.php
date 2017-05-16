<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MovieType extends Model
{
    protected $table = 'movie_types';
    protected $primarykey = 'id';
    protected $fillable = [
        'id', 'name'
    ];

    public function movies()
    {
        return $this->hasMany('Movie::class');
    }
}
