<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherExpense extends Model
{
    use HasFactory;
    protected $table = "other_expenses";
    protected $fillable = ["expense_name", "paid_amount", "date"];
}
