<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Excavator extends Model
{
    use HasFactory;
    protected $fillable = ["name_eng", "name_geo"];
}
