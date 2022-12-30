<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TruckInfo extends Model
{
    use HasFactory;
    protected $fillable = ["truck_id", "cm_morning", "liter_in_cm", "cm_evening", "loaded_cube", "loaded_fuel", "date"];
    protected $table = "truck_info";
}
