<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalCar extends Model
{
    use HasFactory;
    protected $table = "personal_cars";
    protected $fillable = ["name"];

    public function calculateFuelExpense($from_date, $to_date)
    {
        return PersonalCarsInfo::whereBetween('date', [$from_date, $to_date])
            ->where('car_name', $this->name)
            ->sum('loaded_fuel');
    }
}
