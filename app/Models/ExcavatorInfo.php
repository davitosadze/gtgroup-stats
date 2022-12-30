<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExcavatorInfo extends Model
{
    use HasFactory;
    protected $fillable = ["excavator_id", "worked_hours", "hour_price", "cm_before_load", "cm_current", "cm_morning", "cm_evening", "cm_after_load_expected", "cm_after_load_actual", "loaded_fuel", "date"];
    protected $table = "excavator_info";
}
