<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $connection = 'spoten';
    protected $table = 'movie';
    protected $primaryKey = 'id';

    protected $casts = 
    [
        'stars' => 'array'
    ];

    public function ratings()
    {
        return $this -> hasMany(Rating::class, 'movie_id');
    }
}
