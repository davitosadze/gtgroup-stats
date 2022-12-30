<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalCar extends Model
{
    use HasFactory;
    protected $table = "personal_cars";
    protected $fillable = ["name"];
}
