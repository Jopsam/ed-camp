<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'price_id',
        'observation',
    ];

    //====================== RELATIONSHIP ======================
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function price()
    {
        return $this->belongsTo(Price::class);
    }
}
