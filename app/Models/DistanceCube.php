<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DistanceCube extends Model
{
    use HasFactory;
    protected $fillable = ["km", "cube_price", "fuel_price", "loaded_cube", "road_price_1", "road_price_2", "date"];
    protected $table = "distance_and_cubes";
}
