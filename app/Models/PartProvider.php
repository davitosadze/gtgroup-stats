<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartProvider extends Model
{
    use HasFactory;
    protected $table = "part_providers";
    protected $fillable = ["name_geo", "name_eng"];
}
