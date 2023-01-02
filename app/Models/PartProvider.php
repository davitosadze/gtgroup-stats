<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartProvider extends Model
{
    use HasFactory;
    protected $table = "part_providers";
    protected $fillable = ["name_geo", "name_eng"];

    public function calculateExpense($from_date, $to_date)
    {
        return PartsInfo::whereBetween('date', [$from_date, $to_date])
            ->where('provider', $this->name_geo)
            ->sum('paid_amount');
    }
}
