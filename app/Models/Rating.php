<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $connection = 'spoten';
    protected $table = 'rating';
    protected $primaryKey = 'id';

    public function movie()
    {
        return $this -> belongsTo(Movie::class, 'movie_id');
    }
}
