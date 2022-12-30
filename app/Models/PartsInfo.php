<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartsInfo extends Model
{
    use HasFactory;
    protected $table = "parts_info";
    protected $fillable = ["provider", "paid_amount", "date"];
}
