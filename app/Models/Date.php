<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    use HasFactory;
    protected $table = "dates";
    protected $fillable = ["date", "excavators_worked", "fuel_beginning_day", "purchased_fuel"];

    public function distance()
    {
        return $this->hasOne(DistanceCube::class, 'date', 'date');
    }

    public function trucks()
    {
        return $this->hasMany(TruckInfo::class, 'date', 'date');
    }

    public function excavators()
    {
        return $this->hasMany(ExcavatorInfo::class, 'date', 'date');
    }

    public function other_expenses()
    {
        return $this->hasMany(OtherExpense::class, 'date', 'date');
    }

    public function personal_expenses()
    {
        return $this->hasMany(PersonalCarsInfo::class, 'date', 'date');
    }

    public function parts()
    {
        return $this->hasMany(PartsInfo::class, 'date', 'date');
    }

    public function employers()
    {
        return $this->hasMany(EmployerInfo::class, 'date', 'date');
    }
}
