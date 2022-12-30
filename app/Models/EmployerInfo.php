<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerInfo extends Model
{
    use HasFactory;
    protected $fillable = ["employer_id", "present", "date"];
    protected $table = "employers_info";

    public function employer()
    {
        return $this->belongsTo(Employer::class, 'employer_id');
    }
}
