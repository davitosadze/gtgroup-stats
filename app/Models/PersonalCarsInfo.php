<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalCarsInfo extends Model
{
    use HasFactory;
    protected $table = "personal_cars_info";
    protected $fillable = ["car_name", "loaded_fuel", "date"];
}
